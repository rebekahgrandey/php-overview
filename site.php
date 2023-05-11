<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Page Title</title>
    </head>
    <body>

        <?php
            $characterName = "John";
            $characterAge = 35;
            echo "Hello, $characterName! You are $characterAge years old. ";
            echo "$characterName, you're super cool for a $characterAge year old!!! ";
            echo "<hr>";
            $characterName = "Aly";
            $characterAge = "28";
            echo "$characterName is $characterAge years old.";

            $phrase = "To be or not to be";
            $age = 30;
            $gpa = 3.7;
            $isSmart = true;
            
            $closingString = "Bye, $characterName. Have a nice day! ";

            echo strtolower($closingString);
            echo strtoupper($closingString);
            echo strlen($closingString);
            echo $closingString[2];
            echo str_replace("Bye", "Hi", $closingString);


            //numbers
            $num = 10;
            $num++;
            echo $num;
            echo abs(-100);
            echo max(2, 10);
            echo floor(3.3);
            echo ceil(3.3);

            //user input
            




        ?>
        <form action="site.php" method="get">
            Name: <input type="text" name="username">
            <br>
            Age: <input type="text" name="age">
            <input type="submit">
        </form>
        <br>
        Your name is <?php echo $_GET["username"] ?>
        Your age is <?php echo $_GET["age"] ?>
    </body>
</html>