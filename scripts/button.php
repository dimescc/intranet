<!DOCTYPE html>
<html>
     
<head>
    <title>
        Call different PHP functions
    </title>
</head>
 
<body style="text-align:center;">
     
    <h1 style="color:green;">
        Thomas @ Work
    </h1>
     
    <h4>
        Call a few PHP functions
    </h4>
     
    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "You have now pressed Button1";
        }
        function button2() {
            echo "This was Button2";
        }
    ?>
 
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
         
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>
</body>
</html>
