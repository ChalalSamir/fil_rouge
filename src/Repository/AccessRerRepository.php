<?php

namespace App\Repository;

use App\Entity\AccessRer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccessRer|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessRer|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessRer[]    findAll()
 * @method AccessRer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessRerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessRer::class);
    }

    // /**
    //  * @return AccessRer[] Returns an array of AccessRer objects
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
    public function findOneBySomeField($value): ?AccessRer
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
