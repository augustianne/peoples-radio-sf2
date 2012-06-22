<?php

namespace Radio\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Radio\MainBundle\Entity\Track
 */
class Track
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $filename
     */
    private $filename;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $artist
     */
    private $artist;

    /**
     * @var string $time
     */
    private $time;

    /**
     * @var string $genre
     */
    private $genre;


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
     * Set filename
     *
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set artist
     *
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set time
     *
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set genre
     *
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }
}