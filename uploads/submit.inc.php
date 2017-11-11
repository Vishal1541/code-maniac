<?php
	if(isset($_POST["b_code_submit"])){
		$id = $_POST["probId"];
		$id = $id."\n";
		file_put_contents('probId', $id);
		$id = $_POST["probId"];
		$code = $_POST["code_editor"];
		$newFile = fopen("code.cpp","w");
		fwrite($newFile,$code);

		// $command = "sh checker.sh";
		$command = "g++ -std=c++14 code.cpp -o code";
        $run = "./code";
        // $output = []; $outFile = [];

        exec($command);
        exec($run);

        // exec("g++ -std=c++14 code.cpp -o code");
        // exec("if [ $? -eq 0 ]");
        // exec("	then");
        // exec("		echo \"Accepted\" > verdict.txt");
        // exec("else");
        // exec("		echo \"Wrong Answer\" > verdict.txt");
        // exec("fi");

        //$command2 = "sh checker.sh";
        // exec(");
        // exec($command2);
        exec("diff user_op_".$id." op_".$id."; if [ $? -eq 0 ]; then echo 'Accepted' > verdict.txt; else echo 'Wrong Answer' > verdict.txt; fi");
        // exec("echo ".$id." > verdict.txt");
        // $command2 = "g++ -std=c++14 verdict.cpp -o ver";
        // $run2 = "./ver";
        // exec($command2);
        // exec($run2);
		header("Location: ../verdict.php");
		exit();
	}
?>