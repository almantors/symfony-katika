<?php

namespace Foongon\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
//use Gedmo\Mapping\Annotation as Gedmo;

/**
 * User
 *
 * @ORM\Table(name="katika_user")
 * @ORM\Entity(repositoryClass="Foongon\UserBundle\Repository\UserRepository")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="soldeUser", type="float")
     */
    private $soldeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="creditUser", type="float")
     */
    private $creditUser;


    /**
     * @var boolean
     *
     * @ORM\Column(name="isUpdateProfil", type="boolean")
     */
    private $isUpdateProfil;

    /**
     * @var string
     *
     * @ORM\Column(name="codePays", type="string", length=255)
     */
    private $codePays;

    /**
     * @var datetime $created
     *
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @var string $createdFromIp
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $createdFromIp;

    /**
     * @var string $updatedFromIp
     *
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $updatedFromIp;


    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->creditUser = 0;
        $this->soldeUser = 0;
        $this->isUpdateProfil = false;
        $this->codePays = "+237";
        $this->created = new \Datetime();
        $this->updated = new \Datetime();
    }

    /**
     * Set soldeUser
     *
     * @param float $soldeUser
     * @return User
     */
    public function setSoldeUser($soldeUser)
    {
        $this->soldeUser = $soldeUser;

        return $this;
    }

    /**
     * Get soldeUser
     *
     * @return float 
     */
    public function getSoldeUser()
    {
        return $this->soldeUser;
    }

    /**
     * Set creditUser
     *
     * @param float $creditUser
     * @return User
     */
    public function setCreditUser($creditUser)
    {
        $this->creditUser = $creditUser;

        return $this;
    }

    /**
     * Get creditUser
     *
     * @return float 
     */
    public function getCreditUser()
    {
        return $this->creditUser;
    }

    /**
     * Set codePays
     *
     * @param string $codePays
     * @return User
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePays
     *
     * @return string 
     */
    public function getCodePays()
    {
        return $this->codePays;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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

    /**
     * Set isUpdateProfil
     *
     * @param boolean $isUpdateProfil
     * @return User
     */
    public function setIsUpdateProfil($isUpdateProfil)
    {
        $this->isUpdateProfil = $isUpdateProfil;

        return $this;
    }

    /**
     * Get isUpdateProfil
     *
     * @return boolean 
     */
    public function getIsUpdateProfil()
    {
        return $this->isUpdateProfil;
    }
}
