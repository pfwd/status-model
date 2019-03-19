<?php
namespace PFWD\Model\Status\Entity;
use \DateTime;

/**
 * Class Status
 * @Entity
 * @Table(name="status")
 */
class Status {

    /**
     * @var int|null
     * @Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @Column(length=140)
     */
    private $name = '';

    /**
     * @var DateTime
     * @Column(type="datetime", name="date_created")
     */
    private $dateCreated;

    /**
     * @var DateTime
     * @Column(type="datetime", name="date_updated")
     */
    private $dateUpdated;

    /**
     * Status constructor
     */
    public function __construct()
    {
        $this->setDateCreated(new DateTime())
            ->setDateUpdated(new DateTime())
        ;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return Status
     */
    public function setId($id):Status
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Status
     */
    public function setName($name):Status
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated():DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateCreated
     *
     * @return Status
     */
    public function setDateCreated(DateTime $dateCreated):Status
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated():DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @param DateTime $dateUpdated
     *
     * @return Status
     */
    public function setDateUpdated(DateTime $dateUpdated):Status
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }


}