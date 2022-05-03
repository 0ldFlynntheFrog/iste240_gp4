<?php
    $title = '- Chapter 3';
    $page = "Chapter 3";
    include("assets/inc/heading.php");
    include("assets/inc/sidebar.php");
?>

<main class="chapter-content">
    <h2>Ownership and Permissions</h2>
    <p>
        The ownership of Unix all start with the user and their files. 
        For each system everyone will have a username which will be used to define who the user is. 
        Everytime any thing is created under that username that file will belong to that user.
        In order to find who is currently the user and has ownership over all the files type "ls -l" and will return who the current owner and user is.
    </p>

    <p>
        Permissions have 3 different categories which is who is allowed to read, write, or execute.
        Reading permissions allow to see whats in a file, or even copy or print it aswell.
        Writing permissions can edit what is inside of a file and can also do things like delete the file.
        Execute permissions is being alowed to execute that file or get to it from a path.
        When changing permissions you will want to use a command line that looks something like "chmod 444 file" or "chmod ug+r file".
    </p>

    <h2>Commands</h2>

    <ul>
        <li>ls -l, Shows who is currently has ownership</li>
        <li>chmod, Allows you to chnage and alter permissions</li>
        <li>-l, Will show the type, owner, time of changes, and also the size of the file</li>
    </ul>


    <p class="special-info">
        
    </p>
    <p>
        
    </p>
    <p>
       
    </p>
    <a href="quiz3.php">Ready for the Quiz?</a>
</main>