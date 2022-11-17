<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->TYIT_229718;
   echo "Database TYIT_229718 selected";
   $collection = $db->TYITCol;
   echo "Collection selected succsessfully";

   // now update the document
   $collection->update(array("name"=>"Kshamata"), 
      array('$set'=>array("rollno"=>718)));
   echo "Document updated successfully";
	
   // now display the updated document
   $cursor = $collection->find();
	
   // iterate cursor to display title of documents
   echo "Updated document";
	
   foreach ($cursor as $document) {
      echo "<br>".$document["name"] . "<br>";
   }
?>