<?php

namespace Application\Repository;

use Application\Entity\RefSatuanHasil;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RefSatuanHasil|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefSatuanHasil|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefSatuanHasil[]    findAll()
 * @method RefSatuanHasil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefSatuanHasilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefSatuanHasil::class);
    }

    // /**
    //  * @return RefSatuanHasil[] Returns an array of RefSatuanHasil objects
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
    public function findOneBySomeField($value): ?RefSatuanHasil
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
