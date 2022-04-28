<?php
$page = "Chapters";
include("assets/inc/heading.php");
?>

	<link href = "assets/style.css" rel = 'stylesheet' >

    <script src="unixacademy.js"></script>

	<!-- Side Bar HTML below -->

    <div class = "sidebar">
        <!-- heading for side bar will also be a button -->
        <h4>Table of Contents</h4>
        <button type="button" onclick="UnixChapters ()">About Unix</button>

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
            margin-bottom: 20px;
        }

        button {
            background-color: rgb(182, 189, 189);
            border: none;
            color: black;
            padding: 30px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(128, 124, 124);
        }

        ul{
            margin-top: 10px;
            margin-left: 2em;
            margin-bottom: 15px;
            display: none;
        }

        .name {
            padding-bottom: 10px;
        }

    </style>

	<!-- end of Side Bar -->

    <!-- Main HTML Below -->

    <!-- code changes with javascript when chapter buttons are clicked -->
    <div class = "main"> 
        <h2 class = "name" id = "name"></h2>
        <p class = "paragraph">
            <ul>
                <li>Windows</li>
                <li>macOS</li>
                <li>Linux</li>
                <li>Chrome OS</li>
                <li>Android</li>
                <li>iOS</li>
            </ul>
        </p>
        <h2 class = "name" id = "name" >Who Created Unix?</h2>
        <p class="paragraph" id="paragraph"></p>
        <p class="paragraph" id="paragraph"></p>
        <h2 class="name" id="name"></h2>
        <p class="paragraph" id="paragraph"></p>
        <p class="paragraph" id="paragraph"></p>
        <p class="paragraph" id="paragraph"></p>
    </div>
    <!-- end of Main HTML -->

  

</body>
</html>