<?php

include_once 'config.php';
function getAll(){

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$query = "SELECT * FROM book";
$result = $conn->query($query);

$books = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();

return $books;
}

function getBooksByCategory($category)
{
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }
    $query = "SELECT * FROM book WHERE category = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $category);
    $stmt->execute();

    $result = $stmt->get_result();

    $books = $result->fetch_all(MYSQLI_ASSOC);
    
    $conn->close();

    return $books;
}
?>