<?php

namespace Arbo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Msi\CmfBundle\Doctrine\Extension\Timestampable\TimestampableInterface;

/**
 * @ORM\Entity
 */
class Estimate implements TimestampableInterface
{
    use \Msi\CmfBundle\Doctrine\Extension\Timestampable\Traits\TimestampableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
