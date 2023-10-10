<?php
    function selectPostByName($name, $limit = 4){
        $sql = "SELECT * FROM post where name = '%$name%' limit $limit";
        echo $sql;
    }

    function insertProduct($name, $qty, $price,$prod_er){
        $sql = "INSERT INTO `products`(name, qty, price, prod_er) 
        VALUES ($name, $qty, $price,$prod_er)";
        echo $sql;
    }

    function delProductById($id){
        $sql = "DELETE FROM `products` WHERE id = $id";
        echo $sql;
    }

    function selectPostById($id){
        $sql = "SELECT * FROM posts where id = $id";
        echo $sql;
    }

    echo selectPostById(3);
    echo selectPostByName('quang');

    function _select($tableName){
        return "SELECT * FROM $tableName";
    }

    function _where($field, $value){
        return " where $field = $value";
    }

    function andWhere($field, $value){
        return " and $field = $value";
    }

    function orWhere($field, $value){
        return " or $field = $value";
    }

    echo _select("categories") . _where ('id',4) .orwhere('name','quan');
    echo "<br>";

    echo _select("news") . _where('id', 4) .andWhere('name','quang');
