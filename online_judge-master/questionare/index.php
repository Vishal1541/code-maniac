<?php
if(isset($_GET['user_name'])){
    setcookie("user", $_GET['user_name'], time() + (86400 * 30));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Online Judge</title>
        <meta name="description" content="Online Judge">
    </head>
    <body> 
        
        <?php
         if(isset($_COOKIE['user'])){
            $user = $_COOKIE['user'];
            echo $user."<br>";
        ?>
        
        <h1>Submit your code here.</h1>
        
        <form action="submit/" method="post" enctype="multipart/form-data" name="code_form">
            <textarea placeholder="Enter your code here" id="code_text" name="code_text"></textarea>
            <br><br>OR..<br><br>
            <input type="file" name="code_file" id="code_file"><br><br>
            <input type="checkbox" id="input_check"><label for="input_check">Custom Input</label><br><br>
            <textarea id="custom_input" name="custom_input" placeholder="Enter Custom Input" disabled></textarea><br><br>
            <select id="code_lang" name="code_lang">
                <option value="0">Select Language: </option>
                <option value="c++11">C++11 (gcc 4.9.2)     </option>
                <option value="c">C (gcc 4.9.2)</option>
                <option value="c++14">C++14 (g++ 4.9.2)</option>
                <option value="java">JAVA</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        <?php
         }else {
        ?>
        <h2>Enter Name:</h2><br>
        <form action="#" method="get" name="set_user">
            <input type="text" name="user_name" id="user_name"/>
        </form>
        <?php
         }
        ?>
        
    </body>
    <script src="inc/main.js"></script>
</html>