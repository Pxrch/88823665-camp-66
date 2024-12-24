<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <h1>File index.php</h1>
    <?php
    echo "Hello World";
    echo "<br>";
    print("Hello World");
    echo "<br>";
    print_r("Hello World");
    echo "<br>";
    printf("Hello World");
    echo "<br>";
    var_dump("Hello World");
    echo "<br>";
    $myVar = "Hello World";
    ?>
    <h1><?php echo $myVar ?></h1>
    <?php
    echo "<h1>" . $myVar . "</h1>";
    ?>
    <?php
    $x = 1;
    function myfunction($myParam)
    {
        global $x;
        $x = "Hello";
        return $myParam;
    }
    echo "<p>" . MYFUNCTION("Hello World!") . "</p>";
    ?>
    <h1><?php echo $x ?></h1>
    <?php echo "1" + '1' ?>
    <?php
    $myChar = "a";
    ?>
    <h1><?php echo ++$myChar; ?></h1>
    <?php
    if (1 == '1') {
        echo "1 == \"1\"";
    } else
    if (true) {
        echo "1 != \"1\"";
    }

    $my_array = array(1, 2, 3, 4, 5);
    for ($i = 0; $i < count($my_array); $i++) {
        echo $my_array[$i];
    }
    foreach ($my_array as $index => $value) {
        echo $value;
    }
    echo "<br>";
    $my_array2[] = 1;
    $my_array2[] = 2;
    $my_array2[4] = 3;
    $my_array2[] = 4;
    $my_array2[] = 5;
    print_r($my_array2);
    echo "<br>";
    $my_array3 = array(1, 2, 3, "myindex" => 4, 0 => 9);
    $my_array3["myindex"] = 1;
    print_r($my_array3);
    foreach ($my_array as $value) {
        echo $value;
    }
    ?>
</body>

</html>