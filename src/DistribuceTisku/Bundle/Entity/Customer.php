<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DistribuceTisku\Bundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class Customer {
    
    protected $jmeno;
    protected $prijmeni;
    protected $titul;
    protected $adresa;
    protected $psc;
    protected $bankovniSpojeni;
    protected $telefon;

    public function getJmeno()
    {
        return $this->jmeno;
    }
    
    public function getPrijmeni()
    {
        return $this->prijmeni;
    }
    
    public function getTitul()
    {
        return $this->titul;
    }
    
    public function getAdresa()
    {
        return $this->adresa;
    }
    
    public function getPsc()
    {
        return $this->psc;
    }
    
    public function getBankovniSpojeni()
    {
        return $this->bankovniSpojeni;
    }
    
    public function getTelefon()
    {
        return $this->telefon;
    }
    
    public function setJmeno($default)
    {
        $this->jmeno = $default;
    }
    
    public function setPrijmeni()
    {
        $this->prijmeni;
    }
    
    public function setTitul()
    {
        $this->titul;
    }
    
    public function setAdresa()
    {
        $this->adresa;
    }
    
    public function setPsc()
    {
        $this->psc;
    }
    
    public function setBankovniSpojeni()
    {
        $this->bankovniSpojeni;
    }
    
    public function setTelefon()
    {
        $this->telefon;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata){
        $metadata->addPropertyConstraint('jmeno', new NotBlank());
        $metadata->addPropertyConstraint('prijmeni', new NotBlank());
        $metadata->addPropertyConstraint('adresa', new NotBlank());
        $metadata->addPropertyConstraint('psc', new NotBlank());
        
             
       $metadata->addPropertyConstraint('telefon', new Assert\Length(array(
        'min'        => 9,
        'max'        => 9,
        'minMessage' => 'Telefoní číslo musí být ve tvaru XXXXXXXXX',
        'maxMessage' => 'Telefoní číslo musí být ve tvaru XXXXXXXXX',
        )));
    }
}
