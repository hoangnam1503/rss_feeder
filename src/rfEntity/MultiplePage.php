<?php
/**
 * TODO use Private Class Data Pattern
 */
namespace rfEntity;

use rfEntity\base\aPage;
use rfItemStrategy\ItemContext;

class MultiplePage extends aPage {

    protected function showSeparator() {
        echo "***************\n";
    }

    /**
     * @param $title_in
     */
    protected function showTitle($title_in) {
        $title_context = new ItemContext(ItemContext::ITEM_UPPERCASE);

        echo $title_context->processItem($title_in);
    }

    /**
     * @param $description_in
     */
    protected function showDescription($description_in) {
        $description_context = new ItemContext(ItemContext::ITEM_HIDING);

        echo $description_context->processItem($description_in);
    }
}