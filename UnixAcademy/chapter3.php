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
        Permissions have 3 different categories which is who is allowed to read, write, or execute: 
        <ul>
            <li>Reading permissions allow to see whats in a file, or even copy or print it aswell.</li>
            <li>Writing permissions can edit what is inside of a file and can also do things like delete the file.</li>
            <li>Execute permissions allow a user to execute that file or get to it from a path.</li>
        </ul>
    </p>
    <h3>Numeric Permissions</h3>
    <p>
        Numeric permissions use three digits for 'rwx' where each triplet of digits is the sum of three numbers.
        <ul>
            <li>4 for r</li>
            <li>2 for w</li>
            <li>1 for x</li>
        </ul>
        We can also specify 0 which means no permissions represented as a single dash '-'.
    </p>
    <h3>Symbolic Permissions</h3>
    <p>
        Symbolic permissions uses a categorical symbol to define who to assign permissions to, an operation symbol,
        to define how the permissions are managed, and a path to the file and directory.
    </p>
    <p>
        For categorical symbols we choose from: 
        <ul>
            <li>u, the user to which the file belongs to</li>
            <li>g, usernames belonging to the primary group of the user</li>
            <li>o, everyone else on the system, or pretty much the world</li>
            <li>a, representing all 3 symbols in one</li>
        </ul>
        We can use these symbols in any combo we desire.
    </p>
    <p>
        For operational symbols we use:
        <ul>
            <li>+, add symbolic-combo to file/directory</li>
            <li>g, subtract symbolic-combo from file/directory</li>
            <li>o, set file/directory to symbolic-combo</li>
        </ul>
        We can also use these operation systems in any combo we desire.
    </p>
    <p>
        Permissions for a file or directory can be changed numerically or symbolically. For example,
        when changing permissions we can use a command that looks something like 
        "chmod 444 file" or "chmod ug+r file".
    </p>
    <h3>Commands</h3>
    <ul>
        <li>ls -l, Shows who is currently has ownership</li>
        <li>chmod, Allows you to change and alter permissions</li>
        <li>-l, Will show the type, owner, time of changes, and also the size of the file</li>
    </ul>
    <a href="quiz3.php">Ready for the Quiz?</a>
</main>