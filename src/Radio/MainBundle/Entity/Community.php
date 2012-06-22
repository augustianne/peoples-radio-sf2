<?php

namespace Radio\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Radio\MainBundle\Entity\Community
 */
class Community
{
    /**
     * @var integer $trackId
     */
    private $trackId;

    /**
     * @var smallint $playCount
     */
    private $playCount;

    /**
     * @var Radio\MainBundle\Entity\Track
     */
    private $track;


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

    /**
     * Set track
     *
     * @param Radio\MainBundle\Entity\Track $track
     */
    public function setTrack(\Radio\MainBundle\Entity\Track $track)
    {
        $this->track = $track;
    }

    /**
     * Get track
     *
     * @return Radio\MainBundle\Entity\Track 
     */
    public function getTrack()
    {
        return $this->track;
    }
}