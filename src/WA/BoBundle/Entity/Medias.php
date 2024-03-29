<?php

namespace WA\BoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medias
 *
 * @ORM\Table(name="medias", indexes={@ORM\Index(name="movies_id", columns={"movies_id"})})
 * @ORM\Entity(repositoryClass="WA\BoBundle\Repository\MediasRepository")
 */
class Medias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nature", type="integer", nullable=true)
     */
    private $nature = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="text", nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="text", nullable=true)
     */
    private $video;

    /**
     * @var \Movies
     *
     * @ORM\ManyToOne(targetEntity="Movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movies_id", referencedColumnName="id")
     * })
     */
    private $movies;



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
     * Set nature
     *
     * @param integer $nature
     * @return Medias
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return integer 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Medias
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Medias
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set movies
     *
     * @param \WA\BoBundle\Entity\Movies $movies
     * @return Medias
     */
    public function setMovies(\WA\BoBundle\Entity\Movies $movies = null)
    {
        $this->movies = $movies;

        return $this;
    }

    /**
     * Get movies
     *
     * @return \WA\BoBundle\Entity\Movies 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    // add
    //show picture
    public function __toString()
    {
        return $this->getPicture();
    }

}
