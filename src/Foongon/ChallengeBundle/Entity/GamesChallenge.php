<?php

namespace Foongon\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * GamesChallenge
 *
 * @ORM\Table(name="katika_games_challenge")
 * @ORM\Entity(repositoryClass="Foongon\ChallengeBundle\Repository\GamesChallengeRepository")
 */
class GamesChallenge
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
          * @ORM\Column(name="codeGamesChallenge", type="string", length=255, unique=true)
          */
         private $codeGamesChallenge;
     
         /**
          * @var string
          *
          * @ORM\Column(name="nameGamesChallenge", type="string", length=255)
          */
         private $nameGamesChallenge;
     
     
         /**
          * @ORM\ManyToOne(targetEntity="Foongon\ChallengeBundle\Entity\CategoryGamesChallenge", cascade={"persist"})
          * @ORM\JoinColumn(nullable=false)
          */
         private $categoryGamesChallenge;
     
         /**
          * @var string
          *
          * @ORM\Column(name="descriptionGamesChallenge", type="string", length=255)
          */
         private $descriptionGamesChallenge;
     
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
          * Set codeGamesChallenge
          *
          * @param string $codeGamesChallenge
          * @return GamesChallenge
          */
         public function setCodeGamesChallenge($codeGamesChallenge)
         {
             $this->codeGamesChallenge = $codeGamesChallenge;
     
             return $this;
         }
     
         /**
          * Get codeGamesChallenge
          *
          * @return string 
          */
         public function getCodeGamesChallenge()
         {
             return $this->codeGamesChallenge;
         }
     
         /**
          * Set nameGamesChallenge
          *
          * @param string $nameGamesChallenge
          * @return GamesChallenge
          */
         public function setNameGamesChallenge($nameGamesChallenge)
         {
             $this->nameGamesChallenge = $nameGamesChallenge;
     
             return $this;
         }
     
         /**
          * Get nameGamesChallenge
          *
          * @return string 
          */
         public function getNameGamesChallenge()
         {
             return $this->nameGamesChallenge;
         }
     
     
     
         /**
          * Set descriptionGamesChallenge
          *
          * @param string $descriptionGamesChallenge
          * @return GamesChallenge
          */
         public function setDescriptionGamesChallenge($descriptionGamesChallenge)
         {
             $this->descriptionGamesChallenge = $descriptionGamesChallenge;
     
             return $this;
         }
     
         /**
          * Get descriptionGamesChallenge
          *
          * @return string 
          */
         public function getDescriptionGamesChallenge()
         {
             return $this->descriptionGamesChallenge;
         }
     
         /**
          * Set created
          *
          * @param \DateTime $created
          * @return GamesChallenge
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
          * @return GamesChallenge
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
          * @return GamesChallenge
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
          * @return GamesChallenge
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
          * Set categoryGamesChallenge
          *
          * @param \Foongon\ChallengeBundle\Entity\CategoryGamesChallenge $categoryGamesChallenge
          * @return GamesChallenge
          */
         public function setCategoryGamesChallenge(\Foongon\ChallengeBundle\Entity\CategoryGamesChallenge $categoryGamesChallenge)
         {
             $this->categoryGamesChallenge = $categoryGamesChallenge;
     
             return $this;
         }
     
         /**
          * Get categoryGamesChallenge
          *
          * @return \Foongon\ChallengeBundle\Entity\CategoryGamesChallenge 
          */
         public function getCategoryGamesChallenge()
         {
             return $this->categoryGamesChallenge;
         }
}
