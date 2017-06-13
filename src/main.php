<?php
require_once '../vendor/autoload.php';

use rfFactory\PageFactory;

$target_urls = array(
    'http://tech.aainc.co.jp/feed',
//    'http://www.economist.com/sections/business-finance/rss.xml'
);

$page_type = count($target_urls) > 1 ? PageFactory::MULTIPLE_RSS_PAGE : PageFactory::SINGLE_RSS_PAGE;

foreach ($target_urls as $target_url) {
    $page_factory = new PageFactory($target_url);
    $page = $page_factory->getPage($page_type);

    if ($page === null) break;

    $page->showPageInfo();
}