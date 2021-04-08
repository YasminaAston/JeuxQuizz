<?php


namespace App\Dto;


use App\Entity\Category;
use App\Entity\Question;
use Doctrine\Common\Collections\Collection;

class QuestionDto
{
    private $label;
    private $difficulty;
    private $categoryId;
    private $responses;

    /**
     * QuestionDto constructor.
     * @param $label
     * @param $difficulty
     * @param $categoryID
     * @param $responses
     */
    public function __construct($label, $difficulty, $categoryId, $responses)
    {
        $this->label = $label;
        $this->difficulty = $difficulty;
        $this->categoryId = $categoryId;
        $this->responses = $responses;
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

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }

    public function setCategory(?Category $categoryId): self
    {
        $this->categoryId = $categoryId;

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

}