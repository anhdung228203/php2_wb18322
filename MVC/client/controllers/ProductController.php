<?php

function productList()
{

    $data['productAll'] = getAllProduct();

    showViewClient('./client/view/product/list.php',$data);
}

function productDetail($id)
{
    $data['product']=  $product = getProductById($id);

    $product ? showViewClient('./client/view/product/detail.php',$data) :  e404();
}
