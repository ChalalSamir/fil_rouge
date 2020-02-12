<?php

namespace App\Repository;

use App\Entity\LieuxEpreuves;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LieuxEpreuves|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuxEpreuves|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuxEpreuves[]    findAll()
 * @method LieuxEpreuves[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuxEpreuvesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuxEpreuves::class);
    }

    // /**
    //  * @return LieuxEpreuves[] Returns an array of LieuxEpreuves objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LieuxEpreuves
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
