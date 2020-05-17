<?php

namespace Application\Repository;

use Application\Entity\RefJabatanFungsional;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RefJabatanFungsional|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefJabatanFungsional|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefJabatanFungsional[]    findAll()
 * @method RefJabatanFungsional[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefJabatanFungsionalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefJabatanFungsional::class);
    }

    // /**
    //  * @return RefJabatanFungsional[] Returns an array of RefJabatanFungsional objects
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
    public function findOneBySomeField($value): ?RefJabatanFungsional
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
