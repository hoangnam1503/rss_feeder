<?php
namespace rfBuilder;

use rfBuilder\base\PageBuilderBase;
use rfEntity\MultiplePage;

class MultiplePageBuilder extends PageBuilderBase {

    public function __construct() {
        $this->page = new MultiplePage();
    }
}