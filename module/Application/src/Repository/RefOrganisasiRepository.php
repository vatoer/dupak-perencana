<?php

namespace Application\Repository;

use Application\Entity\RefOrganisasi;
use Doctrine\ORM\EntityRepository;

/**
 * @method RefOrganisasi|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefOrganisasi|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefOrganisasi[]    findAll()
 * @method RefOrganisasi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefOrganisasiRepository extends EntityRepository
{
    // /**
    //  * @return RefOrganisasi[] Returns an array of RefOrganisasi objects
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
    public function findOneBySomeField($value): ?RefOrganisasi
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
