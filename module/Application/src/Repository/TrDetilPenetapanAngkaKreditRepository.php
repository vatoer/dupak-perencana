<?php

namespace Application\Repository;

use Application\Entity\TrDetilPenetapanAngkaKredit;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrDetilPenetapanAngkaKredit|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrDetilPenetapanAngkaKredit|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrDetilPenetapanAngkaKredit[]    findAll()
 * @method TrDetilPenetapanAngkaKredit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrDetilPenetapanAngkaKreditRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrDetilPenetapanAngkaKredit::class);
    }

    // /**
    //  * @return TrDetilPenetapanAngkaKredit[] Returns an array of TrDetilPenetapanAngkaKredit objects
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
    public function findOneBySomeField($value): ?TrDetilPenetapanAngkaKredit
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
