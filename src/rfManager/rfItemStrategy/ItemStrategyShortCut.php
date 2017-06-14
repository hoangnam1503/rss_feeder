<?php
namespace rfItemStrategy;

use rfItemStrategy\base\iItemStrategy;

class ItemStrategyShortCut implements iItemStrategy {

    public function processItem($str) {
        return mb_substr($str, 0, 10, "utf-8") . self::MORE_TEXT . self::LINEFEED;
    }
}