<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ResponseRepository;
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
     * @Groups("question:read")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("question:read")
     */
    private $is_correct;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("question:read")
     */
    private $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsCorrect(): ?bool
    {
        return $this->is_correct;
    }

    public function setIsCorrect(bool $is_correct): self
    {
        $this->is_correct = $is_correct;

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
