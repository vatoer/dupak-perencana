<?php

namespace Application\Repository;

use Application\Entity\TrUsulanKegiatanDetil;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrUsulanKegiatanDetil|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrUsulanKegiatanDetil|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrUsulanKegiatanDetil[]    findAll()
 * @method TrUsulanKegiatanDetil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrUsulanKegiatanDetilRepository extends EntityRepository
{
    

    // /**
    //  * @return TrUsulanKegiatanDetil[] Returns an array of TrUsulanKegiatanDetil objects
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
    public function findOneBySomeField($value): ?TrUsulanKegiatanDetil
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
