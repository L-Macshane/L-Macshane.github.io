<?php 
        echo '<p>Hello World</p>'; 
        
        // read JSon input
        $data_back = json_decode(file_get_contents('php://input'));
        echo 'Here it is ' . $data_back;

?>
