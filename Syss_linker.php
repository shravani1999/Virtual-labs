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
   Linkers and Loaders
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
The Source Program written in assembly language or high level language will be
converted to object program, which is in the machine language form for execution. This
conversion either from assembler or from compiler, contains translated instructions and data
values from the source program, or specifies addresses in primary memory where these items
are to be loaded for execution. <br>
This contains the following three processes, and they are, <br>
Loading - which allocates memory location and brings the object program into
memory for execution - (Loader) <br>
 Linking- which combines two or more separate object programs and supplies the
information needed to allow references between them - (Linker) <br> Relocation - which modifies the object program so that it can be loaded at an address
different from the location originally specified - (Linking Loader)
      <br> <br> <br>

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
registers of SIC. <br> <br> <br>

Algorithm and Data structures for a Linking Loader
<br> <br>
The algorithm for a linking loader is considerably more complicated than the absolute loader
program, which is already given. The concept given in the program linking section is used
for developing the algorithm for linking loader. The modification records are used for
relocation so that the linking and relocation functions are performed using the same
mechanism. <br> <br>
Linking Loader uses two-passes logic. ESTAB (external symbol table) is the main
data structure for a linking loader. <br> <br>
Pass 1: Assign addresses to all external symbols <br>
Pass 2: Perform the actual loading, relocation, and linking <br>
ESTAB - ESTAB for the example (refer three programs PROGA PROGB and
PROGC) given is as shown below. The ESTAB has four entries in it; they are name of the
control section, the symbol appearing in the control section, its address and length of the
control section. 
<br> 
NOTE: Kindly Refer textbook for the algorithms of one pass and two pass

<br> <br> <br>

Machine-independent Loader Features <br>
Here we discuss some loader features that are not directly related to machine architecture and
design. Automatic Library Search and Loader Options are such Machine-independent Loader
Features.
<br> <br> <br>
Automatic Library Search <br> <br>
This feature allows a programmer to use standard subroutines without explicitly including
them in the program to be loaded. The routines are automatically retrieved from a library as
they are needed during linking. This allows programmer to use subroutines from one or more
libraries. The subroutines called by the program being loaded are automatically fetched from
the library, linked with the main program and loaded. The loader searches the library or
libraries specified for routines that contain the definitions of these symbols in the main
program.
<br> <br> <br>
Loader Options <br> <br>
 Loader options allow the user to specify options that modify the standard processing. The
options may be specified in three different ways. They are, specified using a command
language, specified as a part of job control language that is processed by the operating
system, and an be specified using loader control statements in the source program.
Here are the some examples of how option can be specified. <br>
INCLUDE program-name (library-name) - read the designated object program from
a library. <br> <br>
DELETE csect-name – delete the named control section from the set pf programs
being loaded <br> <br>
CHANGE name1, name2 - external symbol name1 to be changed to name2
wherever it appears in the object programs <br> <br>
LIBRARY MYLIB – search MYLIB library before standard libraries <br> <br>
NOCALL STDDEV, PLOT, CORREL – no loading and linking of unneeded
routines <br> <br>
Here is one more example giving, how commands can be specified as a part of object
file, and the respective changes are carried out by the loader. <br>
LIBRARY UTLIB <br>
INCLUDE READ (UTLIB) <br>
INCLUDE WRITE (UTLIB) <br>
DELETE RDREC, WRREC <br>
CHANGE RDREC, READ <br>
CHANGE WRREC, WRITE <br>
NOCALL SQRT, PLOT <br> <br>
The commands are, use UTLIB (say utility library), include READ and WRITE
control sections from the library, delete the control sections RDREC and WRREC from the
load, the change command causes all external references to the symbol RDREC to be
changed to the symbol READ, similarly references to WRREC is changed to WRITE,
finally, no call to the functions SQRT, PLOT, if they are used in the program. 
 <br><br> <br>

Loader Design Options
 <br> <br>
There are some common alternatives for organizing the loading functions, including
relocation and linking. Linking Loaders – Perform all linking and relocation at load time. The 
Other Alternatives are Linkage editors, which perform linking prior to load time and,
dynamic linking, in which linking function is performed at execution time
<br> <br><br>
Linking Loaders
 <br> <br>
 The source program is first assembled or compiled, producing an object program. A linking
loader performs all linking and loading operations, and loads the program into memory for
execution.
<br> <br> <br>
Linkage Editors
<br> <br>
Some useful functions of Linkage editor are, an absolute object program can be
created, if starting address is already known. New versions of the library can be included
without changing the source program. Linkage editors can also be used to build packages of
subroutines or other control sections that are generally used together. Linkage editors often
allow the user to specify that external references are not to be resolved by automatic library
search – linking will be done later by linking loader – linkage editor + linking loader –
savings in space
<br><br> <br>
Dynamic Linking
 <br> <br>
The scheme that postpones the linking functions until execution. A subroutine is loaded and
linked to the rest of the program when it is first called – usually called dynamic linking,
dynamic loading or load on call. The advantages of dynamic linking are, it allow several
executing programs to share one copy of a subroutine or library. In an object oriented system,
dynamic linking makes it possible for one object to be shared by several programs. Dynamic
linking provides the ability to load the routines only when (and if) they are needed. The
actual loading and linking can be accomplished using operating system service request.  
<br> <br> <br>
Bootstrap Loaders
<br> <br>
If the question, how is the loader itself loaded into the memory? is asked, then the answer is,
when computer is started – with no program in memory, a program present in ROM (
absolute address) can be made executed – may be OS itself or A Bootstrap loader, which in
turn loads OS and prepares it for execution. The first record ( or records) is generally referred
to as a bootstrap loader – makes the OS to be loaded. Such a loader is added to the beginning
of all object programs that are to be loaded into an empty and idle system.





            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/iWUbjK0I93c">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='Ssl'";
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
              $query = "select question from questions_SysSoft where question_no like \"Ssl$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_SysSoft where option_no like \"Ssl$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"Ssl".$i."\" value=\"Ssl".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"Ssl".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"SysSoft.Ssl.5\">";
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
