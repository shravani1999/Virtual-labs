<?php

    putenv("PATH=/app/.jdk/bin");
    exec("unset JAVA_TOOL_OPTIONS");
	$CC="javac";
	$out="java Main";
	$pname=$_POST["prog"];
	$code=$_POST["editor"];
	$input=$_POST["input"];
	$filename_code="Main.java";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$runtime_file="runtime.txt";
	$executable="*.class";
	$command=$CC." ".$filename_code;	
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;

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
	exec("unset JAVA_TOOL_OPTIONS");
	shell_exec("unset JAVA_TOOL_OPTIONS && "$command_error);
	$error=file_get_contents($filename_error);
	exec("chmod a+x *.class");
	if(trim($error)=="")
	{
		if($runcode)
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec($out.' < '.$filename_in);
			if(trim($input)!=""){}
			else if($output==$fout) $output="Sample case passed.";
			else $output="Sample case failed.";
		}
		else 
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec($out.' < '.$filename_in);
			if($output==$fout) $output="Test case passed.";
			else $output="Test case failed.";
		}
		//echo "<pre>$runtime_error</pre>";
		//echo "<pre>$output</pre>";
		echo "<label class=\"writeCode\">Output</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		//echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$output</pre>";
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$output $error</pre>";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$error</pre>";
	}
	exec("rm $filename_code");
	exec("rm $filename_in");
	exec("rm $filename_error");
	exec("rm *put.txt");
	exec("rm $executable");
?>
