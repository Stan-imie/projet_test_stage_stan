<?php

namespace App\Repository;

use App\Entity\UserStorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserStorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserStorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserStorie[]    findAll()
 * @method UserStorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserStorieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserStorie::class);
    }

    // /**
    //  * @return UserStorie[] Returns an array of UserStorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserStorie
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
