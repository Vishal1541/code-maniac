<?php
	if(isset($_POST["b_code_submit"])){
		$id = $_POST["probId"];
		$code = $_POST["code_editor"];
		$newFile = fopen("code.cpp","w");
		fwrite($newFile,$code);
		$command = "g++ -std=c++14 code.cpp -o code";
        $run = "./code";
        $output = []; $outFile = [];
        exec($command);
        exec($run);
        file_put_contents('probId', $id);
        $command2 = "g++ verdict.cpp -o ver";
        $run2 = "./ver";
        exec($command2);
        exec($run2);
	}
?>