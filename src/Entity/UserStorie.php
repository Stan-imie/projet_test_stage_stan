<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserStorieRepository")
 */
class UserStorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $action_type;

    /**
     * @ORM\Column(type="json_array")
     */
    private $befor_event_serializer;

    /**
     * @ORM\Column(type="json_array")
     */
    private $after_event_serializer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getActionType(): ?string
    {
        return $this->action_type;
    }

    public function setActionType(string $action_type): self
    {
        $this->action_type = $action_type;

        return $this;
    }

    public function getBeforEventSerializer()
    {
        return $this->befor_event_serializer;
    }

    public function setBeforEventSerializer($befor_event_serializer): self
    {
        $this->befor_event_serializer = $befor_event_serializer;

        return $this;
    }

    public function getAfterEventSerializer()
    {
        return $this->after_event_serializer;
    }

    public function setAfterEventSerializer($after_event_serializer): self
    {
        $this->after_event_serializer = $after_event_serializer;

        return $this;
    }
}
