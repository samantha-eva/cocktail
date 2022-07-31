<?php
require_once 'model/database.php';

/**
 * Renvoie toutes les familles de cocktails présentent en BDD
 *
 * @return array Tableau à 2 dimensions contenant les familles (id, name)
 */
function getAllFamilies(): array{
    $database = databaseConnect();

    $SQL = 'SELECT * FROM `families`';

    $query = $database->prepare($SQL);

    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}