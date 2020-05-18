<?php

namespace Application\Repository;

use Application\Entity\TrJabatanAdministrasiPegawai;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrJabatanAdministrasiPegawai|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrJabatanAdministrasiPegawai|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrJabatanAdministrasiPegawai[]    findAll()
 * @method TrJabatanAdministrasiPegawai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrJabatanAdministrasiPegawaiRepository extends EntityRepository
{
    

    // /**
    //  * @return TrJabatanAdministrasiPegawai[] Returns an array of TrJabatanAdministrasiPegawai objects
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
    public function findOneBySomeField($value): ?TrJabatanAdministrasiPegawai
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
