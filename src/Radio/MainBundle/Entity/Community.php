<?php

namespace Radio\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="track")
 */
class Community
{
    /**
     * @ORM\Column(type="integer")
     * @IgnoreAnnotation("fn")
     */
    protected $trackId;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $playCount;


    /**
     * Set trackId
     *
     * @param integer $trackId
     */
    public function setTrackId($trackId)
    {
        $this->trackId = $trackId;
    }

    /**
     * Get trackId
     *
     * @return integer 
     */
    public function getTrackId()
    {
        return $this->trackId;
    }

    /**
     * Set playCount
     *
     * @param smallint $playCount
     */
    public function setPlayCount($playCount)
    {
        $this->playCount = $playCount;
    }

    /**
     * Get playCount
     *
     * @return smallint 
     */
    public function getPlayCount()
    {
        return $this->playCount;
    }
}