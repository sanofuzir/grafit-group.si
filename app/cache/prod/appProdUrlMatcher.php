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

        if (0 === strpos($pathinfo, '/admin')) {
            // _admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_admin');
                }

                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => '_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/i')) {
                if (0 === strpos($pathinfo, '/admin/image')) {
                    // _admin_images
                    if ($pathinfo === '/admin/images') {
                        return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::imagesAction',  '_route' => '_admin_images',);
                    }

                    // _admin_delete_image
                    if (0 === strpos($pathinfo, '/admin/image/delete') && preg_match('#^/admin/image/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_image')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::deleteImageAction',));
                    }

                    // _admin_add_image
                    if ($pathinfo === '/admin/image/add') {
                        return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editImageAction',  '_route' => '_admin_add_image',);
                    }

                    // _admin_edit_image
                    if (0 === strpos($pathinfo, '/admin/image/edit') && preg_match('#^/admin/image/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_image')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editImageAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/inquiry')) {
                    // _admin_inquiry
                    if ($pathinfo === '/admin/inquiry') {
                        return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::inquiryAction',  '_route' => '_admin_inquiry',);
                    }

                    // _admin_delete_inquiry
                    if (0 === strpos($pathinfo, '/admin/inquiry/delete') && preg_match('#^/admin/inquiry/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_inquiry')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::deleteInquiryAction',));
                    }

                    // _admin_add_inquiry
                    if ($pathinfo === '/admin/inquiry/add') {
                        return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::editInquiryAction',  '_route' => '_admin_add_inquiry',);
                    }

                    // _admin_edit_inquiry
                    if (0 === strpos($pathinfo, '/admin/inquiry/edit') && preg_match('#^/admin/inquiry/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_inquiry')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::editInquiryAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/news')) {
                // _admin_news
                if (rtrim($pathinfo, '/') === '/admin/news') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_admin_news');
                    }

                    return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::newsAction',  '_route' => '_admin_news',);
                }

                // _admin_delete_news
                if (0 === strpos($pathinfo, '/admin/news/delete') && preg_match('#^/admin/news/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_news')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::deleteNewsAction',));
                }

                // _admin_add_news
                if ($pathinfo === '/admin/news/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::editNewsAction',  '_route' => '_admin_add_news',);
                }

                // _admin_edit_news
                if (0 === strpos($pathinfo, '/admin/news/edit') && preg_match('#^/admin/news/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_news')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::editNewsAction',));
                }

            }

            // _admin_shop
            if ($pathinfo === '/admin/trgovina') {
                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::ShopAction',  '_route' => '_admin_shop',);
            }

            // _admin_articles
            if ($pathinfo === '/admin/izdelki') {
                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::ArticlesAction',  '_route' => '_admin_articles',);
            }

            // _admin_category
            if ($pathinfo === '/admin/kategorije') {
                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::CategotrysAction',  '_route' => '_admin_category',);
            }

            // _admin_delete_article
            if (0 === strpos($pathinfo, '/admin/article/delete') && preg_match('#^/admin/article/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_article')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::deleteArticleAction',));
            }

            // _admin_delete_category
            if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_category')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::deleteCategoryAction',));
            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // _admin_add_article
                if ($pathinfo === '/admin/article/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editArticleAction',  '_route' => '_admin_add_article',);
                }

                // _admin_edit_article
                if (0 === strpos($pathinfo, '/admin/article/edit') && preg_match('#^/admin/article/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_article')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editArticleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // _admin_add_category
                if ($pathinfo === '/admin/category/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editCategoryAction',  '_route' => '_admin_add_category',);
                }

                // _admin_edit_category
                if (0 === strpos($pathinfo, '/admin/category/edit') && preg_match('#^/admin/category/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_category')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editCategoryAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/storitve')) {
                // _admin_storitve
                if (rtrim($pathinfo, '/') === '/admin/storitve') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_admin_storitve');
                    }

                    return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::storitveAction',  '_route' => '_admin_storitve',);
                }

                // _admin_delete_storitve
                if (0 === strpos($pathinfo, '/admin/storitve/delete') && preg_match('#^/admin/storitve/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_storitve')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::deleteStoritveAction',));
                }

                // _admin_add_storitve
                if ($pathinfo === '/admin/storitve/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::editStoritveAction',  '_route' => '_admin_add_storitve',);
                }

                // _admin_edit_storitve
                if (0 === strpos($pathinfo, '/admin/storitve/edit') && preg_match('#^/admin/storitve/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_storitve')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::editStoritveAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/text')) {
                // _admin_text
                if (rtrim($pathinfo, '/') === '/admin/text') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_admin_text');
                    }

                    return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::textAction',  '_route' => '_admin_text',);
                }

                // _admin_delete_text
                if (0 === strpos($pathinfo, '/admin/text/delete') && preg_match('#^/admin/text/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_text')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::deleteTextAction',));
                }

                // _admin_add_text
                if ($pathinfo === '/admin/text/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::editTextAction',  '_route' => '_admin_add_text',);
                }

                // _admin_edit_text
                if (0 === strpos($pathinfo, '/admin/text/edit') && preg_match('#^/admin/text/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_text')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::editTextAction',));
                }

            }

        }

        // sl__RG__grafit_user_default_index
        if (0 === strpos($pathinfo, '/sl/hello') && preg_match('#^/sl/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sl__RG__grafit_user_default_index')), array (  '_controller' => 'Grafit\\UserBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'sl',));
        }

        // en__RG__grafit_user_default_index
        if (0 === strpos($pathinfo, '/en/hello') && preg_match('#^/en/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__grafit_user_default_index')), array (  '_controller' => 'Grafit\\UserBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // sl__RG__home
        if (rtrim($pathinfo, '/') === '/sl') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sl__RG__home');
            }

            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'sl',  '_route' => 'sl__RG__home',);
        }

        // en__RG__home
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__home');
            }

            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__home',);
        }

        // _about
        if ($pathinfo === '/About') {
            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::aboutAction',  '_route' => '_about',);
        }

        // _news
        if ($pathinfo === '/News') {
            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::newsAction',  '_route' => '_news',);
        }

        // _shop
        if ($pathinfo === '/Shop') {
            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::shopAction',  '_route' => '_shop',);
        }

        // _category_article
        if (0 === strpos($pathinfo, '/article/category') && preg_match('#^/article/category/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_category_article')), array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::categoryArticleAction',));
        }

        // _services
        if ($pathinfo === '/Services') {
            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::servicesAction',  '_route' => '_services',);
        }

        // _single_article
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_single_article')), array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::singleArticleAction',));
        }

        // _single_news
        if (0 === strpos($pathinfo, '/news') && preg_match('#^/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_single_news')), array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::singleNewsAction',));
        }

        // _galery
        if ($pathinfo === '/Galery') {
            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::galeryAction',  '_route' => '_galery',);
        }

        // _contact
        if ($pathinfo === '/Contact') {
            return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::contactAction',  '_route' => '_contact',);
        }

        if (0 === strpos($pathinfo, '/inquiry')) {
            // _add_inquiry
            if ($pathinfo === '/inquiry/add') {
                return array (  'id' => NULL,  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::editInquiryAction',  '_route' => '_add_inquiry',);
            }

            // _edit_inquiry
            if (0 === strpos($pathinfo, '/inquiry/edit') && preg_match('#^/inquiry/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit_inquiry')), array (  'id' => NULL,  '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::editInquiryAction',));
            }

        }

        // sl__RG__fos_user_security_login
        if ($pathinfo === '/sl/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_security_login',);
        }

        // en__RG__fos_user_security_login
        if ($pathinfo === '/en/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
        }

        // sl__RG__fos_user_security_check
        if ($pathinfo === '/sl/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sl__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_security_check',);
        }
        not_sl__RG__fos_user_security_check:

        // en__RG__fos_user_security_check
        if ($pathinfo === '/en/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
        }
        not_en__RG__fos_user_security_check:

        // sl__RG__fos_user_security_logout
        if ($pathinfo === '/sl/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_security_logout',);
        }

        // en__RG__fos_user_security_logout
        if ($pathinfo === '/en/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }

        // sl__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/sl/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sl__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_registration_register',);
        }

        // en__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/en/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
        }

        // sl__RG__fos_user_registration_check_email
        if ($pathinfo === '/sl/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_registration_check_email',);
        }
        not_sl__RG__fos_user_registration_check_email:

        // en__RG__fos_user_registration_check_email
        if ($pathinfo === '/en/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
        }
        not_en__RG__fos_user_registration_check_email:

        // sl__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/sl/register/confirm') && preg_match('#^/sl/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sl__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'sl',));
        }
        not_sl__RG__fos_user_registration_confirm:

        // en__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/en/register/confirm') && preg_match('#^/en/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_registration_confirm:

        // sl__RG__fos_user_registration_confirmed
        if ($pathinfo === '/sl/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_registration_confirmed',);
        }
        not_sl__RG__fos_user_registration_confirmed:

        // en__RG__fos_user_registration_confirmed
        if ($pathinfo === '/en/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
        }
        not_en__RG__fos_user_registration_confirmed:

        // sl__RG__fos_user_resetting_request
        if ($pathinfo === '/sl/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_resetting_request',);
        }
        not_sl__RG__fos_user_resetting_request:

        // en__RG__fos_user_resetting_request
        if ($pathinfo === '/en/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
        }
        not_en__RG__fos_user_resetting_request:

        // sl__RG__fos_user_resetting_send_email
        if ($pathinfo === '/sl/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sl__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_resetting_send_email',);
        }
        not_sl__RG__fos_user_resetting_send_email:

        // en__RG__fos_user_resetting_send_email
        if ($pathinfo === '/en/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
        }
        not_en__RG__fos_user_resetting_send_email:

        // sl__RG__fos_user_resetting_check_email
        if ($pathinfo === '/sl/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sl__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_resetting_check_email',);
        }
        not_sl__RG__fos_user_resetting_check_email:

        // en__RG__fos_user_resetting_check_email
        if ($pathinfo === '/en/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
        }
        not_en__RG__fos_user_resetting_check_email:

        // sl__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/sl/resetting/reset') && preg_match('#^/sl/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sl__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sl__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'sl',));
        }
        not_sl__RG__fos_user_resetting_reset:

        // en__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/en/resetting/reset') && preg_match('#^/en/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_resetting_reset:

        // sl__RG__fos_user_change_password
        if ($pathinfo === '/sl/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sl__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'sl',  '_route' => 'sl__RG__fos_user_change_password',);
        }
        not_sl__RG__fos_user_change_password:

        // en__RG__fos_user_change_password
        if ($pathinfo === '/en/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
        }
        not_en__RG__fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
