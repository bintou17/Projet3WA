<?php

namespace WA\BoBundle\Entity;

#add 
use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649A0D96FBF", columns={"email_canonical"})})
 * @ORM\Entity(repositoryClass="WA\BoBundle\Repository\UserslRepository")
 */
class User  extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;



    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=200, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="zipcode", type="integer", nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=250, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=100, nullable=true)
     */
    private $ip;




    /**
     * @var string
     *
     * @ORM\Column(name="googleId", type="string", length=255, nullable=true)
     */
    private $googleid;

    /**
     * @var string
     *
     * @ORM\Column(name="googleAccessToken", type="string", length=255, nullable=true)
     */
    private $googleaccesstoken;

    /**
     * @var string
     *
     * @ORM\Column(name="flickrId", type="string", length=255, nullable=true)
     */
    private $flickrid;

    /**
     * @var string
     *
     * @ORM\Column(name="flickrAccessToken", type="string", length=255, nullable=true)
     */
    private $flickraccesstoken;

    /**
     * @var string
     *
     * @ORM\Column(name="githubId", type="string", length=255, nullable=true)
     */
    private $githubid;

    /**
     * @var string
     *
     * @ORM\Column(name="githubAccessToken", type="string", length=255, nullable=true)
     */
    private $githubaccesstoken;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedinAccessToken", type="string", length=255, nullable=true)
     */
    private $linkedinaccesstoken;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedinId", type="string", length=255, nullable=true)
     */
    private $linkedinid;


    /**
     * @var string
     *
     * @ORM\Column(name="extras", type="text", nullable=true)
     */
    private $extras;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=300, nullable=true)
     */
    private $facebookid;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookAccessToken", type="string", length=300, nullable=true)
     */
    private $facebookaccesstoken;

    /**
     * @var string
     *
     * @ORM\Column(name="twitterId", type="string", length=255, nullable=true)
     */
    private $twitterid;

    /**
     * @var string
     *
     * @ORM\Column(name="twitterAccessToken", type="string", length=255, nullable=true)
     */
    private $twitteraccesstoken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastActivity", type="datetime", nullable=true)
     */
    private $lastactivity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Movies", inversedBy="user")
     * @ORM\JoinTable(name="user_favoris",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="movies_id", referencedColumnName="id")
     *   }
     * )
     */
    private $movies;

    /**
     * Constructor
     */
    public function __construct()
    {
        # pour le fos_user_bundle
        parent::__construct();

        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     * @return User
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return integer 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return User
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }



    /**
     * Set googleid
     *
     * @param string $googleid
     * @return User
     */
    public function setGoogleid($googleid)
    {
        $this->googleid = $googleid;

        return $this;
    }

    /**
     * Get googleid
     *
     * @return string 
     */
    public function getGoogleid()
    {
        return $this->googleid;
    }

    /**
     * Set googleaccesstoken
     *
     * @param string $googleaccesstoken
     * @return User
     */
    public function setGoogleaccesstoken($googleaccesstoken)
    {
        $this->googleaccesstoken = $googleaccesstoken;

        return $this;
    }

    /**
     * Get googleaccesstoken
     *
     * @return string 
     */
    public function getGoogleaccesstoken()
    {
        return $this->googleaccesstoken;
    }

    /**
     * Set flickrid
     *
     * @param string $flickrid
     * @return User
     */
    public function setFlickrid($flickrid)
    {
        $this->flickrid = $flickrid;

        return $this;
    }

    /**
     * Get flickrid
     *
     * @return string 
     */
    public function getFlickrid()
    {
        return $this->flickrid;
    }

    /**
     * Set flickraccesstoken
     *
     * @param string $flickraccesstoken
     * @return User
     */
    public function setFlickraccesstoken($flickraccesstoken)
    {
        $this->flickraccesstoken = $flickraccesstoken;

        return $this;
    }

    /**
     * Get flickraccesstoken
     *
     * @return string 
     */
    public function getFlickraccesstoken()
    {
        return $this->flickraccesstoken;
    }

    /**
     * Set githubid
     *
     * @param string $githubid
     * @return User
     */
    public function setGithubid($githubid)
    {
        $this->githubid = $githubid;

        return $this;
    }

    /**
     * Get githubid
     *
     * @return string 
     */
    public function getGithubid()
    {
        return $this->githubid;
    }

    /**
     * Set githubaccesstoken
     *
     * @param string $githubaccesstoken
     * @return User
     */
    public function setGithubaccesstoken($githubaccesstoken)
    {
        $this->githubaccesstoken = $githubaccesstoken;

        return $this;
    }

    /**
     * Get githubaccesstoken
     *
     * @return string 
     */
    public function getGithubaccesstoken()
    {
        return $this->githubaccesstoken;
    }

    /**
     * Set linkedinaccesstoken
     *
     * @param string $linkedinaccesstoken
     * @return User
     */
    public function setLinkedinaccesstoken($linkedinaccesstoken)
    {
        $this->linkedinaccesstoken = $linkedinaccesstoken;

        return $this;
    }

    /**
     * Get linkedinaccesstoken
     *
     * @return string 
     */
    public function getLinkedinaccesstoken()
    {
        return $this->linkedinaccesstoken;
    }

    /**
     * Set linkedinid
     *
     * @param string $linkedinid
     * @return User
     */
    public function setLinkedinid($linkedinid)
    {
        $this->linkedinid = $linkedinid;

        return $this;
    }

    /**
     * Get linkedinid
     *
     * @return string 
     */
    public function getLinkedinid()
    {
        return $this->linkedinid;
    }


    /**
     * Set extras
     *
     * @param string $extras
     * @return User
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;

        return $this;
    }

    /**
     * Get extras
     *
     * @return string 
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return User
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return User
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set facebookid
     *
     * @param string $facebookid
     * @return User
     */
    public function setFacebookid($facebookid)
    {
        $this->facebookid = $facebookid;

        return $this;
    }

    /**
     * Get facebookid
     *
     * @return string 
     */
    public function getFacebookid()
    {
        return $this->facebookid;
    }

    /**
     * Set facebookaccesstoken
     *
     * @param string $facebookaccesstoken
     * @return User
     */
    public function setFacebookaccesstoken($facebookaccesstoken)
    {
        $this->facebookaccesstoken = $facebookaccesstoken;

        return $this;
    }

    /**
     * Get facebookaccesstoken
     *
     * @return string 
     */
    public function getFacebookaccesstoken()
    {
        return $this->facebookaccesstoken;
    }

    /**
     * Set twitterid
     *
     * @param string $twitterid
     * @return User
     */
    public function setTwitterid($twitterid)
    {
        $this->twitterid = $twitterid;

        return $this;
    }

    /**
     * Get twitterid
     *
     * @return string 
     */
    public function getTwitterid()
    {
        return $this->twitterid;
    }

    /**
     * Set twitteraccesstoken
     *
     * @param string $twitteraccesstoken
     * @return User
     */
    public function setTwitteraccesstoken($twitteraccesstoken)
    {
        $this->twitteraccesstoken = $twitteraccesstoken;

        return $this;
    }

    /**
     * Get twitteraccesstoken
     *
     * @return string 
     */
    public function getTwitteraccesstoken()
    {
        return $this->twitteraccesstoken;
    }



    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return User
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set lastactivity
     *
     * @param \DateTime $lastactivity
     * @return User
     */
    public function setLastactivity($lastactivity)
    {
        $this->lastactivity = $lastactivity;

        return $this;
    }

    /**
     * Get lastactivity
     *
     * @return \DateTime 
     */
    public function getLastactivity()
    {
        return $this->lastactivity;
    }

    /**
     * Add movies
     *
     * @param \WA\BoBundle\Entity\Movies $movies
     * @return User
     */
    public function addMovie(\WA\BoBundle\Entity\Movies $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \WA\BoBundle\Entity\Movies $movies
     */
    public function removeMovie(\WA\BoBundle\Entity\Movies $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    // add
    // show email
    public function __toString()
    {
       return $this->getEmail();
    }

}
