<?php
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;


class User
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
     * @ORM\Column(type="string")
     
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
    
     */
    private $email;
    /**
     * @ORM\Column(type="string")
     
     */
    private $password;


   
    /**
     * One user has many lieu. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieu;

   

    /**
     * Many Users have Many Roles.
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
     * @ORM\JoinTable(name="users_roles")
     */
    private $roles;


    public function __construct()
    {

        $this->lieux = new ArrayCollection();

        $this->roles = new ArrayCollection();
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

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom =$prenom;
    }

    public function getLieu(){
        return $this->lieu;
    }

    public function setLieu($lieu){
        $this->lieu =$lieu;
    }

    public function getemail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email =$email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

}


?>