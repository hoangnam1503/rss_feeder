<?php
namespace rfItemStrategy;

class ItemContext {
    const ITEM_HIDING       = 0;
    const ITEM_LONG_CUT     = 1;
    const ITEM_SHORTCUT     = 2;
    const ITEM_UPPERCASE    = 3;

    private $strategy;

    public function __construct($strategy_id) {
        switch ($strategy_id) {
            case self::ITEM_HIDING:
                $this->strategy = new ItemStrategyHiding();
                break;
            case self::ITEM_LONG_CUT:
                $this->strategy = new ItemStrategyLongCut();
                break;
            case self::ITEM_SHORTCUT:
                $this->strategy = new ItemStrategyShortCut();
                break;
            case self::ITEM_UPPERCASE:
                $this->strategy = new ItemStrategyUpperCase();
                break;
        }
    }

    public function processItem($item) {
        return $this->strategy->processItem($item);
    }
}