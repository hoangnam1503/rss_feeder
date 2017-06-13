<?php
/**
 * Strategy Pattern
 */
namespace rfItemStrategy\base;

interface iItemStrategy {
    const LINEFEED = "\n";

    public function processItem($str);
}