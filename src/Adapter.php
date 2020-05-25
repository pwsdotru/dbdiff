<?php declare(strict_types=1);
namespace pwsdotru\DbDiff;

abstract class Adapter
{
    protected $link;

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }
}
