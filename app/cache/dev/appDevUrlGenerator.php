<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_assetic_7797d03' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7797d03',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/style.css',    ),  ),  4 =>   array (  ),),
        '_assetic_7797d03_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7797d03',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/style_bootstrap_1.css',    ),  ),  4 =>   array (  ),),
        '_assetic_7797d03_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7797d03',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/style_bootstrap-theme_2.css',    ),  ),  4 =>   array (  ),),
        '_assetic_7797d03_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7797d03',    'pos' => 2,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/style_style_3.css',    ),  ),  4 =>   array (  ),),
        '_assetic_7797d03_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '7797d03',    'pos' => 3,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/style_lightbox_4.css',    ),  ),  4 =>   array (  ),),
        '_assetic_aa92e5b' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aa92e5b',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/scripts.js',    ),  ),  4 =>   array (  ),),
        '_assetic_aa92e5b_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aa92e5b',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/scripts_jquery-1.11.0.min_1.js',    ),  ),  4 =>   array (  ),),
        '_assetic_aa92e5b_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aa92e5b',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/scripts_lightbox.min_2.js',    ),  ),  4 =>   array (  ),),
        '_assetic_aa92e5b_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aa92e5b',    'pos' => 2,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/scripts_bootstrap_3.js',    ),  ),  4 =>   array (  ),),
        '_assetic_aa92e5b_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aa92e5b',    'pos' => 3,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/scripts_part_4_script_1.js',    ),  ),  4 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        '_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        '_admin_images' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::imagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/images',    ),  ),  4 =>   array (  ),),
        '_admin_albums' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::albumsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/albums',    ),  ),  4 =>   array (  ),),
        '_admin_delete_image' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::deleteImageAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/image/delete',    ),  ),  4 =>   array (  ),),
        '_admin_delete_album' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::deleteAlbumAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/album/delete',    ),  ),  4 =>   array (  ),),
        '_admin_add_image' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/image/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_image' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editImageAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/image/edit',    ),  ),  4 =>   array (  ),),
        '_admin_add_album' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editAlbumAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/album/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_album' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::editAlbumAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/album/edit',    ),  ),  4 =>   array (  ),),
        '_admin_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ImageController::galleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/gallery',    ),  ),  4 =>   array (  ),),
        '_admin_inquiry' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::inquiryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/inquiry',    ),  ),  4 =>   array (  ),),
        '_admin_delete_inquiry' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::deleteInquiryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/inquiry/delete',    ),  ),  4 =>   array (  ),),
        '_admin_add_inquiry' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::editInquiryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/inquiry/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_inquiry' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\InquiryController::editInquiryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/inquiry/edit',    ),  ),  4 =>   array (  ),),
        '_admin_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/news/',    ),  ),  4 =>   array (  ),),
        '_admin_delete_news' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::deleteNewsAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/news/delete',    ),  ),  4 =>   array (  ),),
        '_admin_add_news' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::editNewsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/news/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_news' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\NewsController::editNewsAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/news/edit',    ),  ),  4 =>   array (  ),),
        '_admin_shop' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::ShopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/trgovina',    ),  ),  4 =>   array (  ),),
        '_admin_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::ArticlesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/izdelki',    ),  ),  4 =>   array (  ),),
        '_admin_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::CategotrysAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/kategorije',    ),  ),  4 =>   array (  ),),
        '_admin_delete_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::deleteArticleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/article/delete',    ),  ),  4 =>   array (  ),),
        '_admin_delete_category' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::deleteCategoryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/category/delete',    ),  ),  4 =>   array (  ),),
        '_admin_add_article' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editArticleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/article/edit',    ),  ),  4 =>   array (  ),),
        '_admin_add_category' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/category/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_category' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\ShopController::editCategoryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/category/edit',    ),  ),  4 =>   array (  ),),
        '_admin_storitve' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::storitveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/storitve/',    ),  ),  4 =>   array (  ),),
        '_admin_delete_storitve' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::deleteStoritveAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/storitve/delete',    ),  ),  4 =>   array (  ),),
        '_admin_add_storitve' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::editStoritveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/storitve/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_storitve' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\StoritveController::editStoritveAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/storitve/edit',    ),  ),  4 =>   array (  ),),
        '_admin_text' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::textAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/text/',    ),  ),  4 =>   array (  ),),
        '_admin_delete_text' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::deleteTextAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/text/delete',    ),  ),  4 =>   array (  ),),
        '_admin_add_text' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::editTextAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/text/add',    ),  ),  4 =>   array (  ),),
        '_admin_edit_text' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\AdminBundle\\Controller\\TextController::editTextAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/text/edit',    ),  ),  4 =>   array (  ),),
        'sl__RG__grafit_user_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Grafit\\UserBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'sl',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/sl/hello',    ),  ),  4 =>   array (  ),),
        'en__RG__grafit_user_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Grafit\\UserBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'en',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/en/hello',    ),  ),  4 =>   array (  ),),
        'sl__RG__home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'sl',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/',    ),  ),  4 =>   array (  ),),
        'en__RG__home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'en',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/',    ),  ),  4 =>   array (  ),),
        '_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/About',    ),  ),  4 =>   array (  ),),
        '_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/News',    ),  ),  4 =>   array (  ),),
        '_shop' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::shopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Shop',    ),  ),  4 =>   array (  ),),
        '_shop_actual_sl' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::actualAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/Shop/actual',    ),  ),  4 =>   array (  ),),
        '_shop_actual_en' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::actualAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/Shop/actual',    ),  ),  4 =>   array (  ),),
        '_category_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::categoryArticleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article/category',    ),  ),  4 =>   array (  ),),
        '_services' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::servicesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Services',    ),  ),  4 =>   array (  ),),
        '_single_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::singleArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),),
        '_single_news' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::singleNewsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),),
        '_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Contact',    ),  ),  4 =>   array (  ),),
        '_add_inquiry' => array (  0 =>   array (  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::editInquiryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inquiry/add',    ),  ),  4 =>   array (  ),),
        '_edit_inquiry' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'Grafit\\StaticBundle\\Controller\\DefaultController::editInquiryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inquiry/edit',    ),  ),  4 =>   array (  ),),
        '_galery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\GalleryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Galery',    ),  ),  4 =>   array (  ),),
        '_album_gallery' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Grafit\\StaticBundle\\Controller\\GalleryController::galleryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Galery',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',    '_locale' => 'sl',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/login',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',    '_locale' => 'en',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/login',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/login_check',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/login_check',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',    '_locale' => 'sl',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/logout',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',    '_locale' => 'en',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/logout',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',    '_locale' => 'sl',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/register/',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',    '_locale' => 'en',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/register/',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/register/check-email',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/register/check-email',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/sl/register/confirm',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/en/register/confirm',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/register/confirmed',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/register/confirmed',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/resetting/request',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/resetting/request',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/sl/resetting/reset',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/en/resetting/reset',    ),  ),  4 =>   array (  ),),
        'sl__RG__fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',    '_locale' => 'sl',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sl/profile/change-password',    ),  ),  4 =>   array (  ),),
        'en__RG__fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/en/profile/change-password',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
