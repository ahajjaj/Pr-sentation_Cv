<?php

namespace App\Repository;

use App\Entity\Hobbie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Hobbie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hobbie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hobbie[]    findAll()
 * @method Hobbie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HobbieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hobbie::class);
    }

    // /**
    //  * @return Hobbie[] Returns an array of Hobbie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hobbie
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
