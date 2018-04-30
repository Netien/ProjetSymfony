<?php

namespace PW\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="PW\MainBundle\Repository\GroupeRepository")
 */
class Groupe
{


  /**
    * @ORM\ManyToMany(targetEntity="PW\UserBundle\Entity\User", mappedBy="groups", cascade={"persist"})
    */
    private $users; // Notez le « s », une annonce est liée à plusieurs candidatures

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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo_leader", type="string", length=255)
     */
    private $pseudoLeader;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Groupe
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Groupe
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
     * Set pseudoLeader
     *
     * @param string $pseudoLeader
     *
     * @return Groupe
     */
    public function setPseudoLeader($pseudoLeader)
    {
        $this->pseudoLeader = $pseudoLeader;

        return $this;
    }

    /**
     * Get pseudoLeader
     *
     * @return string
     */
    public function getPseudoLeader()
    {
        return $this->pseudoLeader;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \PW\UserBundle\Entity\User $user
     *
     * @return Groupe
     */
    public function addUser(\PW\UserBundle\Entity\User $user)
    {
        $this->users[] = $user;
        $user->addGroup($this);

        return $this;
    }

    /**
     * Remove user
     *
     * @param \PW\UserBundle\Entity\User $user
     */
    public function removeUser(\PW\UserBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
