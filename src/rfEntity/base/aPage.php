<?php
/**
 * Template Method
 */
namespace rfEntity\base;

use rfBuilder\ArticleDirector;
use rfEntity\Article;
use Feed;

abstract class aPage {
    const MAX_ARTICLES_PER_PAGE = 5;

    private $source_url;
    private $articles;

    public function __construct() {
        $this->articles = array();
    }

    /**
     * @return mixed
     */
    protected function getSourceUrl() {
        return $this->source_url;
    }
    /**
     * @param $url_in
     */
    public function setSourceUrl($url_in) {
        $this->source_url = $url_in;
    }

    /**
     * @param Article $article_in
     */
    protected function addArticle(Article $article_in) {
        $this->articles[] = $article_in;
    }

    public function loadArticles() {
        $limit = 0;
        $rss = Feed::loadRss($this->getSourceUrl());
        $article_director = new ArticleDirector();

        foreach ($rss->item as $item) {
            if ($limit++ > self::MAX_ARTICLES_PER_PAGE) break;

            $new_article = $article_director->build($item);
            $this->addArticle($new_article);
        }
    }

    /**
     * @param Article $article
     */
    protected function showArticleInfo(Article $article) {
        $this->showSeparator();
        $this->showTitle($article->getTitle());
        $this->showDescription($article->getDescription());
        $this->showSeparator();
    }

    /**
     * @return array
     */
    public function showPageInfo() {
        foreach ($this->articles as $article) {
            $this->showArticleInfo($article);
        }

        return $this->articles;
    }

    protected abstract function showSeparator();
    protected abstract function showTitle($title_in);
    protected abstract function showDescription($description_in);
}