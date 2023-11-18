<?php

namespace App\Repository;

use App\Entity\VideoDetails;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
 
    
    public const PAGINATOR_PER_PAGE = 2;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoDetails::class);
    }
    public function getVideoListPaginator(string $library, int $offset): Paginator
    {
        $query = $this->createQueryBuilder('v')
            ->andWhere('v.library = :library')
            ->setParameter('library', $library)
            ->orderBy('v.title', 'DESC')
            ->setMaxResults(self::PAGINATOR_PER_PAGE)
            ->setFirstResult($offset)
            ->getQuery()
        ;

        return new Paginator($query);
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
