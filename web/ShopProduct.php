<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 2016/5/28
 * Time: 15:54
 */

class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    /**
     * ShopProduct constructor.
     * @param string $title
     * @param string $producerMainName
     * @param string $producerFirstName
     * @param int $price
     */
    public function __construct($title, $producerMainName, $producerFirstName, $price)
    {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }


    function getProducer(){
        return "{$this->producerFirstName}"."{$this->producerMainName}";
    }


}

$product1=new ShopProduct("My coca","Cao","Victor",1.99);
print "author:{$product1->getProducer()}\n";