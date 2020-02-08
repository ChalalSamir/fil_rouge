<?php

namespace App\Repository;

use App\Entity\AccessBus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccessBus|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessBus|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessBus[]    findAll()
 * @method AccessBus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessBusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessBus::class);
    }

    // /**
    //  * @return AccessBus[] Returns an array of AccessBus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccessBus
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
