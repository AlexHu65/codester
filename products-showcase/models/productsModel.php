<?php

class productsModel extends baseController
{

    /**
     * Connect database
     * @return null|PDO|string
     */

    public static function connection()
    {
        $conn = self::getDatabase();
        return $conn;
    }

    /**
     * Get all products
     * @return mixed
     */


    public static function mdlGetProducts()
    {

        $stmt = self::connection()->prepare("SELECT * FROM productos");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;




    }


}