<?php

 function pdo($pdo, $sql, $args = null)
 {
     if (!args) {
         return $pdo->$query($sql);
     }

     $stmt = $pdo->prepare($sql);
     $stmt->execute($args);
     return $stmt;
 }



 // count
$count = pdo($pdo, "SELECT count(*) FROM users")->fetchColumn();

 // get the user based on email
 $user = pdo($pdo, "SELECT * FROM users WHERE email = ?", [$email])->fetch();


 // get users with salary greater than ?
 $data = pdo($pdo, "SELECT * FROM users WHERE salary > ?", [$salary])->fetchAll();

 // get the number of affected rows from DELETE/UPDATE/INSERT
 $deleted = pdo($pdo, "DELETE FROM users WHERE id = ?", [$id])->rowCount();

 // insert
 pdo($pdo, "INSERT INTO users VALUES (null, ?, ?, ?)", [$name, $email, $password]);

 // named placeholders
pdo($pdo, "UPDATE users SET name=:name WHERE id=:id", ['id'=>$id, 'name'=>$name]);

// index the returned array by id
$indexed = pdo($pdo, "SELECT id, name FROM users")->fetchAll(PDO::FETCH_KEY_PAIR);
