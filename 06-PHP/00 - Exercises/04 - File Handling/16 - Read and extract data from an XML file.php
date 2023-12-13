<?php

// Load the XML file
$xmlFile = 'books.xml';
$xml = simplexml_load_file($xmlFile);

// Iterate through each book in the catalog
foreach ($xml->book as $book) {
    // Extract specific data
    $id = (string)$book['id'];
    $author = (string)$book->author;
    $title = (string)$book->title;
    $genre = (string)$book->genre;
    $price = (float)$book->price;
    $publishDate = (string)$book->publish_date;
    $description = (string)$book->description;

    // Display the extracted data
    echo "Book ID: $id\n";
    echo "<br>";
    echo "Author: $author\n"; echo "<br>";
    echo "Title: $title\n"; echo "<br>";
    echo "Genre: $genre\n"; echo "<br>";
    echo "Price: $price\n"; echo "<br>";
    echo "Publish Date: $publishDate\n"; echo "<br>";
    echo "Description: $description\n"; echo "<br>";
    echo "------------------------\n"; echo "<br>";
}

?>
