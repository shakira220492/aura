<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Service\MessageGenerator;

use HomeBundle\Controller\MessageGenerator;

class DefaultController extends Controller {

    private $messageGenerator;
    
    public function __construct(MessageGenerator $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }
    
    public function indexAction() 
    {
        return $this->render('@Home/index.html.twig');
    }

    public function batAction() 
    {
        $vaeee = $this->rompe();
        return $this->render('@Home/Default/bat.html.twig', array("vvvv"=>$vaeee));
    }
    
    public function rompe() 
    {
//        extract a method from the service
        $messageGenerator = $this->messageGenerator;
        $message = $messageGenerator->getHappyMessage();
        
//        extract a property from the service
        
        
        
        
        return $message;
    }
}