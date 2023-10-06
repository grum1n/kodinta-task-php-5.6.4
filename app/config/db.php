<?php

session_start();
require('connect.php');

function dd($value) //to be deleted
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function selectAll($table)
{
    global $conn;

    $sql = "SELECT * FROM $table";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function selectOne($table, $id)
{
    global $conn;

    $sql = "SELECT * FROM $table WHERE id=$id AND visible=1";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function selectIdForEdit($table, $id)
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE id=$id";
    

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function getPublishedNews()
{
    global $conn;

    $sql = "SELECT * FROM news WHERE visible=1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getNewsByTypeId($type_id)
{

    global $conn;
    
    $sql = "SELECT * FROM news WHERE visible=1 AND news_type_id=$type_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $records;
}
