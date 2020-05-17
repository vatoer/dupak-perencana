<?php

namespace Application\Repository;

use Application\Entity\TrFormasiJabatanAdministrasi;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrFormasiJabatanAdministrasi|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrFormasiJabatanAdministrasi|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrFormasiJabatanAdministrasi[]    findAll()
 * @method TrFormasiJabatanAdministrasi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrFormasiJabatanAdministrasiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrFormasiJabatanAdministrasi::class);
    }

    // /**
    //  * @return TrFormasiJabatanAdministrasi[] Returns an array of TrFormasiJabatanAdministrasi objects
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
    public function findOneBySomeField($value): ?TrFormasiJabatanAdministrasi
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
