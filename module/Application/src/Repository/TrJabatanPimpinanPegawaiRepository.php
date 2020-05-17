<?php

namespace Application\Repository;

use Application\Entity\TrJabatanPimpinanPegawai;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrJabatanPimpinanPegawai|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrJabatanPimpinanPegawai|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrJabatanPimpinanPegawai[]    findAll()
 * @method TrJabatanPimpinanPegawai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrJabatanPimpinanPegawaiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrJabatanPimpinanPegawai::class);
    }

    // /**
    //  * @return TrJabatanPimpinanPegawai[] Returns an array of TrJabatanPimpinanPegawai objects
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
    public function findOneBySomeField($value): ?TrJabatanPimpinanPegawai
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
