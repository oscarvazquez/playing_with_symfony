<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;


class UserController extends Controller
{
    public function indexAction()
    {
    	$user = new User();
    	$form = $this->createForm(new UserType(), $user);

        return $this->render('AppBundle:User:index.html.twig', array('form' => $form->createView()));    
    }

}
