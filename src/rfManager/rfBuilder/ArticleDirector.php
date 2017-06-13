<?php
namespace rfBuilder;

use rfBuilder\base\iDirector;

class ArticleDirector implements iDirector {

    /**
     * @param $article_in
     * @return \rfEntity\Article
     */
    public function build($article_in) {
        /** @var ArticleBuilder $article_builder */
        $article_builder = new ArticleBuilder();

        $article_builder->setTitle($article_in->title);
        $article_builder->setDescription($article_in->description);

        return $article_builder->fetch();
    }
}