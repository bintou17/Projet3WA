<?php

namespace WA\BoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="movies", indexes={@ORM\Index(name="categories_id", columns={"categories_id"})})
 * @ORM\Entity(repositoryClass="WA\BoBundle\Repository\MoviesRepository")
 */
class Movies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_film", type="string", length=250, nullable=true)
     */
    private $typeFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=400, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="trailer", type="text", nullable=true)
     */
    private $trailer;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=11, nullable=true)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="distributeur", type="string", length=250, nullable=true)
     */
    private $distributeur;

    /**
     * @var string
     *
     * @ORM\Column(name="bo", type="string", length=250, nullable=true)
     */
    private $bo;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_release", type="date", nullable=true)
     */
    private $dateRelease;

    /**
     * @var float
     *
     * @ORM\Column(name="note_presse", type="float", precision=10, scale=0, nullable=true)
     */
    private $notePresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cover", type="boolean", nullable=true)
     */
    private $cover;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shop", type="boolean", nullable=true)
     */
    private $shop;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deleted", type="datetime", nullable=true)
     */
    private $dateDeleted;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=250, nullable=true)
     */
    private $ref;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="taxe", type="float", precision=10, scale=0, nullable=true)
     */
    private $taxe;

    /**
     * @var integer
     *
     * @ORM\Column(name="shop_mode", type="integer", nullable=true)
     */
    private $shopMode;

    /**
     * @var integer
     *
     * @ORM\Column(name="shop_type_dvd", type="integer", nullable=true)
     */
    private $shopTypeDvd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="shop_date", type="date", nullable=true)
     */
    private $shopDate;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     * })
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Actors", mappedBy="movies")
     */
    private $actors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cinema", mappedBy="movies")
     */
    private $cinemas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Directors", mappedBy="movies")
     */
    private $directors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Movies", inversedBy="movies")
     * @ORM\JoinTable(name="related_movies",
     *   joinColumns={
     *     @ORM\JoinColumn(name="movies_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="movies_id_related", referencedColumnName="id")
     *   }
     * )
     */
    private $moviesRelated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tags", inversedBy="movies")
     * @ORM\JoinTable(name="tags_movies",
     *   joinColumns={
     *     @ORM\JoinColumn(name="movies_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tags_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="movies")
     */
    private $user;

    //add
    // relation bidirectionnelle  with comments
     /**
      * @ORM\OneToMany(targetEntity="Comments", mappedBy="movies")
      */
    protected $comments;

    // relation bidirectionnelle with medias
    /**
     * @ORM\OneToMany(targetEntity="Medias", mappedBy="movies")
     */
    protected $medias;

    /**
     * @ORM\OneToMany(targetEntity="Sessions", mappedBy="movies")
     */
    protected $sessions ;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cinemas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->directors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->moviesRelated = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        // add
        // relation bidirectionnelle
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sessions = new \Doctrine\Common\Collections\ArrayCollection();
        // put dateRelease and dateCreated at now
        $this->dateRelease = new \Datetime('now');
        $this->dateCreated = new \Datetime('now');
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
     * Set typeFilm
     *
     * @param string $typeFilm
     * @return Movies
     */
    public function setTypeFilm($typeFilm)
    {
        $this->typeFilm = $typeFilm;

        return $this;
    }

    /**
     * Get typeFilm
     *
     * @return string 
     */
    public function getTypeFilm()
    {
        return $this->typeFilm;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Movies
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     * @return Movies
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string 
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movies
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Movies
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set trailer
     *
     * @param string $trailer
     * @return Movies
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Get trailer
     *
     * @return string 
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Set languages
     *
     * @param string $languages
     * @return Movies
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set distributeur
     *
     * @param string $distributeur
     * @return Movies
     */
    public function setDistributeur($distributeur)
    {
        $this->distributeur = $distributeur;

        return $this;
    }

    /**
     * Get distributeur
     *
     * @return string 
     */
    public function getDistributeur()
    {
        return $this->distributeur;
    }

    /**
     * Set bo
     *
     * @param string $bo
     * @return Movies
     */
    public function setBo($bo)
    {
        $this->bo = $bo;

        return $this;
    }

    /**
     * Get bo
     *
     * @return string 
     */
    public function getBo()
    {
        return $this->bo;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Movies
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set budget
     *
     * @param float $budget
     * @return Movies
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Movies
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set dateRelease
     *
     * @param \DateTime $dateRelease
     * @return Movies
     */
    public function setDateRelease($dateRelease)
    {
        $this->dateRelease = $dateRelease;

        return $this;
    }

    /**
     * Get dateRelease
     *
     * @return \DateTime 
     */
    public function getDateRelease()
    {
        return $this->dateRelease;
    }

    /**
     * Set notePresse
     *
     * @param float $notePresse
     * @return Movies
     */
    public function setNotePresse($notePresse)
    {
        $this->notePresse = $notePresse;

        return $this;
    }

    /**
     * Get notePresse
     *
     * @return float 
     */
    public function getNotePresse()
    {
        return $this->notePresse;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Movies
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set cover
     *
     * @param boolean $cover
     * @return Movies
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return boolean 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set shop
     *
     * @param boolean $shop
     * @return Movies
     */
    public function setShop($shop)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return boolean 
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Movies
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Movies
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Movies
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Movies
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set dateDeleted
     *
     * @param \DateTime $dateDeleted
     * @return Movies
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;

        return $this;
    }

    /**
     * Get dateDeleted
     *
     * @return \DateTime 
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return Movies
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Movies
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Movies
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set taxe
     *
     * @param float $taxe
     * @return Movies
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;

        return $this;
    }

    /**
     * Get taxe
     *
     * @return float 
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * Set shopMode
     *
     * @param integer $shopMode
     * @return Movies
     */
    public function setShopMode($shopMode)
    {
        $this->shopMode = $shopMode;

        return $this;
    }

    /**
     * Get shopMode
     *
     * @return integer 
     */
    public function getShopMode()
    {
        return $this->shopMode;
    }

    /**
     * Set shopTypeDvd
     *
     * @param integer $shopTypeDvd
     * @return Movies
     */
    public function setShopTypeDvd($shopTypeDvd)
    {
        $this->shopTypeDvd = $shopTypeDvd;

        return $this;
    }

    /**
     * Get shopTypeDvd
     *
     * @return integer 
     */
    public function getShopTypeDvd()
    {
        return $this->shopTypeDvd;
    }

    /**
     * Set shopDate
     *
     * @param \DateTime $shopDate
     * @return Movies
     */
    public function setShopDate($shopDate)
    {
        $this->shopDate = $shopDate;

        return $this;
    }

    /**
     * Get shopDate
     *
     * @return \DateTime 
     */
    public function getShopDate()
    {
        return $this->shopDate;
    }

    /**
     * Set categories
     *
     * @param \WA\BoBundle\Entity\Categories $categories
     * @return Movies
     */
    public function setCategories(\WA\BoBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \WA\BoBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add actors
     *
     * @param \WA\BoBundle\Entity\Actors $actors
     * @return Movies
     */
    public function addActor(\WA\BoBundle\Entity\Actors $actors)
    {
        $this->actors[] = $actors;

        return $this;
    }

    /**
     * Remove actors
     *
     * @param \WA\BoBundle\Entity\Actors $actors
     */
    public function removeActor(\WA\BoBundle\Entity\Actors $actors)
    {
        $this->actors->removeElement($actors);
    }

    /**
     * Get actors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Add cinemas
     *
     * @param \WA\BoBundle\Entity\Cinema $cinemas
     * @return Movies
     */
    public function addCinema(\WA\BoBundle\Entity\Cinema $cinemas)
    {
        $this->cinemas[] = $cinemas;

        return $this;
    }

    /**
     * Remove cinemas
     *
     * @param \WA\BoBundle\Entity\Cinema $cinemas
     */
    public function removeCinema(\WA\BoBundle\Entity\Cinema $cinemas)
    {
        $this->cinemas->removeElement($cinemas);
    }

    /**
     * Get cinemas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCinemas()
    {
        return $this->cinemas;
    }

    /**
     * Add directors
     *
     * @param \WA\BoBundle\Entity\Directors $directors
     * @return Movies
     */
    public function addDirector(\WA\BoBundle\Entity\Directors $directors)
    {
        $this->directors[] = $directors;

        return $this;
    }

    /**
     * Remove directors
     *
     * @param \WA\BoBundle\Entity\Directors $directors
     */
    public function removeDirector(\WA\BoBundle\Entity\Directors $directors)
    {
        $this->directors->removeElement($directors);
    }

    /**
     * Get directors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * Add moviesRelated
     *
     * @param \WA\BoBundle\Entity\Movies $moviesRelated
     * @return Movies
     */
    public function addMoviesRelated(\WA\BoBundle\Entity\Movies $moviesRelated)
    {
        $this->moviesRelated[] = $moviesRelated;

        return $this;
    }

    /**
     * Remove moviesRelated
     *
     * @param \WA\BoBundle\Entity\Movies $moviesRelated
     */
    public function removeMoviesRelated(\WA\BoBundle\Entity\Movies $moviesRelated)
    {
        $this->moviesRelated->removeElement($moviesRelated);
    }

    /**
     * Get moviesRelated
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMoviesRelated()
    {
        return $this->moviesRelated;
    }

    /**
     * Add tags
     *
     * @param \WA\BoBundle\Entity\Tags $tags
     * @return Movies
     */
    public function addTag(\WA\BoBundle\Entity\Tags $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \WA\BoBundle\Entity\Tags $tags
     */
    public function removeTag(\WA\BoBundle\Entity\Tags $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add user
     *
     * @param \WA\BoBundle\Entity\User $user
     * @return Movies
     */
    public function addUser(\WA\BoBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \WA\BoBundle\Entity\User $user
     */
    public function removeUser(\WA\BoBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
    // add
    //show title
     public function __toString()
     {
        return $this->getTitle();
     }

    // getters and setters of comments

    /**
     * Add comment
     *
     * @param \WA\BoBundle\Entity\Comments $comment
     * @return Movies
     */
    public function addComment(\WA\BoBundle\Entity\Comments $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \WA\BoBundle\Entity\Comments $comment
     */
    public function removeComment(\WA\BoBundle\Entity\Comments $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    // getters and setters of medias

    /**
     * Add medias
     *
     * @param \WA\BoBundle\Entity\Medias $medias
     * @return Movies
     */
    public function addMedia(\WA\BoBundle\Entity\Medias $medias)
    {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \WA\BoBundle\Entity\Medias $medias
     */
    public function removeMedia(\WA\BoBundle\Entity\Medias $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }

    // getters and setters of session

    /**
     * Add sessions
     *
     * @param \WA\BoBundle\Entity\Sessions $sessions
     * @return Movies
     */
    public function addSession(\WA\BoBundle\Entity\Sessions $sessions)
    {
        $this->sessions[] = $sessions;

        return $this;
    }

    /**
     * Remove sessions
     *
     * @param \WA\BoBundle\Entity\Sessions $sessions
     */
    public function removeSession(\WA\BoBundle\Entity\Sessions $sessions)
    {
        $this->sessions->removeElement($sessions);
    }

    /**
     * Get sessions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessions()
    {
        return $this->sessions;
    }


}
