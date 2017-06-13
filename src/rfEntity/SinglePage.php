<?php
/**
 * TODO use Private Class Data Pattern
 */
namespace rfEntity;

use rfEntity\base\aPage;
use rfItemStrategy\ItemContext;

class SinglePage extends aPage {

    protected function showSeparator() {
        echo "---------------\n";
    }

    /**
     * @param $title_in
     */
    protected function showTitle($title_in) {
        $title_context = new ItemContext(ItemContext::ITEM_SHORTCUT);

        echo $title_context->processItem($title_in);
    }

    /**
     * @param $description_in
     */
    protected function showDescription($description_in) {
        $description_context = new ItemContext(ItemContext::ITEM_LONG_CUT);

        echo $description_context->processItem($description_in);
    }
}