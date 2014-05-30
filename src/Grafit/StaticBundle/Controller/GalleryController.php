<?php

namespace Grafit\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Grafit\CoreBundle\Entity\Image;
use Grafit\CoreBundle\Models\ImageManager;
use Grafit\CoreBundle\Entity\Album;
use Grafit\CoreBundle\Models\AlbumManager;

class GalleryController extends Controller
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
     * @Route("/Galery", name="_galery")
     * @Template()
     */
    public function indexAction()
    {
        $albums = $this->getAlbumManager()->findAllAlbums();

        return array( 'albums' => $albums );
    }

	/**
     * @Route("/Galery/{id}", name="_album_gallery", requirements={"id" = "\d+"})
     * @Template()
     */
    public function galleryAction($id)
    {
        $images = $this->getImageManager()->findByAlbumId($id);
        $albums = $this->getAlbumManager()->findAllAlbums();
        $album = $this->getAlbumManager()->findAlbum($id);

        return array( 'images' => $images, 'albums' => $albums, 'album' => $album );
    }

}