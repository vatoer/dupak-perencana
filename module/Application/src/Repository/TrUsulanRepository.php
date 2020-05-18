<?php

namespace Application\Repository;

use Application\Entity\TrUsulan;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrUsulan|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrUsulan|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrUsulan[]    findAll()
 * @method TrUsulan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrUsulanRepository extends EntityRepository
{
    

    // /**
    //  * @return TrUsulan[] Returns an array of TrUsulan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrUsulan
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
