<?php

namespace Application\Repository;

use Application\Entity\TrFormasiJabatanFungsional;
use Doctrine\ORM\EntityRepository;

/**
 * @method TrFormasiJabatanFungsional|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrFormasiJabatanFungsional|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrFormasiJabatanFungsional[]    findAll()
 * @method TrFormasiJabatanFungsional[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrFormasiJabatanFungsionalRepository extends EntityRepository
{
   

    // /**
    //  * @return TrFormasiJabatanFungsional[] Returns an array of TrFormasiJabatanFungsional objects
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
    public function findOneBySomeField($value): ?TrFormasiJabatanFungsional
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
