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

        // distribuce_tiskudb_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'distribuce_tiskudb_homepage')), array (  '_controller' => 'DistribuceTisku\\dbBundle\\Controller\\DefaultController::indexAction',));
        }

        // _homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_homepage');
            }

            return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\PageController::indexAction',  '_route' => '_homepage',);
        }
        not__homepage:

        // _about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__about;
            }

            return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\PageController::aboutAction',  '_route' => '_about',);
        }
        not__about:

        // _contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__contact;
            }

            return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\PageController::contactAction',  '_route' => '_contact',);
        }
        not__contact:

        // _seznamTiskovin
        if ($pathinfo === '/seznamTiskovin') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__seznamTiskovin;
            }

            return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\PageController::seznamTiskovinAction',  '_route' => '_seznamTiskovin',);
        }
        not__seznamTiskovin:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // _login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\SecurityController::loginAction',  '_route' => '_login',);
                }

                // _login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\SecurityController::login_checkAction',  '_route' => '_login_check',);
                }

            }

            // _logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\SecurityController::logoutAction',  '_route' => '_logout',);
            }

        }

        // _customeradd
        if ($pathinfo === '/customeradd') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__customeradd;
            }

            return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\FormController::customeraddAction',  '_route' => '_customeradd',);
        }
        not__customeradd:

        // _bookadd
        if ($pathinfo === '/bookadd') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__bookadd;
            }

            return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\FormController::bookaddAction',  '_route' => '_bookadd',);
        }
        not__bookadd:

        if (0 === strpos($pathinfo, '/su')) {
            // _supplieradd
            if ($pathinfo === '/supplieradd') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not__supplieradd;
                }

                return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\FormController::supplieraddAction',  '_route' => '_supplieradd',);
            }
            not__supplieradd:

            if (0 === strpos($pathinfo, '/subscription')) {
                // _subscriptionadd
                if ($pathinfo === '/subscriptionadd') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not__subscriptionadd;
                    }

                    return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\FormController::subscriptionaddAction',  '_route' => '_subscriptionadd',);
                }
                not__subscriptionadd:

                // _subscriptionInteruptionadd
                if ($pathinfo === '/subscriptionInteruptionadd') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not__subscriptionInteruptionadd;
                    }

                    return array (  '_controller' => 'DistribuceTisku\\Bundle\\Controller\\FormController::subscriptionInteruptionaddAction',  '_route' => '_subscriptionInteruptionadd',);
                }
                not__subscriptionInteruptionadd:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
