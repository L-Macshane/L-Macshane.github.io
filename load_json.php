<?php 
        echo '<p>Hello World</p>'; 
        
        // read JSon input
        $data = json_decode(file_get_contents('php://input'));
        $text = print_r($data,true);
        file_put_contents('archive.txt', $text);

?>
