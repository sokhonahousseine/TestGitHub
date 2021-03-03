<?php
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;


class Lieu
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

    /** * @ORM\Column(type="double") */
    private $longitude;

    /** * @ORM\Column(type="decimal") */
    private $latitude;
    


   
    /**
     * Many  lieu have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User",  inversedBy="lieu") 
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    
    /**
     * One lieu has many formations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
     */

    private $formations;

    public function __construct()
    {
        $this->formations = new ArrayCollection();
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

    public function getLongitude(){
        return $this->longitude;
    }

    public function setLongitude($longitude){
        $this->longitude =$longitude;
    }

    public function getLatitude(){
        return $this->latitude;
    }

    public function setLatitude($latitude){
        $this->latitude =$latitude;
    }

    public function getFormation(){
        return $this->formations;
    }

    public function setFormation($formations){
        $this->formation =$formations;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user =$user;
    }

}


?>