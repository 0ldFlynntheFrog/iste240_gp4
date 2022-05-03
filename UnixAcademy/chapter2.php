<?php
    $title = '- Chapter 2';
    $page = "Chapter 2";
    include("assets/inc/heading.php");
    include("assets/inc/sidebar.php");

    $servername = "localhost";
    $username = "klo7619";
    $password = "Wingback2!supralapsarian";
    $database = "klo7619";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT content FROM modular_unix where name ='".$page. "'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->FETCH_ASSOC()){
            echo $row['content'];
        }
    }
    else{
        echo '0 results';
    }

    $conn->close();
?>
</body>
</html>