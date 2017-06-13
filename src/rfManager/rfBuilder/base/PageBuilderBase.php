<?php
/**
 * Builder Pattern
 */
namespace rfBuilder\base;

use rfEntity\aPage;

class PageBuilderBase implements iBuilder {
    /** @var aPage $page */
    protected $page;

    public function setSourceUrl($url_in) {
        $this->page->setSourceUrl($url_in);
    }

    public function loadArticles() {
        $this->page->loadArticles();
    }

    public function fetch() {
        return $this->page;
    }
}