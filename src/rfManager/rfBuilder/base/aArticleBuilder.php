<?php
/**
 * Builder Pattern
 */
namespace rfBuilder\base;

abstract class aArticleBuilder implements iBuilder {
    public abstract function setTitle($title_in);
    public abstract function setDescription($description_in);
}