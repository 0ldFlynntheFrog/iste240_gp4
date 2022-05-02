<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Unix Academy</title>
	<link href = "assets/style.css" rel = 'stylesheet' >
</head>
<body <?php if ($page == "Chapters") {echo "onload='UnixChapters();'";} ?> >

	<!-- Heading HTML below -->
	<!-- Changed from div heading to just header -->
	<header>
		<h1><span style = "color: rgb(199, 49, 49)">Unix</span>&nbsp;Academy</h1>

		<nav>
			<a href = "index.php">Homepage</a>
      <div class = "dropdown">
        <button class="dropbtn">Chapters</button>
        <div class="dropdown-content">
          <a href="chapter0.php">What is Unix?</a>
          <a href="chapter1.php">Chapter 1</a>
          <a href="">Chapter 2</a>
          <a href="">Chapter 3</a>
          <a href="">Chapter 4</a>
        </div>
      </div>
      <div class = "dropdown">
        <button class="dropbtn">Quizzes</button>
        <div class="dropdown-content">
          <a href="">Quiz 1</a>
          <a href="">Quiz 2</a>
          <a href="">Quiz 3</a>
          <a href="">Quiz 4</a>
        </div>
      </div>	
		<nav>
	</header>

	<!-- end of heading -->