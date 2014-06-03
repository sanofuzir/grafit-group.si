<?php

namespace Grafit\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\News;
use Grafit\CoreBundle\Models\NewsManager;
use Grafit\CoreBundle\Entity\Article;
use Grafit\CoreBundle\Models\ArticleManager;
use Grafit\CoreBundle\Entity\Category;
use Grafit\CoreBundle\Models\CategoryManager;
use Grafit\CoreBundle\Entity\Inquiry;
use Grafit\CoreBundle\Models\InquiryManager;
use Grafit\StaticBundle\Form\InquiryType;
use Grafit\CoreBundle\Entity\Text;
use Grafit\CoreBundle\Models\TextManager;

class DefaultController extends Controller
{
    private $manager;
    
    /**
     * @return TextManager
     */
    private function getTextManager()
    {
        return $this->container->get('grafit.text_manager');
    }

    /**
     * @return InquiryManager
     */
    private function getInquiryManager()
    {
        return $this->container->get('grafit.inquiry_manager');
    }

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
     * @return NewsManager
     */
    private function getNewsManager()
    {
        return $this->container->get('grafit.news_manager');
    }

    /**
     * @return ServiceManager
     */
    private function getServiceManager()
    {
        return $this->container->get('grafit.storitve_manager');
    }
    
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        $texti = $this->getTextManager()->getTexts();
        $actualNews = $this->getNewsManager()->findActualNews();
        $news = $this->getNewsManager()->findLastTwoNews();
        $services = $this->getServiceManager()->findLastTreeStoritve();

        return array( 'texti' => $texti,
                      'actualNews' => $actualNews,
                      'news' => $news,
                      'services' => $services
         );
    }
    
    /**
     * @Route("/About", name="_about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
    
    /**
     * @Route("/News", name="_news")
     * @Template()
     */
    public function newsAction()
    {
        $news = $this->getNewsManager()->findAllNews();

        return array( 'news' => $news );
    }

    /**
     * @Route("/Shop", name="_shop")
     * @Template()
     */
    public function shopAction()
    {
        $articles = $this->getArticleManager()->findAllArticles();
        $categorys = $this->getCategoryManager()->findAllCategorys();

        return array('articles' => $articles, 'categorys' => $categorys);
    }

    /**
     * @Route("sl/Shop/actual", name="_shop_actual_sl")
     * @Route("en/Shop/actual", name="_shop_actual_en")
     * @Template()
     */
    public function actualAction()
    {
        $articles = $this->getArticleManager()->findActualArticles();
        $categorys = $this->getCategoryManager()->findAllCategorys();

        return $this->render(
            'StaticBundle:Default:categoryArticle.html.twig',
            array('articles' => $articles, 'categorys' => $categorys)
        );
    }
    
    /**
     * get Articles by category.id
     * @Route("/article/category/{id}", name="_category_article", requirements={"id" = "\d+"})
     * @Template()
     * @param  int $id
     * @return Articles
     */
    public function categoryArticleAction($id)
    {
        $categorys = $this->getCategoryManager()->findAllCategorys();
        $articles = $this->getArticleManager()->findArticlesByCategoryId($id);
        
        return array('articles' => $articles, 'categorys' => $categorys);
    }

    /**
     * @Route("/Services", name="_services")
     * @Template()
     */
    public function servicesAction()
    {
        $services = $this->getServiceManager()->findAllStoritve();
        
        return array( 'services' => $services);
    }

    /**
     * get single Article by id
     * @Route("/article/{id}", name="_single_article")
     * @Template()
     * @param  int $id
     * @return Article
     */
    public function singleArticleAction($id)
    {
        $article = $this->getArticleManager()->findArticle($id);
        if (!$article) {
            throw new NotFoundHttpException("Izdelek ne obstaja.");
        }
        return array('item' => $article);
    }

    /**
     * get single News by id
     * @Route("/news/{id}", name="_single_news")
     * @Template()
     * @param  int $id
     * @return News
     */
    public function singleNewsAction($id)
    {
        $news = $this->getNewsManager()->findNews($id);
        if (!$news) {
            throw new NotFoundHttpException("Novica ne obstaja.");
        }
        return array('item' => $news);
    }
    
    /**
     * @Route("/Contact", name="_contact")
     * @Template()
     */
    public function contactAction()
    {        
        $entity = $this->getInquiryManager()->createInquiry();
        $form  = $this->createForm(new inquiryType(), $entity);
                
        return array('form' => $form->createView() );
    }

    /**
     * @Route("/inquiry/add", name="_add_inquiry")
     * @Route("/inquiry/edit/{id}", name="_edit_inquiry", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editInquiryAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getInquiryManager()->createInquiry();
        } else {
            $entity = $this->getInquiryAction($id);
        }

        $form  = $this->createForm(new inquiryType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getInquiryManager()->saveInquiry($entity);
                $this->sendEmail($entity);
                $this->get('session')->getFlashBag()->add('success', 'Povpraševanje je bilo uspešno izvedeno!');
                return $this->redirect($this->generateUrl('_contact'));
            }
        }

        return array(
            'form'  => $form->createView(),
            'inquiry' => $entity,
        );
    }

    public function sendEmail($data) {
        
        $message = \Swift_Message::newInstance()
                ->setSubject('Povpraševanje')
                ->setFrom($data->getEmail())
             //   ->setTo('info@grafit-group.si')
                ->setTo('sano.fuzir@gmail.com')
                ->setBody(
                    $this->renderView(
                        'StaticBundle:Email:email.html.twig',
                        array('data' => $data)
                    )
                )
            ;
            $this->get('mailer')->send($message);
    }
}
