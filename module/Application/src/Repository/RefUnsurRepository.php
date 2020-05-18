<?php

namespace Application\Repository;

use Application\Entity\RefUnsur;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefUnsur|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefUnsur|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefUnsur[]    findAll()
 * @method RefUnsur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefUnsurRepository extends EntityRepository
{
    

    // /**
    //  * @return RefUnsur[] Returns an array of RefUnsur objects
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
    public function findOneBySomeField($value): ?RefUnsur
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
