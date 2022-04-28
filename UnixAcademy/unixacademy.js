function UnixChapters () {
    var headings = document.getElementsByClassName("name");
    headings[0].innerHTML = "What is Unix?";

    var paragraphs = document.getElementsByClassName("paragraph");
    paragraphs[0].innerHTML = "Unix is the meat of a computer's software, withoutit, our computer is worthless." 
    + "In short, Unix is a collection of operating systems that brings substance to our computer."
    + "Different types of operating systems include:";

    var ul = document.getElementsByTagName("ul");
    ul[0].style.display = "block";

    headings[1].innerHTML = "Who Created Unix?";
    paragraphs[1].innerHTML = "In 1969, Unix was developed at AT&T Bell Labs by Ken Thompson," 
    + "Dennis Ritchie, Douglas Mcilroy, Joseph Ossanna. Originally collaborating with researchers"
    + "from MIT and General Electrics on an operating system named Multics, the godfathers of" 
    + "Unix dropped out of the project due to its complexity and developed a simpler version.";

    paragraphs[2].innerHTML = "As the popularity of Unix increased, companies began emulating Unix and making their" 
    + "own Unix-like operating systems. Most likely, the operating system you're using now is based on Linux."

    headings[2].innerHTML = "The Command Line Interface/Terminal";
    paragraphs[2].innerHTML = "The main importance of UNIX is the use of UNIX commands" 
    + "that we can use to navigate our way around our computer."

    paragraphs[3].innerHTML = "Command prompts are used by many operating systems that serve as the home for writing UNIX commands" 
    + "on our computer. The command prompt is often called a “terminal” or “command line interface” (CLI)."

    paragraphs[4].innerHTML = "In Chapter 1, we will overview some basic commands available for use in the command prompt."
}

function Chapter1 () {
    var heading = document.getElementById("name")
    heading.innerHTML = "Chapter 1"

    var text = document.getElementById("paragraph")
    text.innerHTML = "Chapter 1 information"
}

function Chapter2 () {
    var heading = document.getElementById("name")
    heading.innerHTML = "Chapter 2"

    var text = document.getElementById("paragraph")
    text.innerHTML = "Chapter 2 information"
}

function Chapter3 () {
    var heading = document.getElementById("name")
    heading.innerHTML = "Chapter 3"

    var text = document.getElementById("paragraph")
    text.innerHTML = "Chapter 3 information"
}

function Chapter4 () {
    var heading = document.getElementById("name")
    heading.innerHTML = "Chapter 4"

    var text = document.getElementById("paragraph")
    text.innerHTML = "Chapter 4 information"
}
