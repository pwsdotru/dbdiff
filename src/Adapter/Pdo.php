<?php declare(strict_types=1);
namespace pwsdotru\DbDiff\Adapter;

use PHPUnit\Framework\TestCase;

class Pdo extends \pwsdotru\DbDiff\Adapter implements \pwsdotru\DbDiff\AdapterInterface
{
    public function getTableInfo()
    {
        $info = [];
        return $info;
    }
}
