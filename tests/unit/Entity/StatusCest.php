<?php namespace Entity;
use \UnitTester;
use \Exception;

use PFWD\Model\Status\Entity\Status;

class StatusCest
{
    public function _before(UnitTester $I)
    {
    }

    /**
     * @group entity
     * @group entity-status
     * @group entity-status-id
     *
     * @param UnitTester $I
     * @throws Exception
     */
    public function idTest(UnitTester $I)
    {
        $status = new Status();
        $status->setId(4);

        $I->assertEquals( 4, $status->getId());
    }

    /**
     * @group entity
     * @group entity-status
     * @group entity-status-name
     *
     * @param UnitTester $I
     * @throws Exception
     */
    public function nameTest(UnitTester $I)
    {
        $status = new Status();
        $status->setName('draft');

        $I->assertEquals('draft', $status->getName());
    }
}
