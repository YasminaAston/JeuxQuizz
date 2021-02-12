<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 *ORM\ManyToOne(...)
 */


class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("question:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("question:read")
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(name="category_id", nullable=false, referencedColumnName="id")
     */
    private $category;

    /**
     * Many Question have Many Response.
     * @ORM\ManyToMany(targetEntity=Question::class)
      * @ORM\JoinTable(name="question_responses",
     *joinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="id")},
     *inverseJoinColumns={@ORM\JoinColumn(name="response_id", referencedColumnName="id", unique=true)})
     * @Groups("question:read")
     */
    private $responses;

    /**
     * @ORM\Column(type="integer")
     * @Groups("question:read")
     */
    private $difficulty;

    public function __construct()
    {
        $this->responses = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getResponses(): Collection
    {
        return $this->responses;
    }

    public function addResponse(self $response): self
    {
        if (!$this->responses->contains($response)) {
            $this->responses[] = $response;
        }

        return $this;
    }

    public function removeResponse(self $response): self
    {
        $this->responses->removeElement($response);

        return $this;
    }

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }
}
