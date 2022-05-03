<?php
    $title = '- Quiz 2';
    $page = "Quiz 2";
    include("assets/inc/heading.php");
?>

<div class = "quizzes">

<h1>Chapter 2 Quiz</h1>
<h2>Navigating through the File System</h2>
<form name="quiz" onsubmit="return validateQuiz();" method="post" action="quiz1.php">
  <fieldset>
            Question 1: Which command is used to <b>move a directory</b>?<br>
            <input type="radio" id="q1a1" name="question1" value="mvdir">
            <label for="q1a1">mvdir</label><br>

            <input type="radio" id="q1a2" name="question1" value="mkdir">
            <label for="q1a2">mkdir</label><br>

            <input type="radio" id="q1a3" name="question1" value="mv">
            <label for="q1a3">mv</label><br>
    
            <input type="radio" id="q1a4" name="question1" value="cd 'absolute path'">
            <label for="q1a4">cd 'absolute path'</label><br>
</fieldset>
<fieldset>
  Question 2: The command <b>'pwd'</b> prints what to the terminal?<br>
            <input type="radio" id="q2a1" name="question2" value="Your current drive">
            <label for="q2a1">Your current drive</label><br>

            <input type="radio" id="q2a2" name="question2" value="The listing of all files in the directory">
            <label for="q2a2">The listing of all files in the directory</label><br>

            <input type="radio" id="q2a3" name="question2" value="The absolute path of the current working directory">
            <label for="q2a3">The absolute path of the current working directory</label><br>
    
            <input type="radio" id="q2a4" name="question2" value="Changes your current working directory">
            <label for="q2a4">Changes your current working directory</label><br>
</fieldset>
<fieldset>
  Question 3: True/False. In the absolute path, the drive is represented by a number.<br>
  <input type="radio" id="q3a1" name="question3" value="True">
            <label for="q3a1">True</label><br>

            <input type="radio" id="q3a2" name="question3" value="False">
            <label for="q3a2">False</label>
</fieldset>
  <p id="error"></p>
  <input type="submit" class="button" name="submit" value="Submit" />
</form>
</div>
	
</body>
</html>