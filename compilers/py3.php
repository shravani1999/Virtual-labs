<?php
	$CC="python3";
	//$out="./a.out";
	$code=$_POST["editor"];
	$input=$_POST["input"];
	$filename_code="main.py";
	$filename_in="input.txt";
	$filename_error="error.txt";
	//$executable="a.out";
	$command=$CC." ".$filename_code;
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");

	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	if($runcode)
	{
		if(trim($input)!="")
		{
		$file_in=fopen($filename_in,"w+");
		fwrite($file_in,$input);
		fclose($file_in);
		}
		else
		{
		$filename_in="./inputs/run".$pname."in.txt";
		$filename_out=fopen("./outputs/run".$pname."out.txt", "r");
		$fout=fread($filename_out,filesize("./outputs/".$pname."out.txt"));
		fclose($filename_out);
		}
	}
	else
	{
	$filename_in="./inputs/".$pname."in.txt";
	$filename_out=fopen("./outputs/".$pname."out.txt", "r");
	$fout=fread($filename_out,filesize("./outputs/".$pname."out.txt"));
	fclose($filename_out);
	}
	//exec("chmod 777 $executable");
	exec("chmod 777 $filename_error");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{ 
		if($runcode)
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec($command.' < '.$filename_in);
			if(trim($input)!=""){}
			else if($output==$fout) $output="Sample case passed.";
			else $output="Sample case failed.";
		}
		else 
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec($command.' < '.$filename_in);
			if($output==$fout) $output="Test case passed.";
			else $output="Test case failed.";
		}
		echo "<label class=\"writeCode\">Output</label><br><br><pre class=\"GrayBlock\">$output</pre>";
	}
	else
	{
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$error</pre>";
	}
	exec("rm $filename_code");
	exec("rm *.txt");
?>
