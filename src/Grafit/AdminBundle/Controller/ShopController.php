<?php

namespace Grafit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\Article;
use Grafit\CoreBundle\Models\ArticleManager;
use Grafit\AdminBundle\Form\ArticleType;
use Grafit\CoreBundle\Entity\Category;
use Grafit\CoreBundle\Models\CategoryManager;
use Grafit\AdminBundle\Form\CategoryType;

class ShopController extends Controller
{
    private $manager;

    /**
     * @return ArticleManager
     */
    private function getArticleManager()
    {
        return $this->container->get('grafit.article_manager');
    }

    /**
     * @return CategoryManager
     */
    private function getCategoryManager()
    {
        return $this->container->get('grafit.category_manager');
    }

     /**
     * @Route("/admin/trgovina", name="_admin_shop")
     * @Template()
     */
    public function ShopAction()
    {
        $articles = $this->getArticleManager()->findAllArticles();
        $categorys = $this->getCategoryManager()->findAllCategorys();
        
        return array( 'articles' => $articles, 'categorys' => $categorys );
    }

    /**
     * @Route("/admin/izdelki", name="_admin_articles")
     * @Template()
     */
    public function ArticlesAction()
    {
        $items = $this->getArticleManager()->findAllArticles();
        
        return array( 'items' => $items);
    }

    /**
     * @Route("/admin/kategorije", name="_admin_category")
     * @Template()
     */
    public function CategotrysAction()
    {
        $items = $this->getCategoryManager()->findAllCategorys();
        
        return array( 'items' => $items);
    }

    
    /**
     * @Route("/admin/article/delete/{id}", name="_admin_delete_article", requirements={"id" = "\d+"})
     */
    public function deleteArticleAction($id)
    {

        $this->getArticleManager()->deleteArticle($id);
        $this->get('session')->getFlashBag()->add('success', 'Izdelek je bila uspešno odstranjen!');
        return $this->redirect($this->generateUrl('_admin_shop'));
    } 

     /**
     * @Route("/admin/category/delete/{id}", name="_admin_delete_category", requirements={"id" = "\d+"})
     */
    public function deleteCategoryAction($id)
    {

        $this->getCategortManager()->deleteCategory($id);
        $this->get('session')->getFlashBag()->add('success', 'Kategorija je bila uspešno odstranjena!');
        return $this->redirect($this->generateUrl('_admin_shop'));
    } 
    
    /**
     * @Route("/admin/article/add", name="_admin_add_article")
     * @Route("/admin/article/edit/{id}", name="_admin_edit_article", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editArticleAction(Request $request, $id = null)
    {
        $categorys = $this->getCategoryManager()->findAllCategorys();
        if (is_null($id)) {
            $entity = $this->getArticleManager()->createArticle();
        } else {
            $entity = $this->getArticleAction($id);
        }

        $form  = $this->createForm(new ArticleType($categorys), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getArticleManager()->saveArticle($entity);
                $this->get('session')->getFlashBag()->add('success', 'Izdelek je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_admin_shop'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'article' => $entity,
        );
    }

    /**
     * @Route("/admin/category/add", name="_admin_add_category")
     * @Route("/admin/category/edit/{id}", name="_admin_edit_category", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editCategoryAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getCategoryManager()->createCategory();
        } else {
            $entity = $this->getCategoryAction($id);
        }

        $form  = $this->createForm(new CategoryType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getCategoryManager()->saveCategory($entity);
                $this->get('session')->getFlashBag()->add('success', 'Kategorija je bila uspešno shranjena!');
                return $this->redirect($this->generateUrl('_admin_shop'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'category' => $entity,
        );
    }
    
    /**
     * get single Article by id
     *
     * @param  int $id
     * @return Article
     */
    public function getArticleAction($id)
    {
        $items = $this->getArticleManager()->findArticle($id);
        if (!$items) {
            throw new NotFoundHttpException("Izdelek ne obstaja.");
        }
        return $items;
    }

    /**
     * get single Category by id
     *
     * @param  int $id
     * @return Category
     */
    public function getCategoryAction($id)
    {
        $items = $this->getCategoryManager()->findCategory($id);
        if (!$items) {
            throw new NotFoundHttpException("Kategorija ne obstaja.");
        }
        return $items;
    }
}