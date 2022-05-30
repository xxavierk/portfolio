<?php
$title = 'A propos';
$content = 'Contenu de la page à propos';

require 'template.php';

// 1
// $data = [
//     'title' => 'Test1',
//     'description' => 'description de test1',
//     'gal_order' => 0
// ];
// $sql = "INSERT INTO gallery (title, description, gal_order) VALUES (:title, :description, :gal_order)";
// $stmt= $db->prepare($sql);
// $stmt->execute($data);

// 2
// $data = [
//     'title' => 'Test1',
//     'description' => 'description de test1',
//     'gal_order' => 0
// ];
// $sql = "INSERT INTO gallery (title, description, gal_order) VALUES (:title, :description, :gal_order)";
// $db->prepare($sql)->execute($data);

// 3
// $sql = "INSERT INTO gallery (title, description, gal_order) VALUES (:title, :description, :gal_order)";
// $db->prepare($sql)->execute(['title' => 'Test3', 'description' => 'description de test3', 'gal_order' => 0]);

// 4
// $sql = "INSERT INTO gallery (title, description, gal_order) VALUES (?, ?, ?)";
// $db->prepare($sql)->execute(['Test4', 'description de test4', 0]);

// 5
// $sql = "INSERT INTO gallery SET title='Test5', description='Description de test5', gal_order=0";
// $db->prepare($sql)->execute();

// 6
// $sql = "INSERT INTO gallery SET title='Test5', description='Description de test5', gal_order=0";
// $db->query($sql);

// 7
// $data = [
//     ['Test10', 'description de test10', 0 ],
//     ['Test11', 'description de test11', 0 ]
// ];
// $sql = "INSERT INTO gallery (title, description, gal_order) VALUES (?, ?, ?)";
// $stm = $db->prepare($sql);
// foreach ($data as $row)
// {
//     $stm->execute($row);
// }

// 8
// $data = [
//     [
//     'title' => 'Test13bis',
//     'description' => 'description de test10',
//     'gal_order' => 0
//     ],
//     [
//     'title' => 'Test14',
//     'description' => "description de test11 l'apostrophe",
//     'gal_order' => 0
//     ]
// ];
// $sql = "INSERT INTO gallery (title, description, gal_order) VALUES (:title, :description, :gal_order)";
// $stm = $db->prepare($sql);
// foreach ($data as $row)
// {
//     $stm->execute($row);
// }



// // Affichage
// $query = "SELECT id, title, description FROM gallery";
// $result = $db->query($query);

// print ($count = $result->rowCount());

// while($r = $result->fetch(PDO::FETCH_ASSOC)) {
//     var_dump($r);
// }
