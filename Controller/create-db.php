<?php  
 // Check if database.php has already been included, and if not, to require it.
 require_once(__DIR__ . "/../model/config.php");
 
// Created a query, and it creates a table
// Tables name is Post
   $query = $_SESSION["connection"]->query("CREATE TABLE posts("
    // THe ID is an integer and we don't have to worry about setting ids usinng AUTO_INCREMEMNT
    // NONE OF THEM COULD BE NULL!!!
    . "id int(11) NOT NULL AUTO_INCREMENT,"
    // The title is a string of characters
    . "title varchar(255) NOT NULL,"
    // The post is text
    . " post text NOT NULL,"
    // Our Primary key is "id"
    // The way tables are connected to each other
    . "PRIMARY KEY (id) )");
 
 
   if ($query) {
    // Makes a table called posts
    echo "<p>Successfully create table: posts</p>";
   }
   else{
    //  If the page is refreshed, it'll display the error.
     echo "<p>" . $_SESSION["connection"]->error . "</p>";
   }
