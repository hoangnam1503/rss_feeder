<?php
/**
 * Strategy Pattern
 */
namespace rfItemStrategy\base;

interface iItemStrategy {
    const MORE_TEXT = '…';
    const LINEFEED  = "\n";

    public function processItem($str);
}