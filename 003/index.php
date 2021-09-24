<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>

<body>

    <?php
        $name = "Md Riazul Islam,";
        $job = "I am a Web Developer at Saic Group";

        echo $name." ".$job;
        echo '<br>';

        echo strtoupper($name);

        echo '<br>';
        echo strtolower($job);

        echo '<br>';
        echo ucfirst($name);

        echo '<br>';
        echo strlen($name);

        echo '<br>';
        var_dump("$name");



?>

</body>

</html>