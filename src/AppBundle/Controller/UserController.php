<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{
    public function indexAction()
    {
    	$user = new User();
    	$form = $this->createForm(new UserType(), $user);

    	$request = $this->get('request');
    	$form->handleRequest($request);

    	if ($request->getMethod() == 'POST')
    	{
    		if ($form->isValid())
    		{
    			return new Response('Person Created');
    		}
	        return $this->render('AppBundle:User:index.html.twig', array('form' => $form->createView()));    
    	}

        return $this->render('AppBundle:User:index.html.twig', array('form' => $form->createView()));    
    }

}
