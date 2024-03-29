<?php

namespace App\Repository;

use App\Entity\Brick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Brick>
 *
 * @method Brick|null find($id, $lockMode = null, $lockVersion = null)
 * @method Brick|null findOneBy(array $criteria, array $orderBy = null)
 * @method Brick[]    findAll()
 * @method Brick[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrickRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Brick::class);
    }

    //    /**
    //     * @return Brick[] Returns an array of Brick objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Brick
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
