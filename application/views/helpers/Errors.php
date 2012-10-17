<?php

/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Custom view helper to properly format errors for display with
 * forms
 ******************************************************************************/


class Zend_View_Helper_Errors extends Zend_View_Helper_Abstract
{
    public function Errors(Array $errors=null)
    {
        if(count($errors)>0)
        {
            echo "<div class=errors>";
            echo "<ul>";
            foreach($errors as $error)
            {
                 if(isset($error[0]))
                 {
                     printf("<li>%s</li>", $error[0]);
                 }
            }
            echo "</ul>";
            echo "</div>";

        }
    }
}
?>
