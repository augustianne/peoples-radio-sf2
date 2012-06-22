<?php

namespace Radio\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Radio\MainBundle\Entity\TrackVote
 */
class TrackVote
{
    /**
     * @var integer $trackId
     */
    private $trackId;

    /**
     * @var integer $allVotes
     */
    private $allVotes;

    /**
     * @var integer $tempVotes
     */
    private $tempVotes;

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
     * Set allVotes
     *
     * @param integer $allVotes
     */
    public function setAllVotes($allVotes)
    {
        $this->allVotes = $allVotes;
    }

    /**
     * Get allVotes
     *
     * @return integer 
     */
    public function getAllVotes()
    {
        return $this->allVotes;
    }

    /**
     * Set tempVotes
     *
     * @param integer $tempVotes
     */
    public function setTempVotes($tempVotes)
    {
        $this->tempVotes = $tempVotes;
    }

    /**
     * Get tempVotes
     *
     * @return integer 
     */
    public function getTempVotes()
    {
        return $this->tempVotes;
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