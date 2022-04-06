<?php
/**
 * Connects to the database
 *
 * @return PDO
 */
function getDbConnection(): PDO {
    $db = new PDO('mysql:host=db; dbname=skateplazas', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Extracts the data and creates an array
 *
 * @param PDO $db
 * @return array|false
 */
function getAllPlazas(PDO $db) {
    $query = $db->prepare("SELECT `name`, `country`, `city`, `dob`, `status`, `vibe`, `photo`
FROM `skateplazas`;");
    $query->execute();
    $skatePlazas = $query->fetchAll();
    return $skatePlazas;
}