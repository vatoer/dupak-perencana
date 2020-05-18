<?php

namespace Application\Repository;

use Application\Entity\RefJabatanAdministrasi;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefJabatanAdministrasi|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefJabatanAdministrasi|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefJabatanAdministrasi[]    findAll()
 * @method RefJabatanAdministrasi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefJabatanAdministrasiRepository extends EntityRepository
{
    
    // /**
    //  * @return RefJabatanAdministrasi[] Returns an array of RefJabatanAdministrasi objects
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
    public function findOneBySomeField($value): ?RefJabatanAdministrasi
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
