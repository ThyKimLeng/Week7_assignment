<?php
    include_once "CRUD/CRUDOperate.php";

    $obj = new CRUDOperate();

    echo "1- Number of Sales by ABA method<br>";
    $query = "SELECT count(method) as amount FROM sales WHERE method='ABA'";
    $result = $obj->select($query);
    foreach ($result->fetchAll() as $row){
//        echo $row->item."-".$row->price."-".$row->quantity."-".$row->method."-".$row->total."<br>";
        echo $row->amount;
    }

    echo "<br>";
    echo "2- Number of Sales by PiPay and Wing method<br>";
    $query = "SELECT count(method) as amount FROM sales WHERE method IN ('PiPay', 'Wing')";
    $result = $obj->select($query);
    foreach ($result->fetchAll() as $row){
    //        echo $row->item."-".$row->price."-".$row->quantity."-".$row->method."-".$row->total."<br>";
        echo $row->amount;
    }

    echo "<br>";
    echo "3- Display all sales ordering by biggest total amount<br>";
    $query = "SELECT * FROM sales ORDER BY total DESC";
    $result = $obj->select($query);
    foreach ($result->fetchAll() as $row){
        echo $row->item."-".$row->price."-".$row->quantity."-".$row->method."-".$row->total."<br>";
    }

