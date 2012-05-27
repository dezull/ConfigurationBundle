<?php

namespace Openify\Bundle\ConfigurationBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Openify\Bundle\ConfigurationBundle\Entity\Configuration
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Openify\Bundle\ConfigurationBundle\Entity\ConfigurationRepository")
 */
class Configuration
{
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=128, unique=true)
     * @ORM\Id
     */
    private $name;

    /**
     * @var text $value
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * Set name
     *
     * @param  string        $name
     * @return Configuration
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

    /**
     * Set value
     *
     * @param  text          $value
     * @return Configuration
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return text
     */
    public function getValue()
    {
        return $this->value;
    }
}
