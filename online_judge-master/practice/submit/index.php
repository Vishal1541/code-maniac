<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$uploaded = 0;
if(isset($_COOKIE['user'])){
    $user = $_COOKIE['user'];
}else header("location: ../index.php");
if(!is_dir("../uploads/". $user)){
    mkdir("../uploads/". $user);
}

function upload_file(){
    global $uploaded, $user;
    $target_dir = "../uploads/".$user."/";
    $target_file = $target_dir . basename($_FILES["code_file"]["name"]);
    $uploaded = 1;
    $fileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if ($_FILES["code_file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploaded = 0;
    }

    if($fileType != "cpp" && $fileType != "c" && $fileType != "java") {
        echo "Not a valid file.";
        $uploaded = 0;
    }

    if ($uploaded == 1) {
        if (move_uploaded_file($_FILES["code_file"]["tmp_name"], $target_file));
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    return $target_file;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        global $uploaded;
        $uploaded = 0;
        $lang = "";
        $flag = "";
        $compiler = "";
        $command= "";
        $toCompile = "";
        $custom_input = "";
        if(isset($_POST['code_lang'])){
            $lang = $_POST['code_lang'];
        }else die("No language.");
        if(isset($_FILES['code_file']) && !empty($_FILES['code_file']['name'])){
            if(isset($_POST['code_text']) && $_POST['code_text'] != ''){
                die("you can submit either a file or text format."); 
            }
            else {
                $toCompile = upload_file();
            }
        }else if(isset($_POST['code_text'])){
            $code = $_POST['code_text'];
            if($lang == "c++11"){
                $newFile = fopen("../uploads/".$user . "/new.cpp", "w+");
                $toCompile = "../uploads/".$user . "/new.cpp";
            }else if($lang == "c++14"){
                $newFile = fopen("../uploads/".$user . "/new.cpp", "w+");
                $toCompile = "../uploads/".$user . "/new.cpp";
            }else if($lang == "c"){
                $newFile = fopen("../uploads/".$user . "/new.c", "w+");
                $toCompile = "../uploads/".$user . "/new.c";
            }
            if(fwrite($newFile, $code)){
                $uploaded = 1;
            }
        }else die("No code submitted.");
        if(isset($_POST['custom_input'])){
            $inputFile = fopen("../uploads/$user/inp.txt", "w+");
            if(fwrite($inputFile, $_POST['custom_input'])){
                $custom_input = " < ../uploads/$user/inp.txt";    
            }else die("error uploading custom input.");
        }
        if($uploaded == 1){
            if($lang == "c++11"){
                $flag = "-lm -std=c++11";
                $compiler = "g++";
            }else if($lang == "c++14"){
                $flag = "-lm -std=c++14";
                $compiler = "g++";
            }else if($lang == "c"){
                $flag = "-lm";
                $compiler = "gcc";
            }
            
            $command = $compiler. " " . $flag ." ". $toCompile ." -o ../uploads/$user/new 2>&1";
            $output = []; $outFile = [];
            exec($command, $output);
            echo "<br>";
            if(empty($output)){
                exec("../uploads/$user/new $custom_input 2>&1", $output);
            }
            foreach($output as $arr => $value) echo $value . "<br>";
            
        }
}
?>