<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // paps_livraison_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'PAPS\\LivraisonBundle\\Controller\\DefaultController::indexAction',  '_route' => 'paps_livraison_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_paps_livraison_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'paps_livraison_homepage'));
            }

            return $ret;
        }
        not_paps_livraison_homepage:

        // index
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'PAPS\\LivraisonBundle\\Controller\\FrontController::indexAction',  '_route' => 'index',);
        }

        // inscoursier
        if ('/inscoursier' === $pathinfo) {
            return array (  '_controller' => 'PAPS\\LivraisonBundle\\Controller\\FrontController::inscoursierAction',  '_route' => 'inscoursier',);
        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'PAPS\\LivraisonBundle\\Controller\\FrontController::contactAction',  '_route' => 'contact',);
        }

        // service
        if ('/service' === $pathinfo) {
            return array (  '_controller' => 'PAPS\\LivraisonBundle\\Controller\\FrontController::serviceAction',  '_route' => 'service',);
        }

        // about
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'PAPS\\LivraisonBundle\\Controller\\FrontController::aboutAction',  '_route' => 'about',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
