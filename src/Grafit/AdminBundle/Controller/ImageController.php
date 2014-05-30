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
use Grafit\CoreBundle\Entity\Album;
use Grafit\CoreBundle\Models\AlbumManager;
use Grafit\AdminBundle\Form\AlbumType;

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
     * @return AlbumManager
     */
    private function getAlbumManager()
    {
        return $this->container->get('grafit.album_manager');
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
     * @Route("/admin/albums", name="_admin_albums")
     * @Template()
     */
    public function albumsAction()
    {
        $albums = $this->getAlbumManager()->findAllAlbums();

        return array( 'albums' => $albums);
    }

    /**
     * @Route("/admin/image/delete/{id}", name="_admin_delete_image", requirements={"id" = "\d+"})
     */
    public function deleteImageAction($id)
    {

        $this->getImageManager()->deleteImage($id);
        $this->get('session')->getFlashBag()->add('success', 'Slika je bila uspešno odstranjena!');
        return $this->redirect($this->generateUrl('_admin_gallery'));
    }

    /**
     * @Route("/admin/album/delete/{id}", name="_admin_delete_album", requirements={"id" = "\d+"})
     */
    public function deleteAlbumAction($id)
    {

        $this->getAlbumManager()->deleteAlbum($id);
        $this->get('session')->getFlashBag()->add('success', 'Album je bil uspešno odstranjen!');
        return $this->redirect($this->generateUrl('_admin_gallery'));
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
                return $this->redirect($this->generateUrl('_admin_gallery'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'image' => $entity,
        );
    }

    /**
     * @Route("/admin/album/add", name="_admin_add_album")
     * @Route("/admin/album/edit/{id}", name="_admin_edit_album", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editAlbumAction(Request $request, $id = null)
    {
        if (is_null($id)) {
            $entity = $this->getAlbumManager()->createAlbum();
        } else {
            $entity = $this->getAlbumAction($id);
        }

        $form  = $this->createForm(new AlbumType(), $entity);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $this->getAlbumManager()->saveAlbum($entity);
                $this->get('session')->getFlashBag()->add('success', 'Album je bil uspešno shranjen!');
                return $this->redirect($this->generateUrl('_admin_gallery'));
            }
        }

        return array(
            'form'   => $form->createView(),
            'album' => $entity,
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

    /**
     * get single Album by id
     *
     * @param  int $id
     * @return Album
     */
    public function getAlbumAction($id)
    {
        $album = $this->getAlbumManager()->findAlbum($id);
        if (!$album) {
            throw new NotFoundHttpException("Album ne obstaja.");
        }
        return $album;
    }

    /**
     * @Route("/admin/gallery", name="_admin_gallery")
     * @Template()
     */
    public function galleryAction()
    {
        $images = $this->getImageManager()->findAllImages();
        $albums = $this->getAlbumManager()->findAllAlbums();

        return array( 'images' => $images, 'albums' => $albums );
    }
}