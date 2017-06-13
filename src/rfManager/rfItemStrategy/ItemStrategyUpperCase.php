<?php
namespace rfItemStrategy;

use rfItemStrategy\base\iItemStrategy;

class ItemStrategyUpperCase implements iItemStrategy {

    public function processItem($str) {
        return strtoupper($str) . self::LINEFEED;
    }
}