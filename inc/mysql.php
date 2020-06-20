<?php

$pdo = array();
$pdo['host']       = 'mysql:host=localhost;dbname=bligeoyh_xzsapps8_shop';
$pdo['user']       = 'bligeoyh_developered';
$pdo['pass']       = '22LrlidXD6B2FOCB';
$pdo['options']    = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');
$pdo['connection'] = new PDO($pdo['host'], $pdo['user'], $pdo['pass'],$pdo['options']);

function lastID() {
    global $pdo;
    return $pdo['connection']->lastInsertId();
}

function getRow($pdoQuery) {
    global $pdo;
    $pdoStatement = $pdo['connection']->prepare($pdoQuery);
    $pdoStatement->execute();
    $pdoResponse = $pdoStatement->fetch(PDO::FETCH_ASSOC);
    return $pdoResponse;
}

function countRow($pdoQuery) {
    global $pdo;
    $pdoStatement = $pdo['connection']->prepare($pdoQuery);
    $pdoStatement->execute();
    $pdoResponse = $pdoStatement->fetch(PDO::FETCH_ASSOC);
    $countRow = $pdoStatement->rowCount();
    return $countRow;
}

function getAll($pdoQuery) {
  global $pdo;
  $pdoStatement = $pdo['connection']->prepare($pdoQuery);
  $pdoStatement->execute();
  $pdoResponse = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
  return $pdoResponse;
}

function getOne($pdoQuery) {
  global $pdo;
  $pdoStatement = $pdo['connection']->prepare($pdoQuery);
  $pdoStatement->execute();
  $pdoResponse = $pdoStatement->fetch(PDO::FETCH_ASSOC);
  return reset($pdoResponse);
}

function execute($pdoQuery) {
    global $pdo;
    $pdo['connection']->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $pdoStatement = $pdo['connection']->prepare($pdoQuery);
    $pdoStatement->execute();
}

?>
