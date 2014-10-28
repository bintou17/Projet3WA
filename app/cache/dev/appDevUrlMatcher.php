<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'WA\\BoBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'WA\\BoBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'WA\\BoBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/backoffice')) {
            if (0 === strpos($pathinfo, '/backoffice/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/backoffice/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/backoffice/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/backoffice/user/new') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/backoffice/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/backoffice/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/backoffice/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/backoffice/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            if (0 === strpos($pathinfo, '/backoffice/tags')) {
                // tags
                if (rtrim($pathinfo, '/') === '/backoffice/tags') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tags');
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::indexAction',  '_route' => 'tags',);
                }

                // tags_show
                if (preg_match('#^/backoffice/tags/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tags_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::showAction',));
                }

                // tags_new
                if ($pathinfo === '/backoffice/tags/new') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::newAction',  '_route' => 'tags_new',);
                }

                // tags_create
                if ($pathinfo === '/backoffice/tags/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tags_create;
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::createAction',  '_route' => 'tags_create',);
                }
                not_tags_create:

                // tags_edit
                if (preg_match('#^/backoffice/tags/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tags_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::editAction',));
                }

                // tags_update
                if (preg_match('#^/backoffice/tags/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tags_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tags_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::updateAction',));
                }
                not_tags_update:

                // tags_delete
                if (preg_match('#^/backoffice/tags/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tags_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tags_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\TagsController::deleteAction',));
                }
                not_tags_delete:

            }

            if (0 === strpos($pathinfo, '/backoffice/sessions')) {
                // sessions
                if (rtrim($pathinfo, '/') === '/backoffice/sessions') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sessions');
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::indexAction',  '_route' => 'sessions',);
                }

                // sessions_show
                if (preg_match('#^/backoffice/sessions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sessions_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::showAction',));
                }

                // sessions_new
                if ($pathinfo === '/backoffice/sessions/new') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::newAction',  '_route' => 'sessions_new',);
                }

                // sessions_create
                if ($pathinfo === '/backoffice/sessions/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sessions_create;
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::createAction',  '_route' => 'sessions_create',);
                }
                not_sessions_create:

                // sessions_edit
                if (preg_match('#^/backoffice/sessions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sessions_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::editAction',));
                }

                // sessions_update
                if (preg_match('#^/backoffice/sessions/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_sessions_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sessions_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::updateAction',));
                }
                not_sessions_update:

                // sessions_delete
                if (preg_match('#^/backoffice/sessions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_sessions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sessions_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\SessionsController::deleteAction',));
                }
                not_sessions_delete:

            }

            if (0 === strpos($pathinfo, '/backoffice/m')) {
                if (0 === strpos($pathinfo, '/backoffice/movies')) {
                    // movies
                    if (rtrim($pathinfo, '/') === '/backoffice/movies') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'movies');
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::indexAction',  '_route' => 'movies',);
                    }

                    // movies_show
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::showAction',));
                    }

                    // movies_new
                    if ($pathinfo === '/backoffice/movies/new') {
                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::newAction',  '_route' => 'movies_new',);
                    }

                    // movies_create
                    if ($pathinfo === '/backoffice/movies/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_movies_create;
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::createAction',  '_route' => 'movies_create',);
                    }
                    not_movies_create:

                    // movies_edit
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::editAction',));
                    }

                    // movies_update
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_movies_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::updateAction',));
                    }
                    not_movies_update:

                    // movies_delete
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_movies_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::deleteAction',));
                    }
                    not_movies_delete:

                    // movies_addCart
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/Cart$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_addCart')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::addCartAction',));
                    }

                    // movies_showCart
                    if ($pathinfo === '/backoffice/movies/Cart') {
                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::showCartAction',  '_route' => 'movies_showCart',);
                    }

                    // movies_minus
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/minus/Cart$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_minus')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::minusAction',));
                    }

                    // movies_plus
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/plus/Cart$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_plus')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::plusAction',));
                    }

                    // movies_delCart
                    if (preg_match('#^/backoffice/movies/(?P<id>[^/]++)/del/Cart$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_delCart')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::delCartAction',));
                    }

                    // movies_like
                    if (0 === strpos($pathinfo, '/backoffice/movies/like') && preg_match('#^/backoffice/movies/like/(?P<movie_id>[^/]++)/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'movies_like')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MoviesController::likeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/backoffice/medias')) {
                    // medias
                    if (rtrim($pathinfo, '/') === '/backoffice/medias') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'medias');
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::indexAction',  '_route' => 'medias',);
                    }

                    // medias_show
                    if (preg_match('#^/backoffice/medias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::showAction',));
                    }

                    // medias_new
                    if ($pathinfo === '/backoffice/medias/new') {
                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::newAction',  '_route' => 'medias_new',);
                    }

                    // medias_create
                    if ($pathinfo === '/backoffice/medias/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_medias_create;
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::createAction',  '_route' => 'medias_create',);
                    }
                    not_medias_create:

                    // medias_edit
                    if (preg_match('#^/backoffice/medias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::editAction',));
                    }

                    // medias_update
                    if (preg_match('#^/backoffice/medias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_medias_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::updateAction',));
                    }
                    not_medias_update:

                    // medias_delete
                    if (preg_match('#^/backoffice/medias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_medias_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'medias_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\MediasController::deleteAction',));
                    }
                    not_medias_delete:

                }

            }

            if (0 === strpos($pathinfo, '/backoffice/directors')) {
                // directors
                if (rtrim($pathinfo, '/') === '/backoffice/directors') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'directors');
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::indexAction',  '_route' => 'directors',);
                }

                // directors_show
                if (preg_match('#^/backoffice/directors/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'directors_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::showAction',));
                }

                // directors_new
                if ($pathinfo === '/backoffice/directors/new') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::newAction',  '_route' => 'directors_new',);
                }

                // directors_create
                if ($pathinfo === '/backoffice/directors/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_directors_create;
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::createAction',  '_route' => 'directors_create',);
                }
                not_directors_create:

                // directors_edit
                if (preg_match('#^/backoffice/directors/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'directors_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::editAction',));
                }

                // directors_update
                if (preg_match('#^/backoffice/directors/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_directors_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'directors_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::updateAction',));
                }
                not_directors_update:

                // directors_delete
                if (preg_match('#^/backoffice/directors/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_directors_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'directors_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\DirectorsController::deleteAction',));
                }
                not_directors_delete:

            }

            if (0 === strpos($pathinfo, '/backoffice/c')) {
                if (0 === strpos($pathinfo, '/backoffice/comments')) {
                    // comments
                    if (rtrim($pathinfo, '/') === '/backoffice/comments') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'comments');
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::indexAction',  '_route' => 'comments',);
                    }

                    // comments_show
                    if (preg_match('#^/backoffice/comments/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::showAction',));
                    }

                    // comments_new
                    if ($pathinfo === '/backoffice/comments/new') {
                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::newAction',  '_route' => 'comments_new',);
                    }

                    // comments_create
                    if ($pathinfo === '/backoffice/comments/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_comments_create;
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::createAction',  '_route' => 'comments_create',);
                    }
                    not_comments_create:

                    // comments_edit
                    if (preg_match('#^/backoffice/comments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::editAction',));
                    }

                    // comments_update
                    if (preg_match('#^/backoffice/comments/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_comments_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::updateAction',));
                    }
                    not_comments_update:

                    // comments_delete
                    if (preg_match('#^/backoffice/comments/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_comments_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CommentsController::deleteAction',));
                    }
                    not_comments_delete:

                }

                if (0 === strpos($pathinfo, '/backoffice/cinema')) {
                    // cinema
                    if (rtrim($pathinfo, '/') === '/backoffice/cinema') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cinema');
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::indexAction',  '_route' => 'cinema',);
                    }

                    // cinema_show
                    if (preg_match('#^/backoffice/cinema/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::showAction',));
                    }

                    // cinema_new
                    if ($pathinfo === '/backoffice/cinema/new') {
                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::newAction',  '_route' => 'cinema_new',);
                    }

                    // cinema_create
                    if ($pathinfo === '/backoffice/cinema/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_cinema_create;
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::createAction',  '_route' => 'cinema_create',);
                    }
                    not_cinema_create:

                    // cinema_edit
                    if (preg_match('#^/backoffice/cinema/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::editAction',));
                    }

                    // cinema_update
                    if (preg_match('#^/backoffice/cinema/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_cinema_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::updateAction',));
                    }
                    not_cinema_update:

                    // cinema_delete
                    if (preg_match('#^/backoffice/cinema/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_cinema_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CinemaController::deleteAction',));
                    }
                    not_cinema_delete:

                }

                if (0 === strpos($pathinfo, '/backoffice/categories')) {
                    // categories
                    if (rtrim($pathinfo, '/') === '/backoffice/categories') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'categories');
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories',);
                    }

                    // categories_show
                    if (preg_match('#^/backoffice/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::showAction',));
                    }

                    // categories_new
                    if ($pathinfo === '/backoffice/categories/new') {
                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::newAction',  '_route' => 'categories_new',);
                    }

                    // categories_create
                    if ($pathinfo === '/backoffice/categories/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_categories_create;
                        }

                        return array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::createAction',  '_route' => 'categories_create',);
                    }
                    not_categories_create:

                    // categories_edit
                    if (preg_match('#^/backoffice/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::editAction',));
                    }

                    // categories_update
                    if (preg_match('#^/backoffice/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_categories_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::updateAction',));
                    }
                    not_categories_update:

                    // categories_delete
                    if (preg_match('#^/backoffice/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_categories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\CategoriesController::deleteAction',));
                    }
                    not_categories_delete:

                }

            }

            if (0 === strpos($pathinfo, '/backoffice/actors')) {
                // actors
                if (rtrim($pathinfo, '/') === '/backoffice/actors') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'actors');
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::indexAction',  '_route' => 'actors',);
                }

                // actors_show
                if (preg_match('#^/backoffice/actors/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actors_show')), array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::showAction',));
                }

                // actors_new
                if ($pathinfo === '/backoffice/actors/new') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::newAction',  '_route' => 'actors_new',);
                }

                // actors_create
                if ($pathinfo === '/backoffice/actors/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_actors_create;
                    }

                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::createAction',  '_route' => 'actors_create',);
                }
                not_actors_create:

                // actors_edit
                if (preg_match('#^/backoffice/actors/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actors_edit')), array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::editAction',));
                }

                // actors_update
                if (preg_match('#^/backoffice/actors/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_actors_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actors_update')), array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::updateAction',));
                }
                not_actors_update:

                // actors_delete
                if (preg_match('#^/backoffice/actors/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_actors_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actors_delete')), array (  '_controller' => 'WA\\BoBundle\\Controller\\ActorsController::deleteAction',));
                }
                not_actors_delete:

            }

            if (0 === strpos($pathinfo, '/backoffice/h')) {
                // wa_bo_homepage
                if (0 === strpos($pathinfo, '/backoffice/hello') && preg_match('#^/backoffice/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'wa_bo_homepage')), array (  '_controller' => 'WA\\BoBundle\\Controller\\DefaultController::indexAction',));
                }

                // wa_bo_index
                if ($pathinfo === '/backoffice/homepage') {
                    return array (  '_controller' => 'WA\\BoBundle\\Controller\\PagesController::homePageAction',  '_route' => 'wa_bo_index',);
                }

            }

            // wa_login_check
            if ($pathinfo === '/backoffice/login_check') {
                return array (  '_controller' => 'WA\\BoBundle\\Controller\\SecurityController::loginAction',  '_route' => 'wa_login_check',);
            }

            // wa_register_check
            if ($pathinfo === '/backoffice/register') {
                return array (  '_controller' => 'WA\\BoBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'wa_register_check',);
            }

            // wa_logout
            if ($pathinfo === '/backoffice/logout') {
                return array('_route' => 'wa_logout');
            }

            // wa_bo_home
            if ($pathinfo === '/backoffice/home') {
                return array (  '_controller' => 'WA\\BoBundle\\Controller\\PagesController::homeAction',  '_route' => 'wa_bo_home',);
            }

        }

        // lexik_paybox_ipn
        if (0 === strpos($pathinfo, '/payment-ipn') && preg_match('#^/payment\\-ipn/(?P<time>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_lexik_paybox_ipn;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_paybox_ipn')), array (  '_controller' => 'Lexik\\Bundle\\PayboxBundle\\Controller\\DefaultController::ipnAction',));
        }
        not_lexik_paybox_ipn:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
