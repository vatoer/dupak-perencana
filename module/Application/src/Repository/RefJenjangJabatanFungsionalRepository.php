<?php

namespace Application\Repository;

use Application\Entity\RefJenjangJabatanFungsional;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RefJenjangJabatanFungsional|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefJenjangJabatanFungsional|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefJenjangJabatanFungsional[]    findAll()
 * @method RefJenjangJabatanFungsional[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefJenjangJabatanFungsionalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefJenjangJabatanFungsional::class);
    }

    // /**
    //  * @return RefJenjangJabatanFungsional[] Returns an array of RefJenjangJabatanFungsional objects
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
    public function findOneBySomeField($value): ?RefJenjangJabatanFungsional
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
