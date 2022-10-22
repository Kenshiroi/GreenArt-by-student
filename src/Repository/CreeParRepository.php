<?php

namespace App\Repository;

use App\Entity\CreePar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CreePar>
 *
 * @method CreePar|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreePar|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreePar[]    findAll()
 * @method CreePar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreeParRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreePar::class);
    }

    public function save(CreePar $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CreePar $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
