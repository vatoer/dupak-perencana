<?php

namespace Application\Repository;

use Application\Entity\TrUsulanKegiatan;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrUsulanKegiatan|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrUsulanKegiatan|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrUsulanKegiatan[]    findAll()
 * @method TrUsulanKegiatan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrUsulanKegiatanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrUsulanKegiatan::class);
    }

    // /**
    //  * @return TrUsulanKegiatan[] Returns an array of TrUsulanKegiatan objects
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
    public function findOneBySomeField($value): ?TrUsulanKegiatan
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
