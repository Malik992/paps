<?php

namespace PAPS\LivraisonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class FrontController extends Controller
{
     /**
     * @Route("/accueil")
     */
    public function accueilAction()
    {
        return $this->render('@PAPSLivraison/Front/accueil.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/contact")
     */
    public function contactAction( Request $request)
    {
        return $this->render('@PAPSLivraison/Front/contact.html.twig', array(
            // ...
        ));
    }

        
        /**
         * @Route("/about")
         */
        public function aboutAction()
        {
            return $this->render('@PAPSLivraison/Front/about.html.twig', array(
                // ...
            ));
        }


      /**
     * @Route("/inscoursier")
     */
    public function inscoursierAction(Request $request)
    {
        return $this->render('@PAPSLivraison/Front/inscoursier.html.twig', array(
           // ...
        ));
    }


  /**
     * @Route("/service")
     */
    public function serviceAction()
    {
        return $this->render('@PAPSLivraison/Front/service.html.twig', array(
            // ...
        ));
    }




}
