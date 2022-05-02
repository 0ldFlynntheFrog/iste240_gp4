function validateQuiz() {
    var questionOneAnswer = document.forms["quiz"]["question1"].value;
    var questionTwoAnswer = document.forms["quiz"]["question2"].value;
    var questionThreeAnswer = document.forms["quiz"]["question3"].value;
    
    if(questionOneAnswer == "" || questionTwoAnswer == "" || questionThreeAnswer == ""){
      document.getElementById("error").innerHTML = "Please answer all questions before submitting.";
      return false;
    }
    return true;
}