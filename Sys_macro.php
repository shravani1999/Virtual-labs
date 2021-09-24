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
   Macro Processor
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
      A Macro represents a commonly used group of statements in the source programming
language. <br>
A macro instruction (macro) is a notational convenience for the programmer
o It allows the programmer to write shorthand version of a program (module
programming) <br>
The macro processor replaces each macro instruction with the corresponding group of
source language statements (expanding) <br>
o Normally, it performs no analysis of the text it handles. <br>
o It does not concern the meaning of the involved statements during macro
expansion. <br>
The design of a macro processor generally is machine independent! <br>
Two new assembler directives are used in macro definition <br>
o MACRO: identify the beginning of a macro definition <br>
o MEND: identify the end of a macro definition <br>
 Prototype for the macro <br>
o Each parameter begins with ‘&’ <br>
 name MACRO parameters <br>
: <br>
body <br>
: <br>
MEND <br>
o Body: the statements that will be generated as the expansion of the macro.
      <br> <br> <br>
      Macro Definition and Expansion: <br> <br>
Figure shows the MACRO expansion. The left block shows the MACRO definition
and the right block shows the expanded macro replacing the MACRO call with its block of
executable instruction. <br>
M1 is a macro with two parameters D1 and D2. The MACRO stores the contents of
register A in D1 and the contents of register B in D2. Later M1 is invoked with the
parameters DATA1 and DATA2, Second time with DATA4 and DATA3. Every call of
MACRO is expended with the executable statements.
<br> <br>
<img src="images/macro.jpg" alt=""> <br> <br>

The statement M1 DATA1, DATA2 is a macro invocation statements that gives the name of
the macro instruction being invoked and the arguments (M1 and M2) to be used in
expanding. A macro invocation is referred as a Macro Call or Invocation. 
<br> <br> <br>

Macro Expansion: <br><br>
The program with macros is supplied to the macro processor. Each macro invocation
statement will be expanded into the statement s that form the body of the macro, with the
arguments from the macro invocation substituted for the parameters in the macro prototype.
During the expansion, the macro definition statements are deleted since they are no longer
needed. <br> <br>
The arguments and the parameters are associated with one another according to their
positions. The first argument in the macro matches with the first parameter in the macro
prototype and so on. <br> <br>
After macro processing the expanded file can become the input for the Assembler.
The Macro Invocation statement is considered as comments and the statement generated
from expansion is treated exactly as though they had been written directly by the
programmer. <br> <br>
he difference between Macros and Subroutines is that the statement s from the body
of the Macro is expanded the number of times the macro invocation is encountered, whereas
the statement of the subroutine appears only once no matter how many times the subroutine
is called. Macro instructions will be written so that the body of the macro contains no labels. <br>
Problem of the label in the body of macro: <br>
o If the same macro is expanded multiple times at different places in the
program … <br>
o There will be duplicate labels, which will be treated as errors by the
assembler. <br>
 Solutions: <br>
o Do not use labels in the body of macro. <br>
o Explicitly use PC-relative addressing instead. <br>
Ex, in RDBUFF and WRBUFF macros, <br>
o JEQ *+11 <br>
o JLT *-14 <br>
It is inconvenient and error-prone. <br><br> <br>

<img src="expan.jpg" alt=""> <br> <br>

Macro Processor Algorithm and Data Structure: <br>
Design can be done as two-pass or a one-pass macro. In case of two-pass assembler. <br> <br>
Two-pass macro processor <br>
You may design a two-pass macro processor <br>
o Pass 1: <br>
 Process all macro definitions <br>
o Pass 2: <br>
 Expand all macro invocation statements <br>
 <br> <br>
 <img src="ma.jpg" alt="">
 <br> <br>
 A program that is to be run on SIC system could invoke MACROS whereas a
program to be run on SIC/XE can invoke MACROX. <br>
 However, defining MACROS or MACROX does not define RDBUFF and WRBUFF. <br>
 These definitions are processed only when an invocation of MACROS or MACROX
is expanded.
<br> <br> <br>
One-Pass Macro Processor: <br>
 A one-pass macro processor that alternate between macro definition and macro
expansion in a recursive way is able to handle recursive macro definition. <br> <br>
 Restriction <br>
o The definition of a macro must appear in the source program before any
statements that invoke that macro. <br> <br>
o This restriction does not create any real inconvenience. <br>
The design considered is for one-pass assembler. The data structures required are: <br> <br>
 DEFTAB (Definition Table) <br>
o Stores the macro definition including macro prototype and macro body <br>
o Comment lines are omitted. <br>
o References to the macro instruction parameters are converted to a positional <br>
notation for efficiency in substituting arguments. <br> <br>
 NAMTAB (Name Table) <br>
o Stores macro names <br>
o Serves as an index to DEFTAB <br>
 Pointers to the beginning and the end of the macro definition (DEFTAB)  

<br><br> 
ARGTAB (Argument Table) <br>
o Stores the arguments according to their positions in the argument list. <br>
o As the macro is expanded the arguments from the Argument table are 
substituted for the corresponding parameters in the macro body. <br>
o The figure below shows the different data structures described and their
relationship. <br> <br>
<br>
<img src="images/max.jpg" alt=""> <br> <br>






      Basic Loader Functions:
      <br> <br>
      A loader is a system program that performs the loading function. It brings object program
into memory and starts its execution. 
<br>
Translator may be assembler/complier, which generates the object program and later loaded
to the memory by the loader for execution. The translator is specifically an
assembler, which generates the object loaded, which becomes input to the loader.
     
<br>
<br>
Type of Loaders
The different types of loaders are, absolute loader, bootstrap loader, relocating loader
(relative loader), and, direct linking loader. The following sections discuss the functions and
design of all these types of loaders.
 <br> <br> <br>

 Design of Absolute Loader:
The operation of absolute loader is very simple. The object code is loaded to specified
locations in the memory. At the end the loader jumps to the specified address to begin
execution of the loaded program. 

<br> <br>

The advantage of absolute loader is simple and efficient. But the disadvantages are, the need
for programmer to specify the actual address, and, difficult to use subroutine libraries.
The algorithm for this type of loader is given here. The object program and, the object
program loaded into memory by the absolute loader are also shown. Each byte of
assembled code is given using its hexadecimal representation in character form. Easy to read
by human beings. Each byte of object code is stored as a single byte. Most machine store
object programs in a binary form, and we must be sure that our file and device conventions
do not cause some of the program bytes to be interpreted as control characters.
<br> <br>
Begin <br>
read Header record <br>
verify program name and length <br>
read first Text record <br>
while record type is <> ‘E’ do <br>
begin <br>
{if object code is in character form, convert into internal representation} <br>
move object code to specified location in memory <br>
read next object program record <br>
end <br>
jump to address specified in End record <br>
end <br>
<br> <br>

Loop
<br><br>
A=GETC (and convert it from the ASCII character <br>
 code to the value of the hexadecimal digit) <br>
save the value in the high-order 4 bits of S <br>
A=GETC <br>
combine the value to form one byte A (A+S) <br>
store the value (in A) to the address in register X <br>
X=X+1 <br>
End
It uses a subroutine GETC, which is
GETC A=read one character
 if A=0x04 then jump to 0x80
 if A less 48 then GETC
 A = A-48 (0x30)
 if A less 10 then return
 A = A-7
 return
<br> <br> <br>
Machine-Dependent Loader Features
<br> <br>
Absolute loader is simple and efficient, but the scheme has potential disadvantages One of
the most disadvantage is the programmer has to specify the actual starting address, from
where the program to be loaded. This does not create difficulty, if one program to run, but
not for several programs. Further it is difficult to use subroutine libraries efficiently.
This needs the design and implementation of a more complex loader. The loader must
provide program relocation and linking, as well as simple loading functions.

<br> <br> <br>
Relocation
<br> <br>
The concept of program relocation is, the execution of the object program using any part of
the available and sufficient memory. The object program is loaded into memory wherever
there is room for it. The actual starting address of the object program is not known until load
time. Relocation provides the efficient sharing of the machine with larger memory and when
several independent programs are to be run together. It also supports the use of subroutine
libraries efficiently. Loaders that allow for program relocation are called relocating loaders or
relative loaders. <br>  <br>
Methods for specifying relocation
Use of modification record and, use of relocation bit, are the methods available for
specifying relocation. In the case of modification record, a modification record M is used in
the object program to specify any relocation. In the case of use of relocation bit, each
instruction is associated with one relocation bit and, these relocation bits in a Text record is
gathered into bit masks.
Modification records are used in complex machines and is also called Relocation and
Linkage Directory (RLD) specification. The format of the modification record (M) is as
follows. The object program with relocation by Modification records is also shown here.
Modification record <br> <br>
col 1: M <br>
col 2-7: relocation address <br>
col 8-9: length (halfbyte) <br>
col 10: flag (+/-) <br>
col 11-17: segment name <br> <br>
The relocation bit method is used for simple machines. Relocation bit is 0: no <br>
modification is necessary, and is 1: modification is needed. This is specified in the columns
10-12 of text record (T), the format of text record, along with relocation bits is as follows. <br><br>
Text record: <br>
col 1: T <br>
col 2-7: starting address <br>
col 8-9: length (byte) <br>
col 10-12: relocation bits <br>
col 13-72: object code <br>
<br> <br>
Twelve-bit mask is used in each Text record (col:10-12 – relocation bits), since each
text record contains less than 12 words, unused words are set to 0, and, any value that is to be modified during relocation must coincide with one of these 3-byte segments. For absolute
loader, there are no relocation bits column 10-69 contains object code. The object program
with relocation by bit mask is as shown below. Observe FFC - means all ten words are to be
modified and, E00 - means first three records are to be modified. <br> <br>
HCOPY 000000 00107A <br>
T0000001EFFC140033481039000036280030300015…3C0003  ... <br>
T00001E15E000C00364810610800334C0000…000003000000 <br>
T0010391EFFC040030000030…30103FD8105D280030... <br>
T0010570A8001000364C0000F1001000 <br>
T00106119FE0040030E01079…508039DC10792C0036... <br>
E000000 <br> <br> <br>

Program Linking <br> <br>
The Goal of program linking is to resolve the problems with external references <br>
(EXTREF) and external definitions (EXTDEF) from different control sections. <br>
EXTDEF (external definition) - The EXTDEF statement in a control section
names symbols, called external symbols, that are defined in this (present) control section and
may be used by other sections. <br> <br>
ex: EXTDEF BUFFER, BUFFEND, LENGTH
 EXTDEF LISTA, ENDA
EXTREF (external reference) - The EXTREF statement names symbols used in
this (present) control section and are defined elsewhere. <br>
ex: EXTREF RDREC, WRREC
 EXTREF LISTB, ENDB, LISTC, ENDC
<br> <br> <br>

Algorithm
<br> <br>
<img src="images/alg.jpg" alt="">
<br> <br>
<img src="images/alg1.jpg" alt="">
<br> <br>






</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Machine-independent Macro-Processor Features.
             <br> <br>
The design of macro processor doesn’t depend on the architecture of the machine. We will be
studying some extended feature for this macro processor. <br> These features are: <br>
 Concatenation of Macro Parameters <br>
 Generation of unique labels <br>
 Conditional Macro Expansion <br>
 Keyword Macro Parameters <br>  <br> <br>
 Concatenation of unique labels: <br> <br>
 Most macro processor allows parameters to be concatenated with other character
strings. Suppose that a program contains a series of variables named by the symbols
XA1, XA2, XA3,…, another series of variables named XB1, XB2, XB3,…, etc. If
similar processing is to be performed on each series of labels, the programmer might
put this as a macro instruction. <br>
 The parameter to such a macro instruction could specify the series of variables to be
operated on (A, B, etc.). The macro processor would use this parameter to construct
the symbols required in the macro expansion (XA1, Xb1, etc.). <br>

<br> <br>

 Generation of Unique Labels
 <br> <br>
 it is not possible to use labels for the instructions in the macro definition, since
every expansion of macro would include the label repeatedly which is not
allowed by the assembler. <br>
 This in turn forces us to use relative addressing in the jump instructions. <br>
Instead we can use the technique of generating unique labels for every macro
invocation and expansion. <br>
 During macro expansion each $ will be replaced with $XX, where xx is a twocharacter alphanumeric counter of the number of macro instructions
expansion. <br>
For example, <br>
XX = AA, AB, AC… <br>
<br><br> <br>
<img src="images/alg2.jpg" alt="">
<br> <br> 
Conditional Macro Expansion <br> <br>

There are applications of macro processors that are not related to assemblers or assembler
programming. <br>
Conditional assembly depends on parameters provides <br>
<br>
<img src="images/alg3.jpg" alt="">
<br><br> <br>
Macro Processor Design Options <br> <br> 
 Recursive Macro Expansion <br> <br>
We have seen an example of the definition of one macro instruction by another. But we have
not dealt with the invocation of one macro by another. The following example shows the
invocation of one macro by another macro.
<br> <br> <br>
Problem of Recursive Expansion <br> <br>
Previous macro processor design cannot handle such kind of recursive macro
invocation and expansion <br>
o The procedure EXPAND would be called recursively, thus the invocation
arguments in the ARGTAB will be overwritten. <br>
o The Boolean variable EXPANDING would be set to FALSE when the “inner”
macro expansion is finished, i.e., the macro process would forget that it had
been in the middle of expanding an “outer” macro. <br> <br> <br>
Solutions
o Write the macro processor in a programming language that allows recursive
calls, thus local variables will be retained. <br>
o If you are writing in a language without recursion support, use a stack to take
care of pushing and popping local variables and return addresses.
<br>
<br> <br>
Keyword Macro Parameters <br> <br>
 All the macro instruction definitions used positional parameters. Parameters
and arguments are matched according to their positions in the macro prototype
and the macro invocation statement. <br> <br>
 The programmer needs to be careful while specifying the arguments. If an
argument is to be omitted the macro invocation statement must contain a null
argument mentioned with two commas. <br> <br>
 Positional parameters are suitable for the macro invocation. But if the macro
invocation has large number of parameters, and if only few of the values need
to be used in a typical invocation, a different type of parameter specification is
required <br> <br>
Ex: XXX MACRO &P1, &P2, …., &P20, …. <br>
XXX A1, A2,,,,,,,,,,…,,A20,….. <br>
<br> <br>
Each argument value is written with a keyword that names the corresponding
parameter. <br>
Arguments may appear in any order. <br>
Null arguments no longer need to be used. <br>
Ex: XXX P1=A1, P2=A2, P20=A20. <br>



            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/tp9tBEXQNKI ">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='Ssm'";
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
              $query = "select question from questions_SysSoft where question_no like \"Ssm$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_SysSoft where option_no like \"Ssm$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"Ssm".$i."\" value=\"Ssm".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"Ssm".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"SysSoft.Ssm.5\">";
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
