<?php
namespace rfItemStrategy;

use rfItemStrategy\base\iItemStrategy;

class ItemStrategyShortCut implements iItemStrategy {

    public function processItem($str) {
        return mb_substr($str, 0, 10) . self::LINEFEED;
    }
}