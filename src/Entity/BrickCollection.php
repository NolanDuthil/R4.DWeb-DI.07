<?php

namespace App\Entity;

use App\Repository\BrickCollectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrickCollectionRepository::class)]
class BrickCollection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: Brick::class, mappedBy: 'collection_id')]
    private Collection $collection_id;

    public function __construct()
    {
        $this->collection_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Brick>
     */
    public function getbrick(): Collection
    {
        return $this->collection_id;
    }

    public function addbrick(Brick $collectionId): static
    {
        if (!$this->collection_id->contains($collectionId)) {
            $this->collection_id->add($collectionId);
            $collectionId->setCollectionId($this);
        }

        return $this;
    }

    public function removebrick(Brick $collectionId): static
    {
        if ($this->collection_id->removeElement($collectionId)) {
            // set the owning side to null (unless already changed)
            if ($collectionId->getCollectionId() === $this) {
                $collectionId->setCollectionId(null);
            }
        }

        return $this;
    }
}
