<?php

namespace Application\Repository;

use Application\Entity\TrJabatanFungsionalPegawai;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrJabatanFungsionalPegawai|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrJabatanFungsionalPegawai|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrJabatanFungsionalPegawai[]    findAll()
 * @method TrJabatanFungsionalPegawai[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrJabatanFungsionalPegawaiRepository extends EntityRepository
{
    
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
