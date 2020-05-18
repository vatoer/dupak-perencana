<?php

namespace Application\Repository;

use Application\Entity\RefJabatanPimpinan;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefJabatanPimpinan|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefJabatanPimpinan|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefJabatanPimpinan[]    findAll()
 * @method RefJabatanPimpinan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefJabatanPimpinanRepository extends EntityRepository
{
    

    // /**
    //  * @return RefJabatanPimpinan[] Returns an array of RefJabatanPimpinan objects
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
    public function findOneBySomeField($value): ?RefJabatanPimpinan
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
