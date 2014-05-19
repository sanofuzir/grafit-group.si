<?php

namespace Grafit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\Inquiry;
use Grafit\CoreBundle\Models\InquiryManager;
use Grafit\AdminBundle\Form\InquiryType;

class InquiryController extends Controller
{
    private $manager;

    /**
     * @return InquiryManager
     */
    private function getInquiryManager()
    {
        return $this->container->get('grafit.inquiry_manager');
    }

    /**
     * @Route("/admin/inquiry", name="_admin_inquiry")
     * @Template()
     */
    public function inquiryAction()
    {
        $inquirys = $this->getInquiryManager()->findAllInquirys();
        
        return array( 'inquirys' => $inquirys);
    }

    
    /**
     * @Route("/admin/inquiry/delete/{id}", name="_admin_delete_inquiry", requirements={"id" = "\d+"})
     */
    public function deleteInquiryAction($id)
    {

        $this->getInquiryManager()->deleteInquiry($id);
        $this->get('session')->getFlashBag()->add('success', 'Povpraševanje je bilo uspešno odstranjeno!');
        return $this->redirect($this->generateUrl('_admin_inquiry'));
    } 
    
    /**
     * @Route("/admin/inquiry/add", name="_admin_add_inquiry")
     * @Route("/admin/inquiry/edit/{id}", name="_admin_edit_inquiry", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editInquiryAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getInquiryManager()->createInquiry();
        } else {
            $entity = $this->getInquiryAction($id);
        }

        $form  = $this->createForm(new InquiryType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getInquiryManager()->saveInquiry($entity);
                $this->get('session')->getFlashBag()->add('success', 'Povpraševanje je bilo uspešno shranjeno!');
                return $this->redirect($this->generateUrl('_admin_inquiry'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'inquriy' => $entity,
        );
    }
    
    /**
     * get single Inquiry by id
     *
     * @param  int $id
     * @return Inquiry
     */
    public function getInquiryAction($id)
    {
        $inquiry = $this->getInquiryManager()->findInquiry($id);
        if (!$inquiry) {
            throw new NotFoundHttpException("Povpraševanje ne obstaja.");
        }
        return $inquiry;
    }
}