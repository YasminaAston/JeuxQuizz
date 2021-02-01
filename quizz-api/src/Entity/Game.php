<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game", indexes={@ORM\Index(name="FKefqw7nsur06wyld1gavn3ic6b", columns={"user_id"}), @ORM\Index(name="FKng1j875nyvy2ajwns328t9ddu", columns={"score_id"})})
 * @ORM\Entity
 */
class Game
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Score
     *
     * @ORM\ManyToOne(targetEntity="Score")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="score_id", referencedColumnName="id")
     * })
     */
    private $score;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getScore(): ?Score
    {
        return $this->score;
    }

    public function setScore(?Score $score): self
    {
        $this->score = $score;

        return $this;
    }


}
