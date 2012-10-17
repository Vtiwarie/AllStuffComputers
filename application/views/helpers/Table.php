<?php

/* * ****************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Custom view helper that assists with the formatting of Amazon
 * product dividers into tables, so that it may be rendered via table layouts
 * on each product page
 * **************************************************************************** */

class Zend_View_Helper_Table extends Zend_View_Helper_Abstract {

    public function Table(Array $elements = null, $colNum = 3, Array $options = null, $numToDisplay = null) {

        if (empty($elements) || empty($numToDisplay))
            return '';

        if (!isset($numToDisplay))
            $numToDisplay = count($elements);

        $table = '<table ';
        if (count($options) > 0) {
            foreach ($options AS $key => $value) {
                $table .= $key;
                $table .= '=';
                $table .= "\"$value\"";
                $table .= ' ';
            }
        }

        $table .= '>';

        $tableEnd = '</table>';



        $el = 0;
        while ($el < $numToDisplay) {
            $table .= '<tr>';
            for ($j = 0; $j < $colNum; $j++) {

                if (isset($elements[$el]) && $el < $numToDisplay) {
                    $table .= '<td>';
                    $table .= $elements[$el];
                    $table .= '</td>';
                    $el++;
                }
                else
                    break;
            }
            $table .= '</tr>';
        }

        $table .= $tableEnd;
        return $table;
    }

}

?>
