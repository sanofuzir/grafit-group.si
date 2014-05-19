<?php

namespace Grafit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\Image;
use Grafit\CoreBundle\Models\ImageManager;
use Grafit\AdminBundle\Form\ImageType;

class ImageController extends Controller
{
    private $manager;

    /**
     * @return ImageManager
     */
    private function getImageManager()
    {
        return $this->container->get('grafit.image_manager');
    }

    /**
     * @Route("/admin/images", name="_admin_images")
     * @Template()
     */
    public function imagesAction()
    {
        $images = $this->getImageManager()->findAllImages();

        return array( 'images' => $images);
    }

    
    /**
     * @Route("/admin/image/delete/{id}", name="_admin_delete_image", requirements={"id" = "\d+"})
     */
    public function deleteImageAction($id)
    {

        $this->getImageManager()->deleteImage($id);
        $this->get('session')->getFlashBag()->add('success', 'Slika je bila uspešno odstranjena!');
        return $this->redirect($this->generateUrl('_admin_images'));
    } 
    
    /**
     * @Route("/admin/image/add", name="_admin_add_image")
     * @Route("/admin/image/edit/{id}", name="_admin_edit_image", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editImageAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getImageManager()->createImage();
        } else {
            $entity = $this->getImageAction($id);
        }

        $form  = $this->createForm(new ImageType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getImageManager()->saveImage($entity);
                $this->get('session')->getFlashBag()->add('success', 'Slika je bila uspešno shranjena!');
                return $this->redirect($this->generateUrl('_admin_images'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'image' => $entity,
        );
    }
    
    /**
     * get single Image by id
     *
     * @param  int $id
     * @return Image
     */
    public function getImageAction($id)
    {
        $image = $this->getImageManager()->findImage($id);
        if (!$image) {
            throw new NotFoundHttpException("Slika ne obstaja.");
        }
        return $image;
    }
}