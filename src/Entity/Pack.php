<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackRepository")
 */
class Pack
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $employee_id;

    /**
     * @ORM\ManyToOne()ToMany()ToOne(targetEntity="App\Entity\Employee", inversedBy="id")
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deliver_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $picked_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeId(): ?int
    {
        return $this->employee_id;
    }

    public function setEmployeeId(int $employee_id): self
    {
        $this->employee_id = $employee_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDeliverAt(): ?\DateTimeInterface
    {
        return $this->deliver_at;
    }

    public function setDeliverAt(\DateTimeInterface $deliver_at): self
    {
        $this->deliver_at = $deliver_at;

        return $this;
    }

    public function getPickedAt(): ?\DateTimeInterface
    {
        return $this->picked_at;
    }

    public function setPickedAt(\DateTimeInterface $picked_at): self
    {
        $this->picked_at = $picked_at;

        return $this;
    }
}
