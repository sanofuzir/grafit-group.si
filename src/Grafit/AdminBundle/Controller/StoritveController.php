<?php

namespace Grafit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\Storitve;
use Grafit\CoreBundle\Models\StoritveManager;
use Grafit\AdminBundle\Form\StoritveType;

class StoritveController extends Controller
{
    private $manager;

    /**
     * @return StoritveManager
     */
    private function getStoritveManager()
    {
        return $this->container->get('grafit.storitve_manager');
    }

    /**
     * @Route("/admin/storitve/", name="_admin_storitve")
     * @Template()
     */
    public function storitveAction()
    {
        $items = $this->getStoritveManager()->findAllStoritve();
        
        return array( 'items' => $items);
    }

    
    /**
     * @Route("admin/storitve/delete/{id}", name="_admin_delete_storitve", requirements={"id" = "\d+"})
     */
    public function deleteStoritveAction($id)
    {

        $this->getStoritveManager()->deleteStoritve($id);
        $this->get('session')->getFlashBag()->add('success', 'Storitve so bile uspešno odstranjene!');
        return $this->redirect($this->generateUrl('_admin_storitve'));
    } 
    
    /**
     * @Route("admin/storitve/add", name="_admin_add_storitve")
     * @Route("admin/storitve/edit/{id}", name="_admin_edit_storitve", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editStoritveAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getStoritveManager()->createStoritve();
        } else {
            $entity = $this->getStoritveAction($id);
        }

        $form  = $this->createForm(new StoritveType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getStoritveManager()->saveStoritve($entity);
                $this->get('session')->getFlashBag()->add('success', 'Storitve so bila uspešno shranjene!');
                return $this->redirect($this->generateUrl('_admin_storitve'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'items' => $entity,
        );
    }
    
    /**
     * get single Storitve by id
     *
     * @param  int $id
     * @return Storitve
     */
    public function getStoritveAction($id)
    {
        $items = $this->getStoritveManager()->findStoritve($id);
        if (!$items) {
            throw new NotFoundHttpException("Storitev ne obstaja.");
        }
        return $items;
    }
}