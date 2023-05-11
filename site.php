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

        <form action="site.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <br>
            <input type="submit">
        </form>

        Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

        <!-- http://localhost:4000/site.php?num1=4&num2=5 
        ^ Can manipulate variables with URL -->

       
       <!-- Mad Lib -->
        <form action="site.php" method="get">
            Color: <input type="text" name="color">
            <br>
            Plural noun: <input type="text" name="pluralNoun">
            <br>
            Celebrity: <input type="text" name="celebrity">
            <br>
            <input type="submit">
        </form>

        <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
        
        // GET

        // http://localhost:4000/site.php?name=John&age=70

        echo $_GET["age"]; 
        ?>

        <!--don't use GET for sensitive info (shows in URL). use POST-->
        <form action="site.php" method="post">
            Password: <input type="password" name="password"> <br>
            <input type="submit">
        </form>
        <br>

        <?php
            echo $_POST["password"];
        ?>

    </body>
</html>

