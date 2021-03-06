<?php

namespace Grafit\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AlbumRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AlbumRepository extends EntityRepository
{
    
    public function findAll() 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT a FROM CoreBundle:album a ORDER BY a.created DESC')
                    ->getResult();
    }
    
}
