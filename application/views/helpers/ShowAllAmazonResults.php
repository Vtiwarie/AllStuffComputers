<?php

/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Custom view helper that assists in retrieving Amazon products
 * and formatting them as dividers, so as to display product images, titles,
 * and pricing
 ******************************************************************************/

class Zend_View_Helper_ShowAllAmazonResults extends Zend_View_Helper_Abstract {

    public function ShowAllAmazonResults(Array $query = null, Array $divOptions = null) {

        if (empty($query))
            return 'Sorry, there are no results...';

        $startDiv = '<div ';
        if (count($divOptions) > 0) {
            foreach ($divOptions AS $key => $value) {
                $startDiv .= $key;
                $startDiv .= '=';
                $startDiv .= "\"$value\"";
                $startDiv .= ' ';
            }
        }
        
        $startDiv .= '>';
        $endDiv = '</div>';
        
        $itemString = '';
        $items = array();

        $view = Zend_Layout::getMvcInstance()->getView();

        foreach ($query as $i) { {
                $itemString = $startDiv;
                error_reporting(0);
                $itemString .= "<a style=\"color:black\" target=\"_blank\" href=\"{$i->getDetailedUrl()}\" ><img src=\"{$i->getMediumImage()}\" /></a>";
                error_reporting(-1);
                $itemString .= '<br/>';
                $itemString .= "<a style=\"color:black\" target=\"_blank\" href=\"{$i->getDetailedUrl()}\">{$i->getTitle()}</a>";
                $itemString .= '<br/>';
                error_reporting(0);
                $itemString .= "<span style=\"color:red;font-weight:bold\">{$i->getFormattedPrice()}</span>";
                error_reporting(-1);
                $itemString .= $endDiv;
                $items[] = $itemString;
            }
        }

        $amazonTable = $view->Table($items, 4, array('class' => 'amazonTable', 'border' => '1'), count($items));
        return $amazonTable;
    }

}

?>
