<?php

namespace Grafit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\Text;
use Grafit\CoreBundle\Models\TextManager;
use Grafit\AdminBundle\Form\TextType;

class TextController extends Controller
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
     * @Route("/admin/text/", name="_admin_text")
     * @Template()
     */
    public function textAction()
    {
        $items = $this->getTextManager()->findAllText();
        
        return array( 'items' => $items);
    }

    
    /**
     * @Route("admin/text/delete/{id}", name="_admin_delete_text", requirements={"id" = "\d+"})
     */
    public function deleteTextAction($id)
    {

        $this->getTextManager()->deleteText($id);
        $this->get('session')->getFlashBag()->add('success', 'Text je bil uspešno odstranjen!');
        return $this->redirect($this->generateUrl('_admin_text'));
    } 
    
    /**
     * @Route("admin/text/add", name="_admin_add_text")
     * @Route("admin/text/edit/{id}", name="_admin_edit_text", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editTextAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getTextManager()->createText();
        } else {
            $entity = $this->getTextAction($id);
        }

        $form  = $this->createForm(new TextType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getTextManager()->saveText($entity);
                $this->get('session')->getFlashBag()->add('success', 'Text je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_admin_text'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'items' => $entity,
        );
    }
    
    /**
     * get single Text by id
     *
     * @param  int $id
     * @return Text
     */
    public function getTextAction($id)
    {
        $items = $this->getTextManager()->findText($id);
        if (!$items) {
            throw new NotFoundHttpException("Text ne obstaja.");
        }
        return $items;
    }
}