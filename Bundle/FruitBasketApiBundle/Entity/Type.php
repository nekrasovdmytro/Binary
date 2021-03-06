<?php

namespace Binary\Bundle\FruitBasketApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="type" ,uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"name"})})
 *
 */
class Type implements \JsonSerializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
