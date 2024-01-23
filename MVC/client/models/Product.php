<?php

function getAllProduct(){
    try{
        // Câu truy vấn thường
        $sql = "SELECT * FROM products";

        // Chuẩn bị câu truy vấn
        $stmt = $GLOBALS['conn']->prepare($sql);

        // Thực hiện câu truy vấn
        $stmt->execute();

        // fetchAll để lấy ra dữ liệu
        // PDO::FETCH_ASSOC Chuyển đổi dữ liệu ra thành kiểu mảng colum_name => value
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

function getProductById($id){
    try{
        // Câu truy vấn thường
        $sql = "SELECT * FROM products WHERE id = :id";

        // Chuẩn bị câu truy vấn
        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt -> bindParam(':id',$id);

        // Thực hiện câu truy vấn
        $stmt->execute();

        // fetchAll để lấy ra dữ liệu
        // PDO::FETCH_ASSOC Chuyển đổi dữ liệu ra thành kiểu mảng colum_name => value
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}