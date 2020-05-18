<?php

namespace Application\Repository;

use Application\Entity\RefButirKegiatan;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefButirKegiatan|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefButirKegiatan|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefButirKegiatan[]    findAll()
 * @method RefButirKegiatan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefButirKegiatanRepository extends EntityRepository
{

    // /**
    //  * @return RefButirKegiatan[] Returns an array of RefButirKegiatan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RefButirKegiatan
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
