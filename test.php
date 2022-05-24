<?php
   function doQuery($query){
       if($_SERVER['REMOTE_ADDR'] =="172.70.85.232"){
   // Define database connection parameters
   $hn      = 'tkrev.com';
   $un      = 'zdgaroph_general';
   $pwd     = 'G(GM5U;o7v$W';
   $db      = 'zdgaroph_general';
   $cs      = 'utf8';

    // Set up the PDO parameters
    $dsn 	= "mysql:host=" . $hn . ";port=3306;dbname=" . $db . ";charset=" . $cs;
    $opt 	= array(
                         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                         PDO::ATTR_EMULATE_PREPARES   => false,
                        );
      
                        $pdo 	= new PDO($dsn, $un, $pwd, $opt);
         // Attempt to query database table and retrieve data	
         try {		
            $stmt 	= $pdo->query($query);
            while($row  = $stmt->fetch(PDO::FETCH_OBJ))
            {
               // Assign each row of data to associative array
               $data[] = $row;
            }
      
            // Return data as JSON
            
         }
         catch(PDOException $e)
         {
            return $e->getMessage();
         }
         
       
      
      
    
    return $data;
       }
}
$query="METTI_QUI_LA_TUA_QUERY";

echo json_encode(doQuery($query));

?>
