<?php

namespace App\Repository;

use App\Entity\FicheFournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FicheFournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheFournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheFournisseur[]    findAll()
 * @method FicheFournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheFournisseurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FicheFournisseur::class);
    }

    // /**
    //  * @return FicheFournisseur[] Returns an array of FicheFournisseur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FicheFournisseur
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
