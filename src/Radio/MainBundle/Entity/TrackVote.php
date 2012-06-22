<?php
namespace Radio\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="track_vote")
 */
class TrackVote
{
    /**
     * @ORM\Column(type="integer")
     * @IgnoreAnnotation("fn")
     */
    protected $trackId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $allVotes;

    /**
     * @ORM\Column(type="integer")
     */
    protected $tempVotes;


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
}