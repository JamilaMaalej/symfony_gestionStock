<?php

namespace AppBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

    public function findAllStock(){

        $qb = $this->createQueryBuilder('p');

        $qb->where('p.stock = true');

        return $qb->getQuery()->getResult();
    }
}
