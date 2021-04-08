<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\QuizzRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=QuizzRepository::class)
 */
class Quizz
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"quizz"})
     *
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Question::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups("quizz")
     */
    private $question;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * * @Groups("quizz")
     */
    private $isCorrect;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(Question $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getIsCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect(?bool $isCorrect): self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }
}
