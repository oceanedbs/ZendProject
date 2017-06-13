<?php

class Application_Model_Admin extends App_Model_Abstract
{ 

    public function __construct()
    {
    }

    public function getSubCats()
    {
        return $this->getResource('Category')->getSubCats();
    }
    
    public function saveStaff($info)
    {
    	return $this->getResource('Utente')->insertStaff($info);
    }
    
    public function saveAziende($info)
    {
    	return $this->getResource('Aziende')->insertAziende($info);
    }
   
    public function getUserByName($info)
    {
    	return $this->getResource('Utente')->getUserByName($info);
    }
    
    public function getAziende($paged)
    {
       return $this->getResource('Aziende')->getAziende($paged);
       
    }
    
    public function getInfoAzienda($idazienda){
        return $this->getResource('Aziende')->getInfoAzienda($idazienda);
    }
    
    public function modificaAziende($values,$idazi)
    {
        return $this->getResource('Aziende')->modificaAziende($values,$idazi);
    }
    
     public function cancellaAzienda($idazienda)
    {
        return $this->getResource('Aziende')->cancellaAzienda($idazienda);

    }
    
    public function numeroCoupon()
    {
        return $this->getResource('Coupon')->numeroCoupon();
    }
}