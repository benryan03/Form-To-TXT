<?php
$input = "";
date_default_timezone_set("America/New_York");

if(!empty($_POST["submit"])){                   //if submitted, then validate
    $input = trim($_POST["input"]);             //trim() removes whitespace from both sides of input
    $input = htmlspecialchars($input);          //htmlspecialchars() converts <, >, "", ', and & to HTML entities

    $myfile = fopen("file.txt", "a");
    $txt = date("Y/m/d h:i:sa ").$input."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>

<html>
<head>
<title>txt Form</title>

<link rel="stylesheet" type="text/css" href="default.css">

</head>
<body>
<center>

<div class="header">
    <h1>Form to txt</h1>
</div>

<div class="content">
    Enter some text to submit:<br><br>
    <form class="contact-form" action="? echo htmlspecialchars($_SERVER["PHP_SELF"]) method="post">

        <input type="text" name="input" value="<?php echo htmlentities($input) ?>"><br><br>

        <input type="submit" value="Submit" name="submit">
        
    </form>
</div>

</center>
</body>
</html>