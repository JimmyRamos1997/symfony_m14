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
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // vallbona_web_homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'vallbona_web_homepage',);
        }

        // vallbona_web_article
        if ('/article' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\DefaultController::articleAction',  '_route' => 'vallbona_web_article',);
        }

        // vallbona_web_form
        if ('/form-user' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariController::indexAction',  '_route' => 'vallbona_web_form',);
        }

        // vallbona_web_createform
        if ('/create-user' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariController::createAction',  '_route' => 'vallbona_web_createform',);
        }

        // vallbona_web_createformTasca
        if ('/create-tasca' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariTascaController::createAction',  '_route' => 'vallbona_web_createformTasca',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
