<?php
namespace Api\Handlers;

class Product
{
    function get($select="", $where="", $limit=10, $page=1)
    {
        $product=[
            ['select'=>$select, 'where'=>$where, 'limit'=>$limit, 'page'=>$page],
            ['name'=>'Product2', 'price'=>200]
        ];

        return json_encode($product);
    }
}