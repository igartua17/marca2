<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/noticias')) {
            // noticias
            if (rtrim($pathinfo, '/') === '/noticias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noticias');
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::indexAction',  '_route' => 'noticias',);
            }

            // noticias_show
            if (preg_match('#^/noticias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_show')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::showAction',));
            }

            // noticias_new
            if ($pathinfo === '/noticias/new') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::newAction',  '_route' => 'noticias_new',);
            }

            // noticias_create
            if ($pathinfo === '/noticias/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_noticias_create;
                }

                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::createAction',  '_route' => 'noticias_create',);
            }
            not_noticias_create:

            // noticias_edit
            if (preg_match('#^/noticias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_edit')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::editAction',));
            }

            // noticias_update
            if (preg_match('#^/noticias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_update')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::updateAction',));
            }
            not_noticias_update:

            // noticias_delete
            if (preg_match('#^/noticias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_noticias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_delete')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::deleteAction',));
            }
            not_noticias_delete:

            // noticias_buscar_autor
            if ($pathinfo === '/noticias/buscarAutor') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::buscarAutorAction',  '_route' => 'noticias_buscar_autor',);
            }

            // noticias_responder_autor
            if ($pathinfo === '/noticias/responderAutor') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::responderAutorAction',  '_route' => 'noticias_responder_autor',);
            }

            // noticias_buscar_titulo
            if ($pathinfo === '/noticias/buscarTitulo') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::buscarTituloAction',  '_route' => 'noticias_buscar_titulo',);
            }

            // noticias_responder_titulo
            if ($pathinfo === '/noticias/responderTitulo') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::responderTituloAction',  '_route' => 'noticias_responder_titulo',);
            }

            // noticias_buscar_titulolike
            if ($pathinfo === '/noticias/buscartitulolike') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::buscartitulolikeAction',  '_route' => 'noticias_buscar_titulolike',);
            }

            // noticias_responder_titulolike
            if ($pathinfo === '/noticias/respondertitulolike') {
                return array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\noticiasController::respondertitulolikeAction',  '_route' => 'noticias_responder_titulolike',);
            }

        }

        // uni_marca_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_marca_homepage')), array (  '_controller' => 'uni\\bundle\\marcaBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
