<?php

namespace App\Repository;

use App\Entity\TravauxEnCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TravauxEnCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method TravauxEnCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method TravauxEnCours[]    findAll()
 * @method TravauxEnCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TravauxEnCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TravauxEnCours::class);
    }

    // /**
    //  * @return TravauxEnCours[] Returns an array of TravauxEnCours objects
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
    public function findOneBySomeField($value): ?TravauxEnCours
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
