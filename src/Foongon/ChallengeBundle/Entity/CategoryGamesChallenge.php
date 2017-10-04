<?php

namespace Foongon\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * CategoryGamesChallenge
 *
 * @ORM\Table(name="katika_category_games_challenge")
 * @ORM\Entity(repositoryClass="Foongon\ChallengeBundle\Repository\CategoryGamesChallengeRepository")
 */
class CategoryGamesChallenge
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
          * @ORM\Column(name="codeCategoryGamesChallenge", type="string", length=255, unique=true)
          */
         private $codeCategoryGamesChallenge;
     
         /**
          * @var string
          *
          * @ORM\Column(name="nameCategoryGamesChallenge", type="string", length=255, unique=true)
          */
         private $nameCategoryGamesChallenge;
     
         /**
          * @var datetime $created
          * @Gedmo\Timestampable(on="create")
          * @ORM\Column(type="datetime")
          */
         private $created;
     
         /**
          * @var datetime $updated
          * @Gedmo\Timestampable(on="update")
          * @ORM\Column(type="datetime")
          */
         private $updated;
     
         /**
          * @var string $createdFromIp
          * @Gedmo\IpTraceable(on="update")
          * @ORM\Column(type="string", length=45, nullable=true)
          */
         private $createdFromIp;
     
         /**
          * @var string $updatedFromIp
          *
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
          * Set codeCategoryGamesChallenge
          *
          * @param string $codeCategoryGamesChallenge
          * @return CategoryGamesChallenge
          */
         public function setCodeCategoryGamesChallenge($codeCategoryGamesChallenge)
         {
             $this->codeCategoryGamesChallenge = $codeCategoryGamesChallenge;
     
             return $this;
         }
     
         /**
          * Get codeCategoryGamesChallenge
          *
          * @return string 
          */
         public function getCodeCategoryGamesChallenge()
         {
             return $this->codeCategoryGamesChallenge;
         }
     
         /**
          * Set nameCategoryGamesChallenge
          *
          * @param string $nameCategoryGamesChallenge
          * @return CategoryGamesChallenge
          */
         public function setNameCategoryGamesChallenge($nameCategoryGamesChallenge)
         {
             $this->nameCategoryGamesChallenge = $nameCategoryGamesChallenge;
     
             return $this;
         }
     
         /**
          * Get nameCategoryGamesChallenge
          *
          * @return string 
          */
         public function getNameCategoryGamesChallenge()
         {
             return $this->nameCategoryGamesChallenge;
         }
     
         /**
          * Set created
          *
          * @param \DateTime $created
          * @return CategoryGamesChallenge
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
          * @return CategoryGamesChallenge
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
          * @return CategoryGamesChallenge
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
          * @return CategoryGamesChallenge
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
