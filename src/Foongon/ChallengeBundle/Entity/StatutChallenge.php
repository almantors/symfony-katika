<?php

namespace Foongon\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * StatutChallenge
 *
 * @ORM\Table(name="statut_challenge")
 * @ORM\Entity(repositoryClass="Foongon\ChallengeBundle\Repository\StatutChallengeRepository")
 */
class StatutChallenge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameStatut", type="string", length=255, nullable=true)
     */
    private $nameStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="codeStatut", type="string", length=255)
     */
    private $codeStatut;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @var string $createdFromIp
     *
     * @Gedmo\IpTraceable(on="create")
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $createdFromIp;

    /**
     * @var string $updatedFromIp
     *
     * @Gedmo\IpTraceable(on="update")
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $updatedFromIp;

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
     * Set nameStatut
     *
     * @param string $nameStatut
     * @return StatutChallenge
     */
    public function setNameStatut($nameStatut)
    {
        $this->nameStatut = $nameStatut;

        return $this;
    }

    /**
     * Get nameStatut
     *
     * @return string 
     */
    public function getNameStatut()
    {
        return $this->nameStatut;
    }

    /**
     * Set codeStatut
     *
     * @param string $codeStatut
     * @return StatutChallenge
     */
    public function setCodeStatut($codeStatut)
    {
        $this->codeStatut = $codeStatut;

        return $this;
    }

    /**
     * Get codeStatut
     *
     * @return string
     */
    public function getCodeStatut()
    {
        return $this->codeStatut;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return StatutChallenge
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return StatutChallenge
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set createdFromIp
     *
     * @param string $createdFromIp
     * @return StatutChallenge
     */
    public function setCreatedFromIp($createdFromIp)
    {
        $this->createdFromIp = $createdFromIp;

        return $this;
    }

    /**
     * Get createdFromIp
     *
     * @return string
     */
    public function getCreatedFromIp()
    {
        return $this->createdFromIp;
    }

    /**
     * Set updatedFromIp
     *
     * @param string $updatedFromIp
     * @return StatutChallenge
     */
    public function setUpdatedFromIp($updatedFromIp)
    {
        $this->updatedFromIp = $updatedFromIp;

        return $this;
    }

    /**
     * Get updatedFromIp
     *
     * @return string
     */
    public function getUpdatedFromIp()
    {
        return $this->updatedFromIp;
    }

}
