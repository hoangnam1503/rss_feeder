<?php
namespace rfFactory;

use rfBuilder\PageDirector;
use rfBuilder\MultiplePageBuilder;
use rfBuilder\SinglePageBuilder;

class PageFactory {
    const SINGLE_RSS_PAGE   = 1;
    const MULTIPLE_RSS_PAGE = 2;

    private $source_url;

    public function __construct($data_in) {
        $this->source_url = $data_in;
    }

    public function getPage($page_type) {
        $page = null;

        switch ($page_type) {
            case self::SINGLE_RSS_PAGE:
                $page_builder = new SinglePageBuilder();
                $page_director = new PageDirector($page_builder);
                $page = $page_director->build($this->source_url);
                break;
            case self::MULTIPLE_RSS_PAGE:
                $page_builder = new MultiplePageBuilder();
                $page_director = new PageDirector($page_builder);
                $page = $page_director->build($this->source_url);
                break;
        }

        return $page;
    }
}