<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function numberAction()
    {

	    return $this->render('index.html.twig'
		    );
    }
    /**
     * @Route("/signin", name="signin")
     */
    public function signinAction()
    {

	    return $this->render('signin.html.twig'
		    );
    }
    /**
     * @Route("/register", name="register")
     */
    public function registerAction()
    {

	    return $this->render('register.html.twig'
		    );
    }
}
