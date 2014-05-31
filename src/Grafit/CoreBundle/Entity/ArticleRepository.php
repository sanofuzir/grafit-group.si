<?php

namespace Grafit\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
    public function findAll() 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT a FROM CoreBundle:article a ORDER BY a.created DESC')
                    ->getResult();
    }
    
    public function findArticlesByCategoryId($id) 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT a FROM CoreBundle:article a WHERE a.category = :id ORDER BY a.created DESC')
                    ->setParameter('id', $id)
                    ->getResult();
    }
    
    public function findActualArticles() 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT a FROM CoreBundle:article a WHERE a.status = :status ORDER BY a.created DESC')
                    ->setParameter('status', 'Actual')
                    ->getResult();
    }
}
