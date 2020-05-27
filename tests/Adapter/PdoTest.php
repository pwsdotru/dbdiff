<?php declare(strict_types=1);
namespace pwsdotru\DbDiff\Adapter;

use PHPUnit\Framework\TestCase;

/**
 * Class PdoTest
 * @package pwsdotru\DbDiff\Adapter
 * @coversDefaultClass \pwsdotru\DbDiff\Adapter\Pdo
 */
class PdoTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstruct()
    {
        $adapter = new Pdo();
        $this->assertIsObject($adapter);
    }

    /**
     * @covers ::setLink
     * @covers ::getLink
     */
    public function testSetLink()
    {
        $dbh = $pdo = $this->getMockBuilder('PDOMock')->getMock();
        $adapter = new Pdo();
        $adapter->setLink($dbh);
        $this->assertIsObject($adapter->getLink());
    }

    /**
     * @covers ::getTableInfo
     */
    public function testGetTableInfo()
    {
        $dbh = $pdo = $this->getMockBuilder('PDOMock')->getMock();
        $adapter = new Pdo();
        $adapter->setLink($dbh);

        $data = $adapter->getTableInfo();
        $this->assertIsArray($data);
    }
}
