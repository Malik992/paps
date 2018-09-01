<?php

namespace PAPS\LivraisonBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
 /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('@PAPSLivraison/Front/index.html.twig', array(
            // ...
        ));
    }
}