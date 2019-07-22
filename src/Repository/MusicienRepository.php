<?php

namespace App\Repository;

use App\Entity\Musicien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Musicien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Musicien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Musicien[]    findAll()
 * @method Musicien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MusicienRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Musicien::class);
    }

    // /**
    //  * @return Musicien[] Returns an array of Musicien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Musicien
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
