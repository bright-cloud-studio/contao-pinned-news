<?php

use Contao\Config;

/* Cron */
if (Config::getInstance()->isComplete()) {
	$GLOBALS['TL_HOOKS']['newsListFetchItems'] = array();
	$GLOBALS['TL_HOOKS']['newsListFetchItems'][] = array('PinnedNews\Frontend\PinnedNews', 'fetchItems');
}
