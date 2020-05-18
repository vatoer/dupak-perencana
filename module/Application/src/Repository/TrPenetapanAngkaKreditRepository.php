<?php

namespace Application\Repository;

use Application\Entity\TrPenetapanAngkaKredit;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrPenetapanAngkaKredit|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrPenetapanAngkaKredit|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrPenetapanAngkaKredit[]    findAll()
 * @method TrPenetapanAngkaKredit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrPenetapanAngkaKreditRepository extends EntityRepository
{
    

    // /**
    //  * @return TrPenetapanAngkaKredit[] Returns an array of TrPenetapanAngkaKredit objects
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
    public function findOneBySomeField($value): ?TrPenetapanAngkaKredit
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
