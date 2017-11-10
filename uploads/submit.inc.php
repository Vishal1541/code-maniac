<?php
	if(isset($_POST["b_code_submit"])){
		$id = $_POST["probId"];
		file_put_contents('probId', $id);
		$code = $_POST["code_editor"];
		$newFile = fopen("code.cpp","w");
		fwrite($newFile,$code);

		$command = "sh checker.sh";

		// $command = "g++ -std=c++14 code.cpp -o code";
        // $run = "./code";
        // $output = []; $outFile = [];

        exec($command);

        // exec("g++ -std=c++14 code.cpp -o code");
        // exec("./codediff user_op_".$id." op_".$id);
        // exec("if [ $? -eq 0 ]");
        // exec("	then");
        // exec("		echo \"Accepted\" > verdict.txt");
        // exec("else");
        // exec("		echo \"Wrong Answer\" > verdict.txt");
        // exec("fi");
        
		header("Location: ../verdict.php");
		exit();
        // exec($run);
        // $command2 = "g++ -std=c++14 verdict.cpp -o ver";
        // $run2 = "./ver";
        // exec($command2);
        // exec($run2);
	}
?>