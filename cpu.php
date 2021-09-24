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
  <title>How CPU Works</title>
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
 <a href="co.php" class="item">
    Computer Organization
  </a> 
   <a class="item">
    About Us
  </a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      How CPU Works?
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
     <!-- <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Theory
      </a> -->
      <a class="item" id="list">
        Video
      </a>
      <!--<a class="item" id="faq">
        Quiz
      </a>-->
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      <!--
      <div id="int">
         English is the language of science, of aviation, computers, diplomacy, and tourism. Knowing English increases your chances of getting a good job in a multinational company within your home country or for finding work abroad. 
        <br>  <br> 
        It’s also the language of international communication, the media and the internet, so learning English is important for socialising and entertainment as well as work!
      </div>
      -->
      <!-- 
      <div id="pre" style="display: none;">
   
          <div class="item">       
            <div id="inti" align="justify">
1. Don't study grammar too much
This rule might sound strange to many ESL students, but it is one of the most important rules. If you want to pass examinations, then study grammar. However, if you want to become fluent in English, then you should try to learn English without studying  too much grammar.
<br><br>
Studying grammar will only slow you down and confuse you. You will think about the rules when creating sentences instead of naturally saying a sentence like a native. Remember that only a small fraction of English speakers know more than 20% of all the grammar rules
              <br><br>
           
           2. Learn and study phrases
Many students learn vocabulary and try to put many words together to create a proper sentence. It amazes me how many words some of my students know, but they cannot create a proper sentence. The reason is because they didn't study phrases. When children learn a language, they learn both words and phrases together. Likewise, you need to study and learn phrases.
<br><br>
If you know 1000 words, you might not be able to say one correct sentence. But if you know 1 phrase, you can make hundreds of correct sentences
<br><br>
            3. Reading and Listening is NOT enough. Practice Speaking what you hear!
Reading, listening, and speaking are the most important aspects of any language. The same is true for English. However, speaking is the only requirement to be fluent. It is normal for babies and children to learn speaking first, become fluent, then start reading, then writing. So the natural order is listening, speaking, reading, then writing.
<br><br>
First Problem
Isn't it strange that schools across the world teach reading first, then writing, then listening, and finally speaking? Although it is different, the main reason is because when you learn a second language, you need to read material to understand and learn it. 
<br> <br>
            
  4. Submerge yourself
Being able to speak a language is not related to how smart you are. Anyone can learn how to speak any language. This is a proven fact by everyone in the world. Everyone can speak at least one language. Whether you are intelligent, or lacking some brain power, you are able to speak one language.
<br><br>
This was achieved by being around that language at all times. In your country, you hear and speak your language constantly. You will notice that many people who are good English speakers are the ones who studied in an English speaking school. They can speak English not because they went to an English speaking school, but because they had an environment where they can be around English speaking people constantly.
<br> <br>       
            
5. Study correct material
A common phrase that is incorrect is, "Practice makes perfect." This is far from the truth. Practice only makes what you are practicing permanent. If you practice the incorrect sentence, you will have perfected saying the sentence incorrectly. Therefore, it is important that you study material that is commonly used by most people.
<br><br>
Another problem I see is that many students study the news. However, the language they speak is more formal and the content they use is more political and not used in regular life. It is important to understand what they are saying, but this is more of an advanced lesson that should be studied after learning the fundamental basics of English.
<br><br>
            </div>
        </div>
      </div>
      -->
      <div id="lis" style="padding: 15px; height: 400px;">  
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/cNN_tTXABUA">
</iframe>      </div>
      <!--
      <div id="faqs" style="display: none;">
      
      <form name="Quiz1">
      Check your Basic English Skills
          <p>1.She ______in her sleep<br>
            <label><input type="radio" name="q1" value="Speaks">Speaks</label><br>
            <label><input type="radio" name="q1" value="Talks">Talks</label><br>
            <label><input type="radio" name="q1" value="Either could  be used here">Either could  be used here</label><br>
            <label><input type="radio" name="q1" value="None of these">None of these</label><br>
            <span id="q1"></span>
          </p><br>
          <p>	The phone _________. Can you answer it, please?<br>
            <label><input type="radio" name="q2" value="rings">rings</label><br>
            <label><input type="radio" name="q2" value="ring">ring</label><br>
            <label><input type="radio" name="q2" value="rang">rang</label><br>
            <label><input type="radio" name="q2" value="is ringing">is ringing</label><br>
            <span id="q2"></span>
          </p><br>
          <p>3. John, if you keep working like these, you'll make _______ ill.<br>
            <label><input type="radio" name="q3" value="Yourself">Yourself</label><br>
            <label><input type="radio" name="q3" value="Yourselves">Yourselves</label><br>
            <label><input type="radio" name="q3" value="You">You</label><br>
            <label><input type="radio" name="q3" value="None of these">None of these</label><br>
            <span id="q3"></span>
          </p><br>
          <p>4. Do you have any idea how long _______ me to do it? <br>
            <label><input type="radio" name="q4" value="Did it take">Did it take</label><br>
            <label><input type="radio" name="q4" value="it took">it took</label><br>
            <label><input type="radio" name="q4" value="took it">took it </label><br>
            <label><input type="radio" name="q4" value="None of these">None of these</label><br>
            <span id="q4"></span>
          </p><br>
          <p>5. I was wondering why _______ take the train;it will be quicker.<br>
            <label><input type="radio" name="q5" value="don't we">don't we</label><br>
            <label><input type="radio" name="q5" value="we don't">we don't</label><br>
            <label><input type="radio" name="q5" value="won't we">won't we</label><br>
            <label><input type="radio" name="q5" value="None of the above">None of the above</label><br>
            <span id="q5"></span>
          </p><br>
          <input type="submit" id="quizSub" class="ui left floated button" value="Submit" onclick="quizCorrection()">
        </form>
      
      </div>
      -->
    </div>
  </div>
</div>
</div>
</body>
</html>