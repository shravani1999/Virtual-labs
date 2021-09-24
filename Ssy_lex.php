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
   Lex & Yacc
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
      Lex is a program generator designed for lexical processing of character input streams. It
accepts a high-level, problem oriented specification for character string matching, and
produces a program in a general purpose language which recognizes regular expressions.The
regular expressions are specified by the user in the source specifications given to Lex.  <br>
<br> <br> 
The Lex written code recognizes these expressions in an input stream and partitions the
input stream into strings matching the expressions. At the boundaries between strings
program sections provided by the user are executed. The Lex source file associates the
regular expressions and the program fragments. As each expression appears in the input to
the program written by Lex, the corresponding fragment is executed. <br>
 Lex turns the user's expressions and actions (called source in this memo) into the host
general-purpose language; the generated program is named yylex. The yylex program will
recognize expressions in a stream (called input in this memo) and perform the specified
actions for each expression as it is detected. <br> <br><br>

Yacc Parser
<br> <br>
The structure of a lex file is intentionally similar to that of a yacc file; files are divided up
into three sections, separated by lines that contain only two percent signs, as follows: <br>
Definition section <br>
%% <br>
Rules section <br>
%% <br>
C code section <br><br>
The definition section is the place to define macros and to import header files written
in C. It is also possible to write any C code here, which will be copied verbatim into
the generated source file.
 The rules section is the most important section; it associates patterns with C
statements. Patterns are simply regular expressions. When the lexer sees some text in
the input matching a given pattern, it executes the associated C code. This is the basis
of how lex operates.
 The C code section contains C statements and functions that are copied verbatim to
the generated source file. These statements presumably contain code called by the
rules in the rules section. In large programs it is more convenient to place this code in
a separate file and link it in at compile time.


<br> <br>


lex program to count number of words
<br> <br>
%{ <br>
#include<stdio.h> 
<br>#include<string.h> 
 <br> int i = 0; 
<br>%} 
  <br>
<br> /* Rules Section*/
<br> %% 
<br> ([a-zA-Z0-9])*    {i++;} /* Rule for counting  
                          number of words*/
  
<br> "\n" {printf("%d\n", i); i = 0;} 
<br> %% 
  <br>
int yywrap(void){} 
  <br>
int main() <br>
{    <br>
    // The function that starts the analysis <br>
    yylex(); <br>
  
    return 0; <br>
} <br>
<br> <br>
Regular expression
<br> <br>

The definitions of regular expressions are very similar to those in QED [5]. A regular expression specifies a set of strings to be matched. It contains text characters (which match the corresponding characters in the strings being compared) and operator characters (which specify repetitions, choices, and other features). The letters of the alphabet and the digits are always text characters; thus the regular expression <br>
                                 integer <br> <br>
matches the string integer wherever it appears and the expression <br>
                                    a57D <br> 
looks for the string a57D.
Operators. The operator characters are <br> <br>

                   " \ [ ] ^ - ? . * + | ( ) $ / { } % < > <br> <br>
and if they are to be used as text characters, an escape should be used. The quotation mark operator (") indicates that whatever is contained between a pair of quotes is to be taken as text characters. Thus 
                                   xyz"++"
matches the string xyz++ when it appears. Note that a part of a string may be quoted. It is harmless but unnecessary to quote an ordinary text character; the expression
                                   "xyz++"
is the same as the one above. Thus by quoting every non-alphanumeric character being used as a text character, the user can avoid remembering the list above of current operator characters, and is safe should further extensions to Lex lengthen the list.
An operator character may also be turned into a text character by preceding it with \ as in

                                   xyz\+\+
which is another, less readable, equivalent of the above expressions. Another use of the quoting mechanism is to get a blank into an expression; normally, as explained above, blanks or tabs end a rule. Any blank character not contained within [] (see below) must be quoted. Several normal C escapes with \ are recognized: \n is newline, \t is tab, and \b is backspace. To enter \ itself, use \\. Since newline is illegal in an expression, \n must be used; it is not required to escape tab and backspace. Every character but blank, tab, newline and the list above is always a text character.
Character classes. Classes of characters can be specified using the operator pair [].
<br><br> The construction [abc] matches a single character, which may be a, b, or c. Within square brackets, most operator meanings are ignored. Only three characters are special: these are \ - and ^. The - character indicates ranges. For example,

                                 [a-z0-9<>_]
indicates the character class containing all the lower case letters, the digits, the angle brackets, and underline. Ranges may be given in either order. Using - between any pair of characters which are not both upper case letters, both lower case letters, or both digits is implementation dependent and will get a warning message. (E.g., [0-z] in ASCII is many more characters than it is in EBCDIC). If it is desired to include the character - in a character class, it should be first or last; thus
                                   [-+0-9]
matches all the digits and the two signs. <br> <br>
In character classes, the ^ operator must appear as the first character after the left bracket; it indicates that the resulting string is to be complemented with respect to the computer character set. Thus

                             <br>      [^abc]
matches all characters except a, b, or c, including all special or control characters; or
                               <br>   [^a-zA-Z]
is any character which is not a letter. The \ character provides the usual escapes within character class brackets.
Arbitrary character. To match almost any character, the operator character . is the class of all characters except newline. Escaping into octal is possible although non-portable:

                               <br>  [\40-\176]
matches all printable characters in the ASCII character set, from octal 40 (blank) to octal 176 (tilde).
Optional expressions. The operator ? indicates an optional element of an expression. Thus

                                   <br> ab?c
matches either ac or abc.
Repeated expressions. Repetitions of classes are indicated by the operators * and +.

                                   <br>  a*
is any number of consecutive a characters, including zero; while
                                    <br> bra+
is one or more instances of a. For example,
                                  <br> [a-z]+
is all strings of lower case letters. And
                           <br> [A-Za-z][A-Za-z0-9]*
indicates all alphanumeric strings with a leading alphabetic character. This is a typical expression for recognizing identifiers in computer languages.
Alternation and Grouping. The operator | indicates alternation:

                                 <br>  (ab|cd)
matches either ab or cd. Note that parentheses are used for grouping, although they are not necessary on the outside level;
                                  <br>  ab|cd
would have sufficed. Parentheses can be used for more complex expressions:
                             <br>  (ab|cd+)?(ef)*
matches such strings as abefef, efefef, cdef, or cddd; but not abc, abcd, or abcdef.
<br> <br>
Context sensitivity. Lex will recognize a small amount of surrounding context. The two simplest operators for this are ^ and $. If the first character of an expression is ^, the expression will only be matched at the beginning of a line (after a newline character, or at the beginning of the input stream). This can never conflict with the other meaning of ^, complementation of character classes, since that only applies within the [] operators. If the very last character is $, the expression will only be matched at the end of a line (when immediately followed by newline). The latter operator is a special case of the / operator character, which indicates trailing context. The expression

                                 <br>   ab/cd
matches the string ab, but only if followed by cd. Thus
                                     ab$
is the same as
                                  <br>  ab/\n
Left context is handled in Lex by start conditions as explained in section 10. If a rule is only to be executed when the Lex automaton interpreter is in start condition x, the rule should be prefixed by
                                  <br>   <x>
using the angle bracket operator characters. If we considered ``being at the beginning of a line'' to be start condition ONE, then the ^ operator would be equivalent to
                                <br>    <ONE>
Start conditions are explained more fully later.
Repetitions and Definitions. The operators {} specify either repetitions (if they enclose numbers) or definition expansion (if they enclose a name). For example

                               <br>    {digit}
looks for a predefined string named digit and inserts it at that point in the expression. The definitions are given in the first part of the Lex input, before the rules. In contrast,
                              <br>     a{1,5}
looks for 1 to 5 occurrences of a.
Finally, initial % is special, being the separator for Lex source segments.
<br><br> <br>



</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
           YACC
             <br> <br>
             A parser generator is a program that takes as input a specification of a syntax, and produces as output a procedure for recognizing that language. Historically, they are also called compiler-compilers.

YACC (yet another compiler-compiler) is an LALR(1) (LookAhead, Left-to-right, Rightmost derivation producer with 1 lookahead token) parser generator. YACC was originally designed for being complemented by Lex. <br>

<br> <br>

Basic Specifications: <br>
Every specification file consists of three sections: the declarations, (grammar) rules,
and programs. The sections are separated by double percent ``%%'' marks. (The percent
``%'' is generally used in Yacc specifications as an escape character.)
In other words, a full specification file looks like <br>
declarations <br>
 %% <br>
 rules <br>
 %% <br>
 programs <br> <br>
The declaration section may be empty. Moreover, if the programs section is omitted, the
second %% mark may be omitted also <br><br>
<br>

Arithmetic Expressions and Ambiguity: <br> <br>
A set of grammar rules is ambiguous if there is some input string that can be structured in
two or more different ways. For example, the grammar rule <br> <br>
expr : expr '-' expr <br> <br>
is a natural way of expressing the fact that one way of forming an arithmetic expression is
to put two other expressions together with a minus sign between them. Unfortunately, this
grammar rule does not completely specify the way that all complex inputs should be
structured. For example, if the input is <br> <br>
expr - expr - expr <br> <br>
the rule allows this input to be structured as either <br> <br>
( expr - expr ) - expr 
or as
expr - ( expr - expr )
<br><br> <br>



            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/UVMbMNu5rPA">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='syl'";
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
              $query = "select question from questions_SysSoft where question_no like \"syl$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_SysSoft where option_no like \"syl$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"syl".$i."\" value=\"syl".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"syl".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"SysSoft.syl.5\">";
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
