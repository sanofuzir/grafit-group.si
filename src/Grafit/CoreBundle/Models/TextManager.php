<?php

namespace Grafit\CoreBundle\Models;

use Doctrine\ORM\EntityManager;
use Grafit\CoreBundle\Entity\Text;

class TextManager {

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
     * Get all Text
     *
     * @return Text
     */
    public function findAllText()
    {
        return $this->repository->findAll();
    }

    /**
     * Get last 3 Text
     *
     * @return Text
     */
    public function getTexts()
    {
        $texts = $this->repository->findAll();
        
        return array(
                0   =>  array(
                        'name' => $texts[0]->getText(),
                        'link' => $this->returnLink($texts[0])
                        ),
                1   =>  array(
                        'name' => $texts[1]->getText(),
                        'link' => $this->returnLink($texts[1])
                        ),
                2   =>  array(
                        'name' => $texts[2]->getText(),
                        'link' => $this->returnLink($texts[2])
                        ),
            );
    }

    public function returnLink($data) 
    {
        $link = $data->getLink();
        if (!empty($link)) {
            switch ($link) {
                case 'actual':
                    $link = 'Shop/actual';
                    break;
                case 'shop':
                    $link = '/Shop';
                    break;
                case 'services':
                    $link = '/Services';
                    break;
                
                default:
                    $link = null;
                    break;
            }
        }
        return $link;
    }

    /**
     * Get single Text by id
     *
     * @param int $id
     * @return Text
     */
    public function findText($id)
    {
    	return $this->repository->findOneById($id);
    }

    /**
     * Persist Text details
     *
     * @param  Text $entity
     * @return Text
     */
    public function saveText($entity)
    {
    	if ($entity instanceof $this->class) {
    		$this->em->persist($entity);
        	$this->em->flush();
    	}
    	return $this;
    }

    public function deleteText($id)
    {
        $entity = $this->findText($id);

    	if ($entity instanceof $this->class) {
    		$this->em->remove($entity);
        	$this->em->flush();
    	}
    }
    /**
     * create new Text
     *
     * @return Text
     */
    public function createText()
    {
        $class = $this->class;
        $entity = new $class();
        return $entity;
    }

}