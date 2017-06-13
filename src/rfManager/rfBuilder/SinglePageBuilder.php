<?php
namespace rfBuilder;

use rfBuilder\base\PageBuilderBase;
use rfEntity\SinglePage;

class SinglePageBuilder extends PageBuilderBase {

    public function __construct() {
        $this->page = new SinglePage();
    }
}