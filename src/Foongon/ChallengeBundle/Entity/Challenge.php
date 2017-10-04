<?php

namespace Foongon\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Challenge
 *
 * @ORM\Table(name="challenge")
 * @ORM\Entity(repositoryClass="Foongon\ChallengeBundle\Repository\ChallengeRepository")
 */
class Challenge
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
     * @ORM\Column(name="codeChallenge", type="string", length=255)
     */
    private $codeChallenge;

    /**
     * @var string
     *
     * @ORM\Column(name="amountChallenge", type="float")
     */
    private $amountChallenge;

    /**
     * @var string
     *
     * @ORM\Column(name="pointUserCreator", type="smallint")
     */
    private $pointUserCreator;
    /**
     * @var string
     *
     * @ORM\Column(name="pointUserChellenger", type="smallint")
     */
    private $pointUserChellenger;

    /**
     * @ORM\ManyToOne(targetEntity="Foongon\UserBundle\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userCreateChallenge;
    /**
     * @ORM\ManyToOne(targetEntity="Foongon\UserBundle\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $userWinnerChallenge;
    /**
     * @ORM\ManyToOne(targetEntity="Foongon\UserBundle\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $userLostChallenge;
    /**
     * @ORM\ManyToOne(targetEntity="Foongon\ChallengeBundle\Entity\GamesChallenge", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $gamesChallenge;
    /**
     * @ORM\ManyToOne(targetEntity="Foongon\UserBundle\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $userChallenger;

    /**
     * @ORM\ManyToOne(targetEntity="Foongon\ChallengeBundle\Entity\StatutChallenge", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $statutChallenge;
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
     * @var string
     *
     * @ORM\Column(name="is_point_update_challenger", type="boolean", nullable=true)
     * cette variable permet de savoir si pour un challenge , les point du challenger on été mis a jour
     */
    private $isPointUpdateChallenger;

    /**
     * @var string
     *
     * @ORM\Column(name="is_point_update_user_creator", type="boolean", nullable=true)
     * cette variable permet de savoir si pour un challenge , les point du créateur du challenge sont mis a jour
     */
    private $isPointUpdateUserCreator;

    /**
     * @var string
     *
     * @ORM\Column(name="is_challenger", type="boolean", nullable=true)
     * cette variable permet de savoir si un challenge a un challenger
     */
    private $is_challenger;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
