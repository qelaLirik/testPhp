<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Site</title>
</head>

<body>
    <?php
    /*
        echo("hello world");
        echo "<h1>Liriki's Site</h1>";
        echo "<hr>";
        echo "<p>this is my site</p>";

        echo "<p>this is my site</p>";
        echo "<h1>Liriki's Site</h1>";
        echo "<hr>";
        echo "there once was a men named Albin";
        echo "He was 70 years old <br>";
        echo "he really liked the name George<br>";
        echo "But didn't like being 70 <br>"
        echo "there once was a men named Ahmet";
        echo "He was 35 years old <br>";
        echo "he really liked the name ahmet<br>";
        echo "But didn't like being 35 <br>"

        $characterName = "john";//update
        $characterAge = 50;//update

        echo "there once was a men named $characterName <br>";
        echo "He was $characterAge years old <br>";
        $characterName = "Mike";
        echo "he really liked the name $characterName<br>";
        echo "But didn't like being $characterAge <br>";


        $phrase = "to be not to be";
        $age = 30;
        $gpa = 30.3;
        $isMale = false;
        //null;
        echo 4.5 ."<br>";
        echo $phrase;*/
    //Work with strings
    //echo "Giraffe Academy";
    //$phrase = "Giraffe Academy";
    //echo $phrase;
    //echo strtolower($phrase);
    //echo strtoupper($phrase);
    //echo strtoupper("dog");
    //echo strlen($phrase);
    //echo $phrase[3];
    //echo $phrase[0] = "B";
    //echo str_replace("Giraffe","Panda",$phrase);
    //echo substr($phrase, 8);
    //echo substr($phrase, 8 ,4);
    
    //Working with Numbers
    /*
        echo 5+9 ."<br>";
        echo 5.7*3 ."<br>";
        echo 10 % 3 ."<br>";
        echo 4 + 5 * 10 ."<br>";
        echo (4+5)*10 ."<br>";
        $num = 10;
        $num++;
        $num--;
        $num = $num+25;
        $num += 25;
        echo $num;

        echo abs(-100) ."<br>";
        echo pow(2,4) ."<br>";
        echo sqrt(144) ."<br>";
        echo min(2,10) ."<br>";
        echo max(2,10) ."<br>";
        echo round(3.6) ."<br>";
        echo ceil(3.6) ."<br>";
        echo floor(3.6) ."<br>";
        */

    //get user input
    
    ?>
    <!--
        <form action="index.php" method="get">
            Name: <input type="text" name="username" id="">
            <br>
            Age: <input type="number" name="age" id="">
            <input type="submit" name="" id="">
        </form>
        <br>
        Your name is: <?php //echo $_GET["username"]; ?>
        <br>
        Your Age is: <?php // echo $_GET["age"]; ?>
    -->
    <!--Building a Basic calclator-->
    <!-- <form action="index.php" method="get">
        <input type="number" name="num1" id="">
        <br>
        <input type="number" name="num2" id="">
        <br>
        <input type="submit" name="" id="">
        Answer: <?php
        //echo $_GET["num1"] + $_GET["num2"];
        ?>
    </form> -->
    <!-- <form action="index.php" method="get">
        Color: <input type="text" name="color" id="">
        Plural Noun: <input type="text" name="pluralNoun" id="">
        Celebrity: <input type="text" name="celebrity" id="">
        <input type="submit" name="" id="">
    </form>
    <br><br>
    <?php
    /*$color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>";*/
    ?> -->

    <!-- URL Parameter -->
    <!-- <form action="index.php" method="get">
        Name: <input type="text" name="name" id="">
        <input type="submit" name="" id="">
    </form>
    <br><br>
    <?php
    //echo $_GET["name"];
    ?> -->

    <!-- Post vs Get -->
    <!-- <form action="index.php" method="get">
        Name: <input type="password" name="pass" id="">
        <input type="submit" name="" id="">
    </form>

    <?php
    //echo $_GET["pass"];
    ?> -->
    <!-- <form action="index.php" method="post">
        Name: <input type="password" name="pass" id="">
        <input type="submit" name="" id="">
    </form>

    <?php
    //echo $_POST["pass"];
    ?> -->

    <!-- Arrays -->

    <?php /*
$friends = array("lirik","munir","dinni_by",1);
    //             0       1         2     3
$friends[1] ="400";
echo count($friends);
echo $friends[1];*/
    ?>
    <!-- <form action="index.php" method="post">
        apples: <input type="checkbox" name="fruits" value="apples" id="">
        <br>
        Oranges: <input type="checkbox" name="fruits" value="oranges" id="">
        <br>
        Pears: <input type="checkbox" name="fruits" value="pears" id="">
        <br>
        <input type="submit" name="" id="">
    </form>
    <?php
    //$fruits = $_POST["fruits"];
    //echo $fruits;
    ?> -->

    <!-- Associative Arreys -->
    <!-- <form action="index.php" method="post">
        <input type="text" name="student" id="">
        <input type="submit" name="" id="">
    </form>

    <?php
    //$grades = array("jim"=>"A+","Pam"=>"A+","Lirik"=>"B+","oscar"=>"C-");
    //echo $grades[$_POST["student"]];
    ?> -->

    <!--functions-->
    <?php
    /*  function sayHi(){
         echo "Hello User";
     }
     sayHi();*/
    /* 
            function sayHi($name){
                echo "hello $name";
            }
            sayHi("liriikk");
            sayHi("Munir");
            */


    ?>

    <!--Return statmens-->
    <?php
    /*function cube($num){
        echo "hello";
        return $num * $num *$num; 
        echo "hello";  
    }

    $cubeResult = cube(4);
    echo $cubeResult;*/
    ?>
    <!-- if statment -->

    <?php
    /* $isMale = true;
     $isTall = false;//false
     if($isMale && $isTall){
                 // or 
         echo "you are a tall male";
     }
     else if($isMale && !$isTall){
         echo "you are a short male";
     }
     elseif(!$isMale && $isTall){
         echo "you are not male but you'r tall";
     }

     else{
         echo "you are not male";
     }*/

    ?>

    <?php
    //echo max(3,6);
    /*function getMax($num1,$num2){
        if($num1>$num2){
            return $num1;
        }
        else{
            return $num2;
        }
    }
    echo getMax(2,1);*/

    /* function getMax($num1,$num2,$num3){
         if($num1>= $num2 && $num1>=$num3){
             return $num1;
         }
         elseif($num2>=$num1 && $num2>= $num3){
             return $num2;
         }
         else{
             return $num3;
         }
     }
     echo getMax(20,6,5);*/
    ?>

    <!-- Building a Better Calculator -->
    <!-- <form action="index.php" method="post">
   First Num: <input type="number" step="0.001" name="num1"> <br>
   OP: <input type="text" name="op"> <br>
   Second Num: <input type="number" name="num2"> <br>
    <input type="submit">



    </form> -->
    <?php
    // $num1= $_POST["num1"];
// $num2= $_POST["num2"];
// $op = $_POST["op"];
    
    // if($op == "+"){
//     echo $num1 +$num2;
// } 
// elseif($op=="-"){
//     echo $num1-$num2;
// }
// elseif($op=="/"){
//     echo $num1/$num2;
// }
// elseif($op=="*"){
//     echo $num1 * $num2;
// }
// else{
//     echo"invalid operator";
// }
    ?>

    <!-- <form action="index.php" method="post">
        what was your grade?
        <input type="text" name="grade" id="">
        <input type="submit" name="" id="">
    </form> -->

    <?php/*
        $grade = $_POST["grade"];

        switch($grade){
            case "A":
                echo "you did amazing!";
                break;
            case "B":
                echo "you did pretty good";
                break;
            case "C":
                echo "you did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAIL!";
                break;
            default:
            echo "Invalid Grade";

        }*/
    ?>
    <!-- While loops -->

    <?php
        /*$index = 1;
        while($index <= 5){
            echo "$index <br>";
            //$index++;
        }*/
        /*
        $index = 6;
        do{
            echo "$index <br>";
            $index++;
        }while($index <= 5);  */
    ?>

    <!-- for Loops -->
    <?php
        /*for($i = 1; $i <= 5;$i++){
            echo "$i <br>";
        }*/
        /*
        $luckyNumbers = array(11,23,1,2,7,6,5);
        
        for($i =0;$i <= count($luckyNumbers);$i++){
            echo "$luckyNumbers[$i] <br>";
        }*/
    ?>

    <!-- coments -->
<?php
    //dgdgffdg
    /**/
?>

<!-- <?php
    //include "header.html";
?>
<p>hello world</p>
<?php
//include "footer.html";
?> -->

<!-- iclude php -->
    <?php
        // $title = "My First Post";
        // $author ="Mike";
        // $wordCount = 400;

        // include "article-header.php";
    ?>

    <?php
        // include "useful-tools.php";
        // sayHi("mike");
        // echo "<br>";
        // echo $feetInMile;
    ?>

    <?php
         //Constructors AND classes
        //  class Book{
        //      var $title;
        //      var $author;
        //      var $pages;
        //      /*function __construct($name){
        //         echo $name;
        //         //echo "New Book Created <br>";
        //      }*/

        //      function __construct($aTitle,$aAuthor,$aPages){
        //         $this->title = $aTitle;
        //         $this->author = $aAuthor;
        //         $this->pages = $aPages;
        //      }
        //  }
        // $book1 = new Book("Harry Pother","JK Rowling",440);
        // echo $book1->title;

        //  $book1 = new Book("JK");
        //  $book1->title = "<br>Harry Pother";
        //  $book1->author = "JK Rowling";
        //  $book1->pages = 440;

        //  echo $book1->title ."<br>";
        //  echo $book1->author ."<br>"; 
        //  echo $book1->pages ."<br>";

        //  $book2 = new Book("Tolkein");

        //  $book2->title ="<br>Lord Of the Rings";
        //  $book2->author ="Tolkien";
        //  $book2->pages =4000;

        //  echo $book2->title ."<br>";
        //  echo $book2->author ."<br>"; 
        //  echo $book2->pages ."<br>";
       
    ?>
        <!-- object function -->
    <?php
        // class Student{
        //     var $name;
        //     var $major;
        //     var $gpa;

        //     function __construct($name,$major,$gpa){
        //         $this->name = $name;
        //         $this->major = $major;
        //         $this->gpa = $gpa;
        //     }

        //     function hasHonors(){
        //         if($this->gpa >= 3.5){
        //             return "true";
        //         }
        //         else{
        //             return "false";
        //         }
        //     }
        // }
        // $student1 = new Student("Jim","Business",2.8);
        // $student2 = new Student("Pam","Art",3.6);

        // echo $student1->hasHonors();
        // echo "<br>";
        // echo $student2->hasHonors();
    ?>

    <!-- Getters & Setters -->
    <!-- <?php
        class Movie{
            public $title;
            //public $rating;

            private $rating;

            function __construct($title,$rating){
                $this->title = $title;
                $this->rating = $rating;
            }

            function getRating(){
                return $this->rating;
            }


            function setRating($rating){
                //$this->rating = $rating;
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR" ){
                    $this->rating =$rating;
                }
                else{
                    $this->rating ="NR";
                }
            }
        }

        $avengers = new Movie("Avengers","P-14");
                            //G, PG, PG-13, R, NR
        //$avengers->rating = "DOG";
        //echo $avengers->rating;
        $avengers->setRating("R");
        echo $avengers->getRating();
    ?> -->

    <?php
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribp <br>";
            }
        }

        $chef = new chef();
        $chef->makeChicken();
        //$chef->makePasta();
        $chef->makeSpecialDish();
    
        class ItalianChef extends Chef{
            function makePasta(){
                echo "The chef makes pasta <br>";
            }

            function makeSpecialDish(){
                echo "The chef makes chicken parm";
            }
        }

        $ItalianChef = new ItalianChef();
        //$ItalianChef->makeChicken();
        $ItalianChef->makePasta();
        $ItalianChef->makeSpecialDish();
    ?>
</body>

</html>