<?php
namespace rfBuilder;

use rfBuilder\base\iDirector;
use rfBuilder\base\PageBuilderBase;

class PageDirector implements iDirector {
    /** @var PageBuilderBase $page_builder */
    private $page_builder;

    public function __construct($builder_in) {
        $this->page_builder = $builder_in;
    }

    /**
     * @param $source_url
     * @return \rfEntity\aPage
     */
    public function build($source_url) {
        $this->page_builder->setSourceUrl($source_url);
        $this->page_builder->loadArticles();

        return $this->page_builder->fetch();
    }
}