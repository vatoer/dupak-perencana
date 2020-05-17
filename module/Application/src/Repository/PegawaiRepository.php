<?php

namespace Application\Repository;

use Application\Entity\Pegawai;
use Doctrine\ORM\EntityRepository;

/**
 * @method Pegawai|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pegawai|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pegawai[]    findAll()
 * @method Pegawai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PegawaiRepository extends EntityRepository
{

    // /**
    //  * @return Pegawai[] Returns an array of Pegawai objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pegawai
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
