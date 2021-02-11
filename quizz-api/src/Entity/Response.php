<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ResponseRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ResponseRepository::class)
 */
class Response
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"question", "quizz"})
     *
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"question", "quizz"})
     *
     */
    private $isCorrect;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"question","quizz"})
     *
     */
    private $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect(bool $isCorrect): self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
