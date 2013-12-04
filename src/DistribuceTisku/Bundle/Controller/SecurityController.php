<?php

// src/Acme/SecurityBundle/Controller/SecurityController.php;
namespace DistribuceTisku\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityController extends Controller
{
    public function loginAction()
    {
        return$this->render('DistribuceTiskuBundle:Security:login.html.twig');
    }
    
    public function login_checkAction()
    {
        $request = $this->getRequest();
        $user = $request->get("_username");
        $pass = $request->get("_password");
        $id = "";
        
        $conn = $this->get('database_connection');
        $sql = "SELECT type FROM users WHERE passwd = :pass AND user_id = :user";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue("pass", $user);
        $stmt->bindValue("user", $pass);
        $stmt->execute();
         
        foreach($stmt as $type){
            $id = $type["type"];
        }
        
        if($id != ""){
            $session = new Session(); 
            $session->start();
            $session->set('user', $user);
            $session->set('type', $id);
            return $this->render('DistribuceTiskuBundle:Page:index.html.twig');
        }else{
            return$this->render('DistribuceTiskuBundle:Security:login.html.twig');
        }
    }
    
    public function logoutAction()
    {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return$this->render('DistribuceTiskuBundle:Security:logout.html.twig');
    }
}
