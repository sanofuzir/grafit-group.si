<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Image;

class ImageManager {

	private $class;
	private $em;
	private $repository;

    public function __construct(EntityManager $em, $class )
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }

    /**
    *   find all images
    *   @return images
    */
    public function findAllImages()
    {
        return $this->repository->findAll();
    }

    /**
    *   find all images by album
    *   @param int id
    */
    public function findByAlbumId($id) 
    {   
        return $this->repository->findByAlbumId($id);
    }

    /**
     * Get single Image by id
     *
     * @param int $id
     * @return Image
     */
    public function findImage($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Image details
     *
     * @param  Image $entity
     * @return Image
     */
    public function saveImage($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteImage($id)
    {
        $entity = $this->findImage($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Image
     *
     * @return Image
     */
    public function createImage()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}