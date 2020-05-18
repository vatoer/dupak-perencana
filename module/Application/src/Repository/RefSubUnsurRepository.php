<?php

namespace Application\Repository;

use Application\Entity\RefSubUnsur;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefSubUnsur|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefSubUnsur|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefSubUnsur[]    findAll()
 * @method RefSubUnsur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefSubUnsurRepository extends EntityRepository
{
    
    // /**
    //  * @return RefSubUnsur[] Returns an array of RefSubUnsur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RefSubUnsur
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
