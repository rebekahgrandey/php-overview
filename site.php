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

            // Arrays
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            $friends[4] = "Phyllis";
            $friends[0] = "Bobby";
            echo $friends[0];  
            echo count($friends);
        ?>

<form action="site.php" method="post">
            Which fruits do you like?
            <br>
            Apples: <input type="checkbox" name="fruits[]" value="apples">
            Oranges: <input type="checkbox" name="fruits[]" value="oranges">
            Pears: <input type="checkbox" name="fruits[]" value="pears">
            <br>
            <input type="submit">
        </form>

        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        ?>


        
        <form action="site.php" method="post">
            <input type="text" name="student"> <br>
            <input type="submit">
        </form>

        <?php
        
        // Associative arrays (stores both a key and a value)
            $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C");
            echo $grades[$_POST["student"]];
            
        ?>

        <?php
        include "header.html";
        //functions
        function sayHi($name, $age){
            echo "Hello $name, you are $age";
        }

        sayHi();

        ?>

        <?php
            //classes, objects, and constructors
            class Book {
                public $author;
                public $title;
                public $pages;

                function __construct($name, $aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                    //^ this = refers to the object being created
                    
                    echo "New Book Created for $name <br>";
                }
                
             }

             /* 
             $book1 = new Book;
             $book1->title = "Norwegian Wood";
             $book1->author = "Haruki Murakami";
             $book1->pages = 296;

             $book2 = new Book;
             $book2->title = "Lord of the Rings";
             $book2->author = "Tolkien";
             $book2->pages = 700;
             */

             //* constructor allowed for quicker instantiation (below) vs above

             $book1 = new Book("Norwegian Wood", "Haruki Murakami", 296);

             $book2 = new Book("Lord of the Rings", "Tolkien", 700);



        ?>


    </body>
</html>

