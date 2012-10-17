<?php


class Custom_Service_Amazon extends Zend_Service_Amazon
{
    protected $amazonPublicKey;
    protected $amazonPrivateKey;
    protected $amazonCountry;
    protected $amazonAssociateId;
    
    
    public function __construct() 
    {
        
        
        $this->amazonPublicKey = Zend_Registry::get('config')
                ->amazon->product_advertising->public->key;
        $this->amazonPrivateKey = Zend_Registry::get('config')
                ->amazon->product_advertising->private->key;
         $this->amazonCountry = Zend_Registry::get('config')->amazon->product_advertising->country;
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id ;

       parent::__construct($this->amazonPublicKey, $this->amazonCountry, $this->amazonPrivateKey);

    }
    
   public function itemSearchAll(Array $options, Array $pages=null, $productFilter=null)
   {
       /*
       if(empty($pages))
           $thepages = range(1, 10);
       else if(!isset($pages))
           $pages[1]=$pages[0];
        * *
        */
     $thepages = array();
       if(!empty($pages))
       {
         if(!isset($pages[1]))
           $pages[1] = $pages[0];
        
          $thepages = range($pages[0], $pages[1]);
       }
       else
           $thepages = range(1, 10);
      
      
          
      $allResults = array();
      
      for($i=$thepages[0]; $i<=$thepages[count($thepages)-1]; $i++)
      {
          
            $page = $this->itemSearch(array_merge($options, array('ItemPage'=>$i)));
            foreach($page as $item)
            {
                if(!isset($productFilter))
                    $allResults[] = $item;
                elseif(($item->ProductTypeName == $productFilter))
                    $allResults[] = $item;
                else 
                    continue;
            }
      }
       
      return $allResults;
   }
}





?>
