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

        if (0 === strpos($pathinfo, '/css/style')) {
            // _assetic_7797d03
            if ($pathinfo === '/css/style.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7797d03',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7797d03',);
            }

            if (0 === strpos($pathinfo, '/css/style_')) {
                if (0 === strpos($pathinfo, '/css/style_bootstrap')) {
                    // _assetic_7797d03_0
                    if ($pathinfo === '/css/style_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7797d03',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7797d03_0',);
                    }

                    // _assetic_7797d03_1
                    if ($pathinfo === '/css/style_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7797d03',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7797d03_1',);
                    }

                }

                // _assetic_7797d03_2
                if ($pathinfo === '/css/style_style_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7797d03',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_7797d03_2',);
                }

                // _assetic_7797d03_3
                if ($pathinfo === '/css/style_lightbox_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7797d03',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_7797d03_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/scripts')) {
            // _assetic_aa92e5b
            if ($pathinfo === '/js/scripts.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa92e5b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_aa92e5b',);
            }

            if (0 === strpos($pathinfo, '/js/scripts_')) {
                // _assetic_aa92e5b_0
                if ($pathinfo === '/js/scripts_jquery-1.11.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa92e5b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_aa92e5b_0',);
                }

                // _assetic_aa92e5b_1
                if ($pathinfo === '/js/scripts_lightbox.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa92e5b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_aa92e5b_1',);
                }

                // _assetic_aa92e5b_2
                if ($pathinfo === '/js/scripts_bootstrap_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa92e5b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_aa92e5b_2',);
                }

                // _assetic_aa92e5b_3
                if ($pathinfo === '/js/scripts_part_4_script_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa92e5b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_aa92e5b_3',);
                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        if (0 === strpos($pathinfo, '/admin')) {
            // _admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_admin');
                }

                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => '_admin',);
            }

            // _admin_images
            if ($pathinfo === '/admin/images') {
                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::imagesAction',  '_route' => '_admin_images',);
            }

            // _admin_albums
            if ($pathinfo === '/admin/albums') {
                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::albumsAction',  '_route' => '_admin_albums',);
            }

            // _admin_delete_image
            if (0 === strpos($pathinfo, '/admin/image/delete') && preg_match('#^/admin/image/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_image')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::deleteImageAction',));
            }

            // _admin_delete_album
            if (0 === strpos($pathinfo, '/admin/album/delete') && preg_match('#^/admin/album/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_delete_album')), array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::deleteAlbumAction',));
            }

            if (0 === strpos($pathinfo, '/admin/image')) {
                // _admin_add_image
                if ($pathinfo === '/admin/image/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editImageAction',  '_route' => '_admin_add_image',);
                }

                // _admin_edit_image
                if (0 === strpos($pathinfo, '/admin/image/edit') && preg_match('#^/admin/image/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_image')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editImageAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/album')) {
                // _admin_add_album
                if ($pathinfo === '/admin/album/add') {
                    return array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editAlbumAction',  '_route' => '_admin_add_album',);
                }

                // _admin_edit_album
                if (0 === strpos($pathinfo, '/admin/album/edit') && preg_match('#^/admin/album/edit(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_edit_album')), array (  'id' => NULL,  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editAlbumAction',));
                }

            }

            // _admin_gallery
            if ($pathinfo === '/admin/gallery') {
                return array (  '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::galleryAction',  '_route' => '_admin_gallery',);
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

        if (0 === strpos($pathinfo, '/Galery')) {
            // _galery
            if ($pathinfo === '/Galery') {
                return array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\GalleryController::indexAction',  '_route' => '_galery',);
            }

            // _album_gallery
            if (preg_match('#^/Galery/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_album_gallery')), array (  '_controller' => 'Grafit\\StaticBundle\\Controller\\GalleryController::galleryAction',));
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
