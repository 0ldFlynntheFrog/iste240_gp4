<?php
    $page = "Chapter 0";
    include("assets/inc/heading.php");
    include("assets/inc/sidebar.php");
?>

<main class="chapter-content">
    <h2>Navigating through the File System</h2>
    <p>
        Unix commands are the bread and butter of navigating through an operating 
        system and the command prompt is how we put these commands to use.
    </p>
    <p>
        Many features of the operating system can be quickly and efficiently executed via 
        the command prompt, including:
        <ul>
            <li>Running programs</li>
            <li>Opening files</li>
            <li>Creating or editing text files</li>
            <li>Copying, moving, or deleting files</li>
            <li>Creating or deleting directories</li>
        </ul>
    </p>
    <h3>Files and Directories</h3>
    <p>
        Utilizing unix commands is a powerful way to make sense of the files and directories inside of your computer.
        The File System on your computer is organized into a tree structure. Your PC is at the root of the tree. 
        Every file or directory in your file system is uniquely identified by its absolute path which is 
        displayed right before the input for commands.
    </p>
    <p>
        <ul>
            <li>The path begins with the letter of the drive on which the file resides, e.g 'C:' or 'W:'.</li>
            <li>It includes the name of each directory and subdirectory.</li>
            <li>It ends with the name of the file.</li>
            <li>The names of directories and files are separated by a file separator, e.g. '\'.</li>
        </ul>
    </p>
    <p>
        In the command prompt, typing 'pwd' (print working directory) prints out the absolute path of the directory you are currently working in. 
        Typing ls in the command prompt lists all of the files in the directory you are in.
    </p>
    <p>
        One of the main commands we use for traversing through file systems is the 'cd' command which stands for change directory. 
        Typing cd and the absolute path of the directory you want to enter will change your current directory to the new one. 
        Alternatively, you can type 'cd' and press the tab button to cycle through subdirectories within the directory or use tab to 
        autocomplete an absolute path.
    </p>
    <p class="special-info">
        *Using '..' can be used to navigate and move in the opposite direction.<br>
        **If you aren't aware, using the up and down arrow keys will allow you to go through previous commands that you have entered in the command prompt.
    </p>
    <p>
        The 'rm' and mv' commands remove and move files or directories (rmdir) respectively. Similar to the 'cd' command, you also need 
        to provide an absolute path in order to properly execute this command into the command prompt.
    </p>
    <p>
        The 'mkdir' command can be used to make a new directory with a specified name in the current directory. You may also create the 
        same directory from anywhere in the file system using an absolute path. 
    </p>
    <a href="quiz1.php">Ready for the Quiz?</a>
</main>