<?php
   $m = new MongoClient();
   echo "\n Connection to database successfully \n ";
   $db = $m->TYIT_229718;
   echo "\n Database TYIT_229718 selected \n ";
   $collection = $db->TYITCol;
   echo "\n Collection selected succsessfully \n";
	
   $document = array( 
      "name" => "Kshamata", 
      "rollno" => 229718, 
      "class" => "TYIT",
      "div" => "B",
      "subject" => "NGT"
   );
	
   $collection->insert($document);
   echo "\n Document inserted successfully";
?>