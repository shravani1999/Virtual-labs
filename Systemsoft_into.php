<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
  if(!isset($_SESSION['username']))
  {
    header("Location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/questions.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title></title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 
   <a class="item">
    About Us
  </a>
    <?php
    if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"login.php\">Login</a><a class=\"item\" href=\"register.php\">Register</a>";
    else 
    { 
      echo "<a class=\"item\">"; 
      echo $_SESSION['username'];
      echo "</a><a class=\"item\" href=\"logoutprocess.php\">Logout</a>";
    }
    ?>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Introduction to Machine Architecture and Assemblers
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Theory
      </a>
      <a class="item" id="list">
        Video
      </a>
      <a class="item" id="faq">
        Quiz
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">
      Introduction
      <br> <br>

      The Software is set of instructions or programs written to carry out certain task on
digital computers. It is classified into system software and application software. System
software consists of a variety of programs that support the operation of a computer.
Application software focuses on an application or problem to be solved. System software
consists of a variety of programs that support the operation of a computer.
 Examples for system software are Operating system, compiler, assembler, macro
processor, loader or linker, debugger, text editor, database management systems (some of
them) and, software engineering tools. These software’s make it possible for the user to focus
on an application or other problem to be solved, without needing to know the details of how
the machine works internally
      <br> <br> <br>
      The Simplified Instructional Computer (SIC)
      <br> <br>
      Simplified Instructional Computer (SIC) is a hypothetical computer that includes the
hardware features most often found on real machines. There are two versions of SIC, they
are, standard model (SIC), and, extension version (SIC/XE) (extra equipment or extra
expensive).
<br>
<br> <br>
SIC Machine Architecture:
<br> <br>
We discuss here the SIC machine architecture with respect to its Memory and
Registers, Data Formats, Instruction Formats, Addressing Modes, Instruction Set, Input and
Output
<br> <br>
Memory: <br>
There are 215 bytes in the computer memory, that is 32,768 bytes. It uses Little
Endian format to store the numbers, 3 consecutive bytes form a word , each location in
memory contains 8-bit bytes.
<br> <br>
Registers: <br>
There are five registers, each 24 bits in length. Their mnemonic, number and use are
given in the following table.
<br> <br>
 
 <table>
 <tr>
 <td>Mnemonic</td>
 <td>Number</td>
 <td>Use</td>
</tr>

 <tr>
 <td> A</td>
 <td> 0</td>
 <td> Accumulator; used for arithmetic operations</td>
</tr>


<tr>
 <td> X</td>
 <td> 1</td>
 <td> Index; register used for addressing
</td>
</tr>

<tr>
 <td> L</td>
 <td> 2</td>
 <td> Linkage; register JSUB
</td>
</tr>

<tr>
 <td> PC</td>
 <td> 8</td>
 <td> Program counter
</td>
</tr>

<tr>
 <td> SW</td>
 <td> 9</td>
 <td> Status word, including CC
</td>
</tr>

 </table>
<br> <br> 
Data Formats:
Integers are stored as 24-bit binary numbers. 2’s complement representation is used
for negative values, characters are stored using their 8-bit ASCII codes.No floating-point
hardware on the standard version of SIC.
<br> <br>
Instruction Formats:
Opcode(8) x Address (15)
All machine instructions on the standard version of SIC have the 24-bit format as
shown above 
<br> <br> 
Instruction Formats:
Opcode(8) x Address (15)
All machine instructions on the standard version of SIC have the 24-bit format as
shown above 
<br> <br>
Addressing Modes: <br>
<br>
<table>
 <tr>
 <td>Mode</td>
 <td>Indication</td>
 <td>Target address calculation</td>
</tr>

 <tr>
 <td> Direct</td>
 <td> x = 0</td>
 <td> TA = address</td>
</tr>


<tr>
 <td> Indexed</td>
 <td> x = 1</td>
 <td> TA = address + (x)
</td>
</tr>





 </table>


</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            SIC/XE Machine Architecture
            <br> <br>
            Memory: <br> 
Maximum memory available on a SIC/XE system is 1 Megabyte (220 bytes). <br> <br>
 Registers: <br>
Additional B, S, T, and F registers are provided by SIC/XE, in addition to the
registers of SIC. <br> <br>

<table>
 <tr>
 <td>Mnemonic</td>
 <td>Number</td>
 <td>Use</td>
</tr>

 <tr>
 <td> B</td>
 <td> 3</td>
 <td> Base register</td>
</tr>


<tr>
 <td> S</td>
 <td> 4</td>
 <td>General working register
</td>
</tr>

<tr>
 <td> T</td>
 <td> 5</td>
 <td> General working register
</td>
</tr>

<tr>
 <td> F</td>
 <td> 6</td>
 <td> Floating-point accumulator (48 bits)

</td>
</tr>

 </table>
<br> <br> <br>

Instruction Formats:
<br> <br>
The new set of instruction formats fro SIC/XE machine architecture are as follows.
<br> <br>
 Format 1 (1 byte): contains only operation code (straight from table). 
 <br> <br>
 <img src="images/f1.png" alt="">
 <br> <br> <br>
 Format 2 (2 bytes): first eight bits for operation code, next four for register 1 and
following four for register 2. The numbers for the registers go according to the
numbers indicated at the registers section (ie, register T is replaced by hex 5, F is
replaced by hex 6).
<br> <br>
<img src="images/f2.png" alt="" width="400px">
<br><br><br>

Format 3 (3 bytes): First 6 bits contain operation code, next 6 bits contain flags, last
12 bits contain displacement for the address of the operand. Operation code uses only
6 bits, thus the second hex digit will be affected by the values of the first two flags (n
and i). The flags, in order, are: n, i, x, b, p, and e. Its functionality is explained in the
next section. The last flag e indicates the instruction format (0 for 3 and 1 for 4).
<br> <br>
<img src="images/f3.png" alt="" width="600px">
<br><br> <br>
Format 4 (4 bytes): same as format 3 with an extra 2 hex digits (8 bits) for addresses
that require more than 12 bits to be represented. 
<br> <br>
<img src="images/f4.png" alt="" width="600px">
 <br> <br> <br>
 Addressing modes & Flag Bits
 <br> <br>
Five possible addressing modes plus the combinations are as follows.
<br> <br> 
Direct (x, b, and p all set to 0): operand address goes as it is. n and i are both set to
the same value, either 0 or 1. While in general that value is 1, if set to 0 for format 3
we can assume that the rest of the flags (x, b, p, and e) are used as a part of the
address of the operand, to make the format compatible to the SIC format.
<br> <br>
 Relative (either b or p equal to 1 and the other one to 0): the address of the operand
should be added to the current value stored at the B register (if b = 1) or to the value
stored at the PC register (if p = 1)
<br> <br>
Immediate(i = 1, n = 0): The operand value is already enclosed on the instruction
(ie. lies on the last 12/20 bits of the instruction)
Indirect(i = 0, n = 1): The operand value points to an address that holds the address
for the operand value.
<br> <br>
Indexed (x = 1): value to be added to the value stored at the register x to obtain real
address of the operand. This can be combined with any of the previous modes except
immediate.
<br> <br> <br>
The various flag bits used in the above formats have the following meanings
<br> <br>
 e - > e = 0 means format 3, e = 1 means format 4
 <br>
 Bits x,b,p : Used to calculate the target address using relative, direct, and indexed addressing modes.
 <br> <br> <br>

 Bits i and n: Says, how to use the target address. <br>
b and p - both set to 0, disp field from format 3 instruction is taken to be the target address. <br>
For a format 4 bits b and p are normally set to 0, 20 bit address is the target address. <br>
x - x is set to 1, X register value is added for target address calculation. <br>
i=1, n=0 Immediate addressing, TA: TA is used as the operand value, no memory reference. <br>
i=0, n=1 Indirect addressing, ((TA)): The word at the TA is fetched. Value of TA is taken as
the address of the operand value. <br>
i=0, n=0 or i=1, n=1 Simple addressing, (TA):TA is taken as the address of the operand value
Two new relative addressing modes are available for use with instructions assembled using
format 3. 
 
<br> <br> <br>
Instruction Set: <br>
SIC/XE provides all of the instructions that are available on the standard version. In
addition we have, Instructions to load and store the new registers LDB, STB, etc, Floatingpoint arithmetic operations, ADDF, SUBF, MULF, DIVF, Register move instruction : RMO,
Register-to-register arithmetic operations, ADDR, SUBR, MULR, DIVR and, Supervisor call
instruction : SVC.
 <br> <br> <br>
 Input and Output: <br>
There are I/O channels that can be used to perform input and output while the CPU is
executing other instructions. Allows overlap of computing and I/O, resulting in more
efficient system operation. The instructions SIO, TIO, and HIO are used to start, test and halt
the operation of I/O channels.
 







            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/P2-ZO0ty2Hk">
      </iframe>
    
      
      
          </div>
      
      <div id="faqs" style="display: none;">
      
      <form name="quiz" id="quiz" action="quizProcess.php" method="POST">
      <?php
            $servername = "localhost:3306";
            $db_username = "root";
            $password = "";
            $dbname = "virtuallabsdsce";

            // Create connection
            $conn = new mysqli($servername, $db_username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $usn=$_SESSION["usn"];
            $query = "select * from user_scores where usn='$usn' and topic_name='Ssi'";
            $res=$conn->query($query);
            
            if ($res->num_rows == 1)
            { 
              $row = $res->fetch_assoc();
              echo "Quiz already attemped!<br><br>Your score: ".$row["quiz_score"];
            }
            else{
            $a= [1,2,3,4,5];
            $opt = ['a','b','c','d']; 
            $questionno = 1;
            shuffle($a);
            foreach($a as $i)
            {
              $query = "select question from questions_SysSoft where question_no like \"Ssi$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_SysSoft where option_no like \"Ssi$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"Ssi".$i."\" value=\"Ssi".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"Ssi".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"SysSoft.Ssi.5\">";
        echo "<div id=\"result\"><input type=\"submit\" id=\"quizSub\" class=\"ui left floated button\" value=\"Submit\"></div>";
        }
        $conn->close();
        ?>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
