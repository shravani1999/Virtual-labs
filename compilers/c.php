<?php
    
    putenv("PATH=C:\MinGW\bin");
	$CC="gcc";
	//shell_exec('cp /lib/* -r /app/.apt/lib/'); 
	$out="a".$S_ID;
	$pname=$_POST["prog"];
	$code=$_POST["editor"];
	$input=$_POST["input"];
	$filename_code="main".$S_ID.".c";
	$filename_in="input".$S_ID.".txt";
	$filename_error="error".$S_ID.".txt";
	$executable=$out;
	$command=$CC." -lm ".$filename_code." -o ".$out;	
	$command_error=$command." 2>".$filename_error;
	//$filename_out="./outputs/stackout.txt";
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
		$filename_in="inputs\\run".$pname."in.txt";
		//exec("cacls  outputs\\run".$pname."out.txt /g everyone:f");
		$filename_out=fopen("outputs\\run".$pname."out.txt", "r");
		$fout=fread($filename_out,filesize("outputs\\run".$pname."out.txt"));
		fclose($filename_out);
		}
	}
	else
	{
	$filename_in="inputs\\".$pname."in.txt";
	$filename_out=fopen("outputs\\".$pname."out.txt", "r");
	$fout=fread($filename_out,filesize("outputs\\".$pname."out.txt"));
	fclose($filename_out);
	}
	
	//exec("cacls  $filename_in /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	//exec("chmod a+x $executable");
	if(trim($error)=="")
	{
		if($runcode)
		{
			//exec("chmod a+x $executable"); 
			$output=shell_exec($executable.' < '.$filename_in);
			if(trim($input)!=""){}
			else if($output==$fout) $output="Sample case passed.";
			else $output="Sample case failed.";
		}
		else 
		{
			//exec("chmod a+x $executable"); 
			$output=shell_exec($executable.' < '.$filename_in);
			if($output==$fout) $output="Test case passed.";
			else $output="Test case failed.";
		}
		echo "<label class=\"writeCode\">Output</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		
        //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		echo "<pre>$error</pre>";
		if(trim($input)=="" && $runcode)
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec($executable);
		}
		else
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec($executable.' < '.$filename_in);
		}
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		// echo "$output";
				//echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
		
	}
	else
	{
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$error</pre>";
	}
	exec("del /f $filename_code");
	exec("del /f *".$S_ID."*");
	exec("del /f $filename_error");
	exec("del /f $executable");
?>
