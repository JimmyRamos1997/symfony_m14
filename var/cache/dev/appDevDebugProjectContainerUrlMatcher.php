<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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

        if (0 === strpos($pathinfo, '/create-')) {
            // vallbona_web_createform
            if ('/create-user' === $pathinfo) {
                return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariController::createAction',  '_route' => 'vallbona_web_createform',);
            }

            // vallbona_web_createformTasca
            if ('/create-tasca' === $pathinfo) {
                return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariTascaController::createAction',  '_route' => 'vallbona_web_createformTasca',);
            }

            // vallbona_web_createformSubtasca
            if ('/create-subtasca' === $pathinfo) {
                return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariSubtascaController::createAction',  '_route' => 'vallbona_web_createformSubtasca',);
            }

        }

        // vallbona_web_listarUser
        if ('/users-listar' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariController::listarAction',  '_route' => 'vallbona_web_listarUser',);
        }

        // vallbona_web_listarSubtasca
        if ('/subtasques-listar' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariSubtascaController::listarAction',  '_route' => 'vallbona_web_listarSubtasca',);
        }

        // vallbona_web_listarTasca
        if ('/tasques-listar' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariTascaController::listarAction',  '_route' => 'vallbona_web_listarTasca',);
        }

        // vallbona_web_eliminarUser
        if (0 === strpos($pathinfo, '/delete-user') && preg_match('#^/delete\\-user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vallbona_web_eliminarUser')), array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariController::eliminarAction',));
        }

        // vallbona_web_eliminarSubtasca
        if (0 === strpos($pathinfo, '/delete-subtasca') && preg_match('#^/delete\\-subtasca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vallbona_web_eliminarSubtasca')), array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\FormulariSubtascaController::eliminarAction',));
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
