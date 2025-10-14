<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: beige;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: pink;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: pink;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: powderblue;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: powderblue;
  padding: 10px;
  text-align: center;
  color: pink;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
  <h2>CITIES</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="homepage.php?page=London">London</a></li>
      <li><a href="homepage.php?page=Paris">Paris</a></li>
      <li><a href="homepage.php?page=Tokyo">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <!--content area-->
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page){
            case 'London':
                include 'london.php';
                break;
            case 'Tokyo':
                include 'tokyo.php';
                break;
            case 'Paris':
                include 'paris.php';
                    break;
        }   
    }
    ?>
  </article>
</section>



</body>
</html>

