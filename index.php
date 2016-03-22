<style>
html, body, .container {
height: 100%;
}
.container {
display: flex;
         align-items: center;
         justify-content: center;
}
</style>

<html>
<head>
<title> Hello Cloudwick </title>
</head>
<body>
<h1> Please enter your names </h1>
<p>  My website </p>
<form action ="/list-names.php"method="GET">
<input type ="text" placeholder = "type your name here" name="name">
<button type="submit">Submit</button>
</form>

<div id="container">
<?php echo "Hello world" ?>
</div>
</body>
</html>
