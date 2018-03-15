<html>
<head>
<title>
test xss
</title>
</head>


<body>

GET=xss<br>
POST=xssp<br>

<?php echo $_GET["xss"]; ?>
<?php echo $_POST["xssp"]; ?>

</body>
</html>
