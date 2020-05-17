<?php

namespace Application\Repository;

use Application\Entity\TrAnggotaPokja;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrAnggotaPokja|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrAnggotaPokja|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrAnggotaPokja[]    findAll()
 * @method TrAnggotaPokja[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrAnggotaPokjaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrAnggotaPokja::class);
    }

    // /**
    //  * @return TrAnggotaPokja[] Returns an array of TrAnggotaPokja objects
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
    public function findOneBySomeField($value): ?TrAnggotaPokja
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
