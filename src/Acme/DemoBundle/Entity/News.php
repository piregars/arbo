<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Msi\CmfBundle\Doctrine\Extension\Uploadable\UploadableInterface;
use Msi\CmfBundle\Doctrine\Extension\Timestampable\TimestampableInterface;
use Msi\CmfBundle\Tools\Cutter;

/**
 * @ORM\Entity
 */
class News implements TimestampableInterface, UploadableInterface
{
    use \Msi\CmfBundle\Doctrine\Extension\Uploadable\Traits\UploadableEntity;
    use \Msi\CmfBundle\Doctrine\Extension\Timestampable\Traits\TimestampableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $photo;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $picture;

    protected $photoFile;

    protected $pictureFile;

    public function getUploadFields()
    {
        return ['photo', 'picture'];
    }

    // public function processPhoto($file)
    // {
    //     $cutter = new Cutter($file);
    //     $cutter->resize(100, 100)->save('t');
    // }

    // public function processPicture($file)
    // {
    //     $cutter = new Cutter($file);
    //     $cutter->resize(100, 100)->save('t');
    // }

    // getset

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPhotoFile()
    {
        return $this->photoFile;
    }

    public function setPhotoFile($photoFile)
    {
        $this->photoFile = $photoFile;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    public function getPictureFile()
    {
        return $this->pictureFile;
    }

    public function setPictureFile($pictureFile)
    {
        $this->pictureFile = $pictureFile;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}
