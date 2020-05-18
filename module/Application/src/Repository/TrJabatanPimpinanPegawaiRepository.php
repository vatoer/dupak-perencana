<?php

namespace Application\Repository;

use Application\Entity\TrJabatanPimpinanPegawai;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrJabatanPimpinanPegawai|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrJabatanPimpinanPegawai|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrJabatanPimpinanPegawai[]    findAll()
 * @method TrJabatanPimpinanPegawai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrJabatanPimpinanPegawaiRepository extends EntityRepository
{
   

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
