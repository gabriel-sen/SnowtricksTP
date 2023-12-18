<?php

namespace App\Repository;

use App\Entity\TricksId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TricksId>
 *
 * @method TricksId|null find($id, $lockMode = null, $lockVersion = null)
 * @method TricksId|null findOneBy(array $criteria, array $orderBy = null)
 * @method TricksId[]    findAll()
 * @method TricksId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TricksIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TricksId::class);
    }

//    /**
//     * @return TricksId[] Returns an array of TricksId objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TricksId
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
