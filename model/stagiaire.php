<?php

function database_connection()
{
    return new PDO('mysql:dbname=ofppt;host=localhost', 'root', '');
}

function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM stagiaire ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
}

function create()
{
    extract($_POST);
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO stagiaire VALUES(null,?,?,?,?,?)");
    return $sqlState->execute([$nom, $prenom, $age, $login, $password]);
}

function edit($id, $nom, $prenom, $age, $login, $password)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE stagiaire
                                    SET nom = ? ,
                                        prenom = ? , 
                                        age = ? , 
                                        login = ? , 
                                        password = ?
                                    WHERE id = ?");
    return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);
}

function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM stagiaire WHERE id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM stagiaire WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);

}