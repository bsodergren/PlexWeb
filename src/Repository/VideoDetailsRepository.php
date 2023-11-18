<?php

namespace App\Repository;

use App\Entity\VideoDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VideoDetails>
 *
 * @method VideoDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method VideoDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method VideoDetails[]    findAll()
 * @method VideoDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoDetails::class);
    }

//    /**
//     * @return VideoDetails[] Returns an array of VideoDetails objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VideoDetails
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
