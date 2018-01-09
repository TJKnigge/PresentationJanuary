<?php

session_start();

function showHeader(){
        $returnString = <<<HEADSTRING
        <html>
            <head>
                
                <link rel = "stylesheet" type = "text/css" href = "StyleSheet.css">
                
                <script>
                function logout(){
                    document.location="Logout.php";
   
                }
                </script>
            </head>
        <body>
 
HEADSTRING;
     return $returnString;
    }
     
function showFooter(){
    $returnString = "\t</body>\n";
    $returnString .= "</html>";
    return $returnString;
}

//    $hostname = 'localhost';       
//    $databasenaam = 'projecquilt';
//    $username = 'root';
//    $password = '';
       
//    
//        $conn = mysqli_connect($hostname, $username, $password, $databasenaam);
//                
//        if (!$conn){
//            die("DB failed to connect" . mysqli_error($conn));
//
//        }
      
?>
 
        <script>
                
       
        </script>
      
        <header> Fabric forms  
            <br>  
        <a class= "subtxt"> Quilts with love</a> </header>        

        

<?php

        echo showFooter();
?>

