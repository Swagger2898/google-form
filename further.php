<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
  * {
      margin:0;
      padding:0;
      box-sizing: border-box;
      
  } 
.container{
  max-width:80%;
  background-color: rgb(226, 35, 35);
  margin: auto;
  padding : 23px;

}
</style>

   
<body>
   <div class ="container">
     <h1> Lets learn about PHP</h1>
     <p> Your party status is here</p>

       
       <?php
       $age=34;
       if($age>18){
         echo "you can go to the party";
       }
       else{
           echo "you cannot go to party";
           
       }
       
       $languages = array("python","C++","PHP","nodejs");
       echo "<br>";
       echo $languages[1];
       echo "<br>";
       echo count($languages);
       // loops
       $a=0;
       while ($a <= 10) {
         echo "<br>the value of a is:";
         echo $a;
         $a++;
       }
       $a=0;
       do  {
         echo "<br>the value of a from do is:";
         echo $a;
         $a++;
       }
       while ($a <= 10);
       echo "<br>";
      function print4(){
        echo "Four";
      }
      print4();
       ?>
       </body>
</html>