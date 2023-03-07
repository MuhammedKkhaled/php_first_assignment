<?php

    //  string declartion 

    $string =  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam alias non eius unde. 
    Consequatur excepturi impedit beatae. 
    Nobis porro et perspiciatis impedit sint est nemo, 
    mollitia molestias quo, eos commodi.";

    //  typeing the string into p tag 
    echo "<p>${string}</p>";

    // get the length of the string 
    $str_Len = strlen($string); // strlen -> return the number of characters in string 

    // print string length in h3 tag .
    echo "<h3>Number of characters in previous string is ${str_Len}</h3>";

    // replace the string with a new one 
    
    $tmp_str= "Mohamed Elsaedey"; 
    
    $nw_Str =  str_replace($string , $tmp_str , $string);

    echo "<h1>${nw_Str}</h1>";

    //  make the first character of all words uppercase 

    $uc_Str = ucwords($string) ; // ucwords -> Uppercase the first character of each word in a string

    echo "the string after function look like that <br>".$uc_Str ;

    
    echo "<hr style=\"height:2px;border-width:0;color:gray;background-color:gray\">" ;
    # number 2 

    $name =  "mohamed khaled";

    // reverse the string 
    $str_rev =  strrev($name);
    
    echo "<h5>${str_rev}</h5>"; 

    //  compare between two strings 
    
    // declare variable 
    $new_name = "Mohamed Khaled"; 

    $result = strcmp($str_rev,$new_name);
    
    // print the result variable 
    // echo $result ;

    /// strtoupper built in function -> transform all letters in the string into uppercase

    echo "String with all uppercase letters " . strtoupper($name) . "<br>";

    /// strtolower built in function -> transfrom all letters in the string into lowercase 

    echo "String With all lowercase letters " . strtolower($name) ."<br>";

    //  make string's first char uppercase 

    echo "this is the string using built in function to transform the first char into uppercase ".ucfirst($name);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first assignment </title>
</head>
<body>
    <!-- What is the difference between single and double quotes in PHP? -->
    <h1>What is the difference between single and double quotes in PHP?</h1>
<ul>
  <li>Double Quotes 
    <ul>
        <li> using variables </li>
        <li> escaping sequences </li>
        <li> string with complex curly braces </li>
    </ul>
  </li>
  <li>Single Quotes
    <ul>
        <li>easy way to define a static string</li>
        <li>No escap sequences </li>
        <li>the variable’s name does not expands</li>
    </ul>
  </li>
</ul>

</body>
</html>

<?php 

$name =  "Morad";

// first using double qouates and escaping chracters 
echo "Hello \"my name is ${name}\" \n<br>I love programming \ Back-End is Easy \tphp is awesome";

echo "<br>";
echo "<br>";
echo "<br>";
// using here doc
echo nl2br(<<<"hele"
hello "my name is ${name}" 
I love programming \ Back-End is easy  \t php is awesome 
hele);

?>