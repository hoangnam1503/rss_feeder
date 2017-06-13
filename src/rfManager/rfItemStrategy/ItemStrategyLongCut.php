<?php
namespace rfItemStrategy;

use rfItemStrategy\base\iItemStrategy;

class ItemStrategyLongCut implements iItemStrategy {

    public function processItem($str) {
        return mb_substr($str, 0, 30) . self::LINEFEED;
    }
}