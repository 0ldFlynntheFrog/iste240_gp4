<?php
    $title = '- Quiz 3';
    $page = "Quiz 3";
    include("assets/inc/heading.php");
?>
<div class = "quizzes">
<h1>Chapter 3 Quiz</h1>
<h2>Ownership and Permissions</h2>
<form name="quiz" onsubmit="return validateQuiz();" method="post" action="quiz3.php">
  <fieldset>
            Question 1: Which command is used to <b>change permissions</b>?<br>
            <input type="radio" id="q1a1" name="question1" value="chpm">
            <label for="q1a1">chpm</label><br>

            <input type="radio" id="q1a2" name="question1" value="chmod">
            <label for="q1a2">chmod</label><br>

            <input type="radio" id="q1a3" name="question1" value="ch">
            <label for="q1a3">ch</label><br>
    
            <input type="radio" id="q1a4" name="question1" value="admin">
            <label for="q1a4">admin</label><br>
</fieldset>
<fieldset>
            Question 2: Which of the following is a valid command to change permissions?<br>
            <input type="radio" id="q2a1" name="question2" value="chmod ug+r file">
            <label for="q2a1">chmod ug+r file</label><br>

            <input type="radio" id="q2a2" name="question2" value="chmod 444 file">
            <label for="q2a2">chmod 444 file</label><br>

            <input type="radio" id="q2a3" name="question2" value="chmod user file">
            <label for="q2a3">chmod user file</label><br>
    
            <input type="radio" id="q2a4" name="question2" value="Both a and b">
            <label for="q2a4">Both a and b</label><br>
</fieldset>
<fieldset>
            Question 3: True/False. Users with <b>only</b> the execute permission can change or edit file contents.<br>
            <input type="radio" id="q3a1" name="question3" value="True">
            <label for="q3a1">True</label><br>

            <input type="radio" id="q3a2" name="question3" value="False">
            <label for="q3a2">False</label>
</fieldset>
<p id="error"></p>
<input type="submit" class="button" name="submit" value="Submit" />
</form>
<p>
    <?php
        if (!empty($_POST['submit'])) {
            $guess1 = $_POST['question1'];
            $guess2 = $_POST['question2'];
            $guess3 = $_POST['question3'];

            $correct1 = "chmod";
            $correct2 = "Both a and b";
            $correct3 = "False";
            
            echo "The correct answer for Question 1 was <b>" . $correct1 . "</b><br>";
            echo "The correct answer for Question 2 was <b>" . $correct2 . "</b><br>";
            echo "The correct answer for Question 3 was <b>" . $correct3 . "</b><br>";

            if ($correct1 == $guess1 && $correct2 == $guess2 && $correct3 == $guess3) {
                echo "Great Job! You got all questions correct!";
            }
            else{
                echo "You didn't get all answers correct, check to see which answers you got wrong.";
            }
        }
    ?>
</p>
</div>