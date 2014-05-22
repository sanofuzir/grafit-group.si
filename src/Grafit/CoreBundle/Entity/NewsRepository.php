<?php

namespace Grafit\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends EntityRepository
{
    public function findAll() 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT n FROM CoreBundle:news n ORDER BY n.created DESC')
                    ->getResult();
    }
    
    public function findAllWithLimit($limit) 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT n FROM CoreBundle:news n ORDER BY n.created DESC')
                    ->setMaxResults($limit)
                    ->getResult();
    }

    public function findActualNews()
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT n FROM CoreBundle:news n WHERE n.actual = :actual ORDER BY n.created DESC')
                    ->setParameter('actual', 'yes')
                    ->setMaxResults(1)
                    ->getResult();
    }

    public function findLastTwoNews()
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT n FROM CoreBundle:news n WHERE n.actual = :actual ORDER BY n.created DESC')
                    ->setParameter('actual', 'no')
                    ->setMaxResults(2)
                    ->getResult();
    }
}
