<?php

namespace PinnedNews\Frontend;

use Contao\Frontend as Contao__Frontend;
use Contao\Model\Collection;
use Contao\System;

class PinnedNews extends Contao__Frontend
{

    public function fetchItems($newsArchives, $blnFeatured, $limit, $offset, $objNewsList) {

		$objNewsCollection = System::importStatic('codefog_news_categories.listener.news')->{'onNewsListFetchItems'}($newsArchives, $blnFeatured, 0, $offset, $objNewsList);

        $arrNews = array();

		foreach($objNewsCollection->getModels() as $objNews) {
			if ($objNewsList->showPinned == '1' && $objNews->pinned == '1') {
				$arrNews[] = $objNews;
			} else if ($objNewsList->showPinned != '1' && $objNews->pinned != '1') {
				$arrNews[] = $objNews;
			}
		}
      
		$arrNews = array_slice($arrNews, 0, $limit);

		$objCollection = new Collection($arrNews, 'tl_news');
		return $objCollection;
      
    }
  
}
