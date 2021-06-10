<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Game;
use App\Entity\Quizz;
use App\Form\GameType;
use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\QuestionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/game")
 */
class GameController extends AbstractController
{
    protected GameRepository $gameRepository;

    /**
     * GameController constructor.
     * @param GameRepository $gameRepository
     */
    public function __construct(GameRepository $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }


    /**
     * @Route("/", name="game_index", methods={"GET"})
     */
    public function getAll(GameRepository $gameRepository): Response
    {
        $games = $gameRepository->findAll();
        if (sizeof($games) > 0){
            return $this -> json($gameRepository->findAll(), 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity game is empty'], 200);
        }
    }

    /**
     * @Route("/{id}", name="game_show", methods={"GET"})
     */
    public function show(int $id): Response
    {
        $game = $this-> gameRepository ->find($id);
        if(!$game){
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Game Not Found '] , 404, []);
        }
        return  $this->json($game);
    }

    /**
     * @Route("/new/{user_id}/{category_id}/{difficulty}", name="game_new", methods={"POST"})
     */
    public function new(
        QuestionRepository $questionRepository,
        CategoryRepository $categoryRepository,
        UserRepository $userRepository,
        $category_id, $difficulty,
        $user_id
    ): Response
    {
        $user = $userRepository-> find($user_id);
        if(!$user) {
            return new JsonResponse($this-> json(['status'=>404, 'meassage'=>'User not found']), Response::HTTP_BAD_REQUEST, [], true);
        }
        $category = $categoryRepository->find($category_id);
        $questions = $questionRepository->findBy(array('category' => $category, 'difficulty' => $difficulty));
        if (sizeof($questions) > 0){
            $entityManager = $this->getDoctrine()->getManager();
            $game = new Game();
            $game->setUser($user);
            $questionsQuizz = array_rand($questions, 10);

            foreach ($questionsQuizz as $key => $value) {
                echo "{$key} => {$value} ";
                $quizz = new Quizz();
                $quizz->setQuestion($value);
                $entityManager->persist($quizz);
                $entityManager->flush();
                // array_push($quizzes, $quizz);
                $game->addQuiz($quizz);
            }
            $entityManager->persist($game);
            $entityManager->flush();
            return $this -> json($game, 200);
        }else {
            return $this -> json(['status'=> Response::HTTP_OK, 'message'=> 'Entity question is empty'], 200);
        }
        //return $this -> json(['category_id'=> $category_id, 'difficulty'=> $difficulty], 200);
    }

    /**
     * @Route("/{id}/edit", name="game_edit", methods={"PUT"})
     */
    public function edit(
                          Request $request,
                          SerializerInterface $serializer,
                          ValidatorInterface $validator,
                          int $id
                         ): Response
    {
        $game = $this-> gameRepository ->find($id);
        // deserialize the json
        try {
            $gameData = $serializer->deserialize($request->getContent(), Game::class, 'json');
        } catch (NotEncodableValueException $exception) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $errors = $validator->validate($gameData);
        if (count($errors) > 0) {
            $json = $serializer->serialize($errors, 'json', array_merge([
                'json_encode_options' => JsonResponse::DEFAULT_ENCODING_OPTIONS,
            ], []));
            return $this-> json($json , 400, []);

        }
        if ($errors) {
            return $this-> json(['status'=> Response::HTTP_BAD_REQUEST, 'message'=> 'Bad request '] , 400, []);
        }
        $game->setScore($gameData->getScore());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($game);
        $entityManager->flush();
        return  $this -> json($game, 200);
    }

    /**
     * @Route("/{id}", name="game_delete", methods={"DELETE"})
     */
    public function delete(int $id): Response
    {
        $game = $this-> gameRepository ->find($id);
        if (!$game) {
            return $this-> json(['status'=> Response::HTTP_NOT_FOUND, 'message'=> 'Game not found '] , 404, []);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($game);
        $entityManager->flush();
        return $this-> json(['status'=> Response::HTTP_OK, 'message'=> 'Game deleted'] , 200, []);
    }
}
