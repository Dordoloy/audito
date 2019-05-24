<?php

namespace App\Repository;

use App\Entity\RoomPatern;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RoomPatern|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoomPatern|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoomPatern[]    findAll()
 * @method RoomPatern[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomPaternRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RoomPatern::class);
    }

    // /**
    //  * @return RoomPatern[] Returns an array of RoomPatern objects
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
    public function findOneBySomeField($value): ?RoomPatern
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
