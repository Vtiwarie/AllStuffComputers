<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * AmazonProducts
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AmazonProducts extends EntityRepository
{
    public function findByCategoryAndBrand($category, $brand) 
    {
        $map = new \Doctrine\ORM\Query\ResultSetMapping;
        $map->addEntityResult('Entities\AmazonProducts', 'a');
        $map->addFieldResult('a', 'id', 'id');
        $map->addFieldResult('a', 'title', 'title');
        $map->addFieldResult('a', 'ASIN', 'ASIN');
        $map->addFieldResult('a', 'manufacturer', 'manufacturer');
        $map->addFieldResult('a', 'category', 'category');
        $map->addFieldResult('a', 'formattedPrice', 'formattedPrice');
        $map->addFieldResult('a', 'detailedUrl', 'detailedUrl');
        $map->addFieldResult('a', 'small_image', 'small_image');
        $map->addFieldResult('a', 'medium_image', 'medium_image');
        $map->addFieldResult('a', 'large_image', 'large_image');
        $map->addFieldResult('a', 'created', 'created');


        //you must include for foreign keys even if not using it
        $query = $this->_em->createNativeQuery('SELECT * FROM amazonproducts WHERE category = ? AND manufacturer LIKE ?', $map);
        $query->setParameter(1, $category);
        $query->setParameter(2, "%$brand%");

        
        return $query->getResult();
    }
}
