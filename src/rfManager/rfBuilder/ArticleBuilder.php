<?php
namespace rfBuilder;

use rfBuilder\base\aArticleBuilder;
use rfEntity\Article;

class ArticleBuilder extends aArticleBuilder {
    /** @var Article $article */
    private $article;

    public function __construct() {
        $this->article = new Article();
    }

    public function setTitle($title_in) {
        $this->article->setTitle($title_in);
    }

    public function setDescription($description_in) {
        $this->article->setDescription($description_in);
    }

    public function fetch() {
        return $this->article;
    }
}