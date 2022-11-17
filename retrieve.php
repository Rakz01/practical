<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->TYIT_229718;
   echo "Database TYIT_229718 selected";
   $collection = $db->TYITCol;
   echo "Collection selected succsessfully";

   $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
      echo "<br>". $document["name"] . "<br>";
      echo "<br>". $document["rollno"] . "<br>";
      echo "<br>". $document["class"] . "<br>";
      echo "<br>". $document["div"] . "<br>";
      echo "<br>". $document["subject"] . "<br>";
   }
