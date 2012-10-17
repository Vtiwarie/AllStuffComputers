<?php

namespace Entities;
use Doctrine\Common\Collections\ArrayCollection;
/**
 *@Entity (repositoryClass="Repositories\AmazonProducts")
 * @Table(name="amazonproducts")
 * HasLifecycleCallbacks 
 */

class AmazonProducts
{
    /**
     *@Id @Column(type="integer")
     *@GeneratedValue(strategy="AUTO") 
     */
    private $id;
    
    /** @Column(type="string", length=500) */
    private $title;
    
    /** @Column(type="string", length=20) */
    private $ASIN;
    
    /** @Column(type="string", length=255) */
    private $manufacturer;
    
    /** @Column(type="string", length=50) */
    private $category;
    
    /** @Column(type="string", length=20) */
    private $formattedPrice;
    
    /** @Column(type="string", length=500) */
    private $detailedUrl;
    
    /** @Column(type="string", length=500) */
    private $small_image;
    
    /** @Column(type="string", length=500) */
    private $medium_image;
    
    /** @Column(type="string", length=500) */
    private $large_image;
    
    /** @Column(type="datetime") */
    private $created;
    
    
    public function __construct() 
    {
        $this->created = new \DateTime("now");
    }
    
    /**
     *PreUpdate 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
         return $this->title;

    }
    
    public function getASIN()
    {
        return $this->ASIN;
    }
    
    public function setASIN($asin)
    {
        $this->ASIN = $asin;
    }
    
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
    
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
    }
    
    public function setFormattedPrice($price)
    {
        $this->formattedPrice = $price;
    }
    
    public function getFormattedPrice()
    {
        return $this->formattedPrice;
    }
    
    public function getDetailedUrl()
    {
        return $this->detailedUrl;
    }
    
    public function setDetailedUrl($url)
    {
        $this->detailedUrl = $url;
    }
    public function setSmallImage($small)
    {
        $this->small_image = $small;
    }
    
     public function setMediumImage($medium)
    {
        $this->medium_image = $medium;
    }
     public function setLargeImage($large)
    {
        $this->large_image = $large;
    }
    
    public function getSmallImage()
    {
        return $this->small_image;
    }
    
    public function getMediumImage()
    {
        return $this->medium_image;
    }
    
    public function getLargeImage()
    {
        return $this->large_image;
    }
}
?>
