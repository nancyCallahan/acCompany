<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        // gestor_de_projecte_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestor_de_projecte_homepage');
            }

            return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestor_de_projecte_homepage',);
        }

        // nou_persona
        if ($pathinfo === '/formulariAltaPersona') {
            return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\PersonaController::formulariAltaPersonaAction',  '_route' => 'nou_persona',);
        }

        if (0 === strpos($pathinfo, '/mostra')) {
            // persona
            if ($pathinfo === '/mostraAltaPersona') {
                return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\PersonaController::mostraAltaPersonaAction',  '_route' => 'persona',);
            }

            // una_persona
            if ($pathinfo === '/mostraPersona') {
                return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\PersonaController::mostraPersonaAction',  'id' => 8,  '_route' => 'una_persona',);
            }

        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\adminController::adminAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/cons')) {
            // cons
            if ($pathinfo === '/cons') {
                return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\consController::consAction',  '_route' => 'cons',);
            }

            if (0 === strpos($pathinfo, '/consConsu')) {
                // consConsuTreb
                if ($pathinfo === '/consConsuTreb') {
                    return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\consConsuTrebController::consConsuTrebAction',  '_route' => 'consConsuTreb',);
                }

                // consConsuProj
                if ($pathinfo === '/consConsuProj') {
                    return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\consConsuProjController::consConsuProjAction',  '_route' => 'consConsuProj',);
                }

                // consConsuTasq
                if ($pathinfo === '/consConsuTasq') {
                    return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\consConsuTasqController::consConsuTasqAction',  '_route' => 'consConsuTasq',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/treb')) {
            // treb
            if ($pathinfo === '/treb') {
                return array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\trebController::trebAction',  '_route' => 'treb',);
            }

            // trebHores
            if (0 === strpos($pathinfo, '/trebHores') && preg_match('#^/trebHores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trebHores')), array (  '_controller' => 'GestorDeProjecteBundle\\Controller\\trebHoresController::trebHoresAction',));
            }

            if (0 === strpos($pathinfo, '/trebConsProj')) {
                // trebConsProj
                if ($pathinfo === '/trebConsProj') {
                    return array (  '_controller' => 'GestorDeProjecteBundle:trebConsProj:trebConsProj',  '_route' => 'trebConsProj',);
                }

                // trebConsTasq
                if ($pathinfo === '/trebConsProj') {
                    return array (  '_controller' => 'GestorDeProjecteBundle:trebConsProj:trebConsProj',  '_route' => 'trebConsTasq',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
