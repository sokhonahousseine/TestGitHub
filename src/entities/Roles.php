<?php

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;



class Role
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @GeneratedValue
    
     */
    private $id;
    /**
     * @ORM\Column(type="string")
    
     */
    private $nom;


   
    /**
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $user;


    public function __construct()
    {
        $this->user = new ArrayCollection();

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id =$id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom =$nom;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}