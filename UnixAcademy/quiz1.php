<?php
    $title = '- Quiz 1';
    $page = "Quiz 1";
    include("assets/inc/heading.php");
    $year = date("Y");
?>

<div class = "quizzes">

<h1>Chapter 1 Quiz</h1>
<h2>What is Unix?</h2>
<form name="quiz" onsubmit="return validateQuiz();" method="post" action="quiz1.php">
<fieldset>
            Question 1: True/False. Most operating systems are operating systems are based on Unix.<br>
            <input type="radio" id="q1a1" name="question1" value="True">
            <label for="q1a1">True</label><br>

            <input type="radio" id="q1a2" name="question1" value="False">
            <label for="q1a2">False</label>
</fieldset>
<fieldset>
            Question 2: When was Unix orginally developed?<br>
            <input type="radio" id="q2a1" name="question2" value="1984">
            <label for="q2a1">1984</label><br>

            <input type="radio" id="q2a2" name="question2" <?php echo "value='" . $year . "'";?>>
            <label for="q2a2"><?php echo $year; ?></label><br>

            <input type="radio" id="q2a3" name="question2" value="1969">
            <label for="q2a3">1969</label><br>
    
            <input type="radio" id="q2a4" name="question2" value="Before the dawn of time">
            <label for="q2a4">Before the dawn of time</label><br>
</fieldset>
<fieldset>
            Question 3: What is the main importance for a terminal in operating systems?<br>
            <input type="radio" id="q3a1" name="question3" value="Serves as the home for Unix commands">
            <label for="q3a1">Serves as the home for Unix commands</label><br>

            <input type="radio" id="q3a2" name="question3" value="Helps us navigate our way around our computer">
            <label for="q3a2">Helps us navigate our way around our computer</label><br>

            <input type="radio" id="q3a3" name="question3" value="Serves as communication between the user and computer">
            <label for="q3a3">Serves as communication between the user and computer</label><br>
    
            <input type="radio" id="q3a4" name="question3" value="All of the above">
            <label for="q3a4">All of the above</label><br>
</fieldset>
  <p id="error"></p>
  <input type="submit" class="button" name="submit" value="Submit" />
</form>
</div>	
</body>
</html>