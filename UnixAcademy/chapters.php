<?php
include("assets/inc/heading.php");
?>

	<link href = "assets/style.css" rel = 'stylesheet' >

    <script src="unixacademy.js"></script>

	<!-- Side Bar HTML below -->

    <div class = "sidebar">
        <!-- heading for side bar will also be a button -->
        <button type="button" onclick="UnixChapters ()"> Unix Chapters</button>

        <br>
        
        <button type="button" onclick="Chapter1 ()">Chapter 1</button>
        <button type="button" onclick="Chapter2 ()">Chapter 2</button>
        <button type="button" onclick="Chapter3 ()">Chapter 3</button>
        <button type="button" onclick="Chapter4 ()">Chapter 4</button>
        

    </div>

    <style>
        /* code is not working in style.css so I put it here for now */
        .main {
            background-color: rgb(182, 189, 189);
            margin-left: 300px;
            margin-right: 300px;
            padding: 20px;
        }
  
        .paragraph {
            color: black;
            font-size: 20px;
        }
    </style>

	<!-- end of Side Bar -->

    <!-- Main HTML Below -->

    <!-- code changes with javascript when chapter buttons are clicked -->
    <div class = "main"> 
     <p class = "paragraph" id="paragraph" >General Unix Information goes here</p>
    </div>
    <!-- end of Main HTML -->

  

</body>
</html>