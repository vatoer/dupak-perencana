<?php

namespace Application\Repository;

use Application\Entity\TrJabatanFungsionalPegawai;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrJabatanFungsionalPegawai|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrJabatanFungsionalPegawai|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrJabatanFungsionalPegawai[]    findAll()
 * @method TrJabatanFungsionalPegawai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrJabatanFungsionalPegawaiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrJabatanFungsionalPegawai::class);
    }

    // /**
    //  * @return TrJabatanFungsionalPegawai[] Returns an array of TrJabatanFungsionalPegawai objects
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
    public function findOneBySomeField($value): ?TrJabatanFungsionalPegawai
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
