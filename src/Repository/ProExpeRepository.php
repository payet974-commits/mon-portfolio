<?php

namespace App\Repository;

use App\Entity\ProExpe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProExpe|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProExpe|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProExpe[]    findAll()
 * @method ProExpe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProExpeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProExpe::class);
    }

    // /**
    //  * @return ProExpe[] Returns an array of ProExpe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProExpe
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
