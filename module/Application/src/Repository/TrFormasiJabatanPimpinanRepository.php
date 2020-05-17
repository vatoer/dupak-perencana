<?php

namespace Application\Repository;

use Application\Entity\TrFormasiJabatanPimpinan;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrFormasiJabatanPimpinan|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrFormasiJabatanPimpinan|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrFormasiJabatanPimpinan[]    findAll()
 * @method TrFormasiJabatanPimpinan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrFormasiJabatanPimpinanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrFormasiJabatanPimpinan::class);
    }

    // /**
    //  * @return TrFormasiJabatanPimpinan[] Returns an array of TrFormasiJabatanPimpinan objects
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
    public function findOneBySomeField($value): ?TrFormasiJabatanPimpinan
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
