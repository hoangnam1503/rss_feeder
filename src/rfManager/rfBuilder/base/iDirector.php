<?php
/**
 * Builder Pattern
 */
namespace rfBuilder\base;

interface iDirector {
    public function build($material_in);
}