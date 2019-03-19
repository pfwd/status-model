<?php
namespace PFWD\Model\Status\Entity;
use \DateTime;
use \Exception;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Status
 * @ORM\Entity
 * @ORM\Table(name="status")
 * @ORM\HasLifecycleCallbacks()
 */
class Status {

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=140)
     */
    private $name = '';

    /**
     * @var DateTime
     * @@ORM\Column(type="datetime", name="date_created")
     */
    private $dateCreated;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime", name="date_updated")
     */
    private $dateUpdated;

    /**
     * Status constructor.
     *
     * @throws Exception
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
     * @ORM\PrePersist
     *
     * @param DateTime|null $dateCreated
     *
     * @return Status
     *
     * @throws Exception
     */
    public function setDateCreated(DateTime $dateCreated = null):Status
    {
        if(!$dateCreated instanceof  DateTime){
            $dateCreated = new DateTime();
        }
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
     * @ORM\PrePersist
     *
     * @param DateTime|null $dateUpdated
     *
     * @ORM\PrePersist
     *
     * @return Status
     *
     * @throws Exception
     */
    public function setDateUpdated(DateTime $dateUpdated = null):Status
    {

        if(!$dateUpdated instanceof  DateTime){
            $dateUpdated = new DateTime();
        }

        $this->dateUpdated = $dateUpdated;

        return $this;
    }


}