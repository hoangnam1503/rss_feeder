<?php
namespace rfItemStrategy;

use rfItemStrategy\base\iItemStrategy;

class ItemStrategyHiding implements iItemStrategy {

    public function processItem($str) {
        return '';
    }
}