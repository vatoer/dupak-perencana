<?php

namespace Application\Repository;

use Application\Entity\RefKelompokKerja;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefKelompokKerja|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefKelompokKerja|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefKelompokKerja[]    findAll()
 * @method RefKelompokKerja[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefKelompokKerjaRepository extends EntityRepository
{


    // /**
    //  * @return RefKelompokKerja[] Returns an array of RefKelompokKerja objects
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
    public function findOneBySomeField($value): ?RefKelompokKerja
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
