<?php


/**
 * Class productsController
 */

class productsController
{
    /**
     * Get products from database
     * @return mixed
     */

    public static function getProducts()
    {
      return  $products = productsModel::mdlGetProducts();

    }


}