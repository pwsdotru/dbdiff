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
    public function testConstruct()
    {
        $adapter = new Pdo();
        $this->assertIsObject($adapter);
    }
}
