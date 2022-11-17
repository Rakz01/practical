<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->TYIT_229718;
   echo "Database TYIT_229718 selected";
   $collection = $db->TYITCol;
   echo "Collection selected succsessfully";
   
   // now remove the document
   $collection->remove(array("name"=>"Kshamata"));
   echo "Documents deleted successfully";
   
   // now display the available documents
   $cursor = $collection->find();
	
   // iterate cursor to display title of documents
   echo "Updated document";
	
   foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
?>