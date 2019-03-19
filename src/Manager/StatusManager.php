<?php
namespace PFWD\Model\Status\Manager;

use Doctrine\ORM\EntityManager;
use PFWD\Model\Status\Entity\Status;
use Doctrine\ORM;

/**
 * Class StatusManager
 */
class StatusManager {

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * StatusManager constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return Status
     */
    public static function create(): Status
    {
        return new Status();
    }

    /**
     * @param Status $status
     *
     * @return StatusManager
     *
     * @throws ORM\ORMException
     * @throws ORM\OptimisticLockException
     */
    public function update(Status $status): StatusManager
    {
        $this->entityManager->persist($status);
        $this->entityManager->flush();

        return $this;
    }

    /**
     * @param Status $status
     *
     * @return StatusManager
     *
     * @throws ORM\ORMException
     * @throws ORM\OptimisticLockException
     */
    public function delete(Status $status): StatusManager
    {
        $this->entityManager->remove($status);
        $this->entityManager->flush();

        return $this;
    }

}