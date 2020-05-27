<?php declare(strict_types=1);
namespace pwsdotru\DbDiff;

use PHPUnit\Framework\TestCase;

/**
 * Class DbDiffTest
 * @package pwsdotru\DbDiff
 * @coversDefaultClass DbDiff
 */
class DbDiffTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstruct()
    {
        $dbdiff = new DbDiff();
        $this->assertIsObject($dbdiff);
        $this->assertInstanceOf(DbDiff::class, $dbdiff);
    }
}
