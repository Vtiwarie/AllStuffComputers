<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "../../cli.php";

$db = $application->getBootstrap()->getResource('db');

$amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id ;


$products = array(
                 'laptop'=>array('acer', 'alienware', 'apple', 'asus', 'dell', 'gateway', 'hp', 'lenovo', 'sony', 'toshiba'),
                 'desktop'=>array('acer', 'alienware', 'apple', 'asus', 'dell', 'gateway', 'hp', 'lenovo', 'sony', 'toshiba'),
                 'tablet'=>array('acer', 'apple', 'archos', 'asus', 'atc', 'blackberry', 'dell', 'google', 'hp', 'htc', 'motorola', 'oem systems', 'samsung', 'sony', 'toshiba', 'viewsonic'),
                 'kindle'=>array('amazon'), 
                 'portable hard drive'=>array('buffalo technology', 'hp', 'iomega', 'kingston', 'lacie', 'seagate', 'synology', 'toshiba', 'transcend', 'verbatim', 'western digital'),
                 'printer scanner'=>array('apple', 'brother', 'canon', 'epson', 'hp', 'kodak', 'lexmark', 'oki data', 'panasonic', 'ricoh', 'samsung'),
                 'monitor'=>array('acer', 'apple', 'asus', 'dell', 'gateway', 'hp', 'lenovo', 'panasonic', 'samsung', 'sony', 'toshiba', 'viewsonic'),
                 'router'=>array('belkin', 'buffalo', 'cisco', 'd-link', 'lg-ericsson', 'motorola', 'netgear', 'tp-link', 'trendnet', 'western digital')
    );


$productfilters = array('laptop'=>'NOTEBOOK_COMPUTER', 'desktop'=>'PERSONAL_COMPUTER', 'tablet'=>'TABLET_COMPUTER', 
    'kindle'=>'ABIS_ELECTRONICS', 'portable hard drive'=>'COMPUTER_DRIVE_OR_STORAGE', 
    'printer scanner'=>'MULTIFUNCTION_DEVICE', 'monitor'=>'MONITOR', 'router'=>'NETWORKING_DEVICE');
$search = new Custom_Service_Amazon();






/////////////////////////////////////////START UPDATING//////////////////
echo 'Which category to update?\n';
print_r(array_keys($products));


$category = chop(fgets(STDIN));
$overallCount = 0;
$itemCount = 0;
$overallPercent = 0;
$itemPercent = 0;

$categoryArray = $products[$category];
try
{
    $db->query("DELETE FROM amazonproducts WHERE category = ?", $category);
}
catch(Exception $e)
{
    echo $e->getMessage();
}
echo "\n\n{$category}s deleted.\n\n";

foreach ($categoryArray as $manufacturer) 
    {
    $itemCount = 0;
    echo "                                                                                                                                    ";
    echo "\rUpdating {$manufacturer} {$category}s...";
    if ($category == 'kindle') {
        $itemlist = $search->itemSearchAll(array('SearchIndex' => 'Electronics', 'Sort' => 'salesrank', 'Manufacturer' => $manufacturer, 'Keywords' => 'amazon kindle', 'ResponseGroup' => 'Medium', 'AssociateTag' => $amazonAssociateId), null, $productfilters[$category]);
    } else {
        $itemlist = $search->itemSearchAll(array('SearchIndex' => 'PCHardware', 'Sort' => 'salesrank', 'Manufacturer' => $manufacturer, 'Keywords' => $category, 'ResponseGroup' => 'Medium', 'AssociateTag' => $amazonAssociateId), null, $productfilters[$category]);
    }
    foreach ($itemlist as $item) 
        {
        try {
            $db->insert('amazonproducts', array('title' => "$item->Title",
                'ASIN' => "$item->ASIN",
                'manufacturer' => (isset($item->Manufacturer)) ? "$manufacturer" : '',
                'category' => "{$category}",
                'formattedPrice' => (isset($item->FormattedPrice)) ? "$item->FormattedPrice" : '',
                'detailedUrl' => "$item->DetailPageURL",
                'small_image' => (isset($item->SmallImage->Url)) ? "{$item->SmallImage->Url}" : '',
                'medium_image' => (isset($item->MediumImage->Url)) ? "{$item->MediumImage->Url}" : '',
                'large_image' => (isset($item->LargeImage->Url)) ? "{$item->LargeImage->Url}" : '',
                'created' => date("Y-m-d H:i:s"))
            );
            sleep(1);
            $itemCount++;
            $overallPercent = $overallCount / count($categoryArray) * 100;
            $itemPercent = (int)(($itemCount) / count($itemlist) * 100); 
            echo "\r                                                                                                       ";
            echo "\rUpdating {$manufacturer} {$category}s...$itemPercent%   Overall Completed: $overallPercent%";
         //   echo "\r                                                                                                       ";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    sleep(2);
    echo "\r                                                                                                       ";
    echo "\rFinished updating {$manufacturer} {$category}s!\n";
    $overallCount++;
   // echo "\nOverall Completed: $overallPercent%\r";
}
echo "finished processing {$category}s \n";

/*
$db->query('TRUNCATE TABLE amazonproducts');
//truncate the database table;
foreach($products as $key=>$value)
{
    $category = $key;
    echo "updating {$key}s";
    foreach($value as $manufacturer)
    {
        if($category == 'kindle')
        {
            $itemlist = $search->itemSearchAll(array('SearchIndex'=>'Electronics','Sort'=>'salesrank', 'Manufacturer'=>$manufacturer, 'Keywords'=>'amazon kindle', 'ResponseGroup'=>'Medium', 'AssociateTag'=>$amazonAssociateId), null, $productfilters[$category]);
        }
        else
        {
            $itemlist = $search->itemSearchAll(array('SearchIndex'=>'PCHardware','Sort'=>'salesrank', 'Manufacturer'=>$manufacturer, 'Keywords'=>$category, 'ResponseGroup'=>'Medium', 'AssociateTag'=>$amazonAssociateId), null, $productfilters[$category]);
        }
            foreach($itemlist as $item)
            {
                try
                {
            //$db->query("INSERT INTO amazonproducts (title, ASIN, manufacturer, category, formattedPrice, detailedUrl, small_image, medium_image, large_image, created) 
            //               VALUES ('{$item->Title}', '{$item->ASIN}', '{$item->Manufacturer}', '{$category}', '{$item->FormattedPrice}', 'small', 'medium', 'large', NOW()");

            $db->insert('amazonproducts', array('title'=>"$item->Title", 
                                                'ASIN'=>"$item->ASIN",
                                                'manufacturer'=>(isset($item->Manufacturer)) ? "$manufacturer":'',
                                                'category'=>"$category", 
                                                'formattedPrice'=>(isset($item->FormattedPrice)) ? "$item->FormattedPrice":'',
                                                'detailedUrl'=>"$item->DetailPageURL",
                                                'small_image'=>(isset($item->SmallImage->Url)) ? "{$item->SmallImage->Url}":'',
                                                'medium_image'=>(isset($item->MediumImage->Url)) ? "{$item->MediumImage->Url}":'',
                                                'large_image'=>(isset($item->LargeImage->Url)) ? "{$item->LargeImage->Url}":'', 
                                                'created'=>date("Y-m-d H:i:s"))
                );
                sleep(1);

                }
                catch(Exception $e)
                {
                    echo $e->getMessage();
                }

            }
        sleep(3);

    }
    sleep(2);
}

echo 'finished processing';
 * /*
 */

?>
