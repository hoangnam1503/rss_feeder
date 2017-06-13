<?php
/**
 * TODO use Private Class Data Pattern
 */
namespace rfEntity;

class Article {
    private $title;
    private $description;

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param $title_in
     */
    public function setTitle($title_in) {
        $this->title = $title_in;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param $description_in
     */
    public function setDescription($description_in) {
        $this->description = $description_in;
    }
}