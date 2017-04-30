<?php
namespace Smacnew\Product\Block;

class Product extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }

    /*public function getProductByID($ProductID){
        return true;
    }

    public function getSameBranchProducts($ProductID){
        return true;
    }

    public function getRelatedProducts($ProductID){
        return true;
    }*/
}