<?php

namespace App\Repository;

use App\Entity\BrickCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BrickCollection>
 *
 * @method BrickCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrickCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrickCollection[]    findAll()
 * @method BrickCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrickCollectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrickCollection::class);
    }

    //    /**
    //     * @return BrickCollection[] Returns an array of BrickCollection objects
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

    //    public function findOneBySomeField($value): ?BrickCollection
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
