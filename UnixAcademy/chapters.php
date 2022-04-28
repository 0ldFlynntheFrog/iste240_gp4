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
        <p class="paragraph" id="paragraph">
        In 1969, Unix was developed at AT&T Bell Labs by Ken Thompson, Dennis Ritchie, 
        Douglas Mcilroy, Joseph Ossanna. Originally collaborating with researchers from 
        MIT and General Electrics on an operating system named Multics, the godfathers of 
        Unix dropped out of the project due to its complexity and developed a simpler version.
        </p>
        <p class="paragraph" id="paragraph">
        As the popularity of Unix increased, companies began emulating Unix and making their 
        own Unix-like operating systems. Most likely, the operating system you're using now is based on Linux.
        </p>
        <h2 class="name" id="name">The Command Line Interface/Terminal</h2>
        <p class="paragraph" id="paragraph">
        The main importance of UNIX is the use of UNIX commands 
        that we can use to navigate our way around our computer.
        </p>
        <p class="paragraph" id="paragraph">
        Command prompts are used by many operating systems that serve as the home for writing UNIX commands 
        on our computer. The command prompt is often called a “terminal” or "command line interface" (CLI).
        </p>
        <p class="paragraph" id="paragraph">
        In Chapter 1, we will overview some basic commands available for use in the command prompt.
        </p>
    </div>
    <!-- end of Main HTML -->

  

</body>
</html>