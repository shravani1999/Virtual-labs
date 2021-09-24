insert into questions_flt values ( 'fl1', 'Which of the following is true?','fl1d');
insert into questions_flt values ( 'fl2', 'A language is regular if and only if', 'fl2a');
insert into questions_flt values ( 'fl3', 'Regular grammar is', 'fl3a');
insert into questions_flt values ( 'fl4', 'Let the class of language accepted by finite state machine be L1 and the class of languages represented by regular expressions be L2 then
', 'fl4d');
insert into questions_flt values ( 'fl5', 'Which of the following is not a regular expression?', 'fl5b');

insert into answer_flt values ('fl1a', '(01)*0 = 0(10)*');
insert into answer_flt values ('fl1b', '(0+1)*0(0+1)*1(0+1) = (0+1)*01(0+1)*');
insert into answer_flt values ('fl1c', '(0+1)*01(0+1)*+1*0* = (0+1)*');
insert into answer_flt values ('fl1d', 'All of the mentioned');

insert into answer_flt values ('fl2a', 'accepted by DFA');
insert into answer_flt values ('fl2b', 'accepted by PDA');
insert into answer_flt values ('fl2c', 'accepted by LBA');
insert into answer_flt values ('fl2d', 'accepted by Turing machine');

insert into answer_flt values ('fl3a', 'context free grammar');
insert into answer_flt values ('fl3b', 'non context free grammar');
insert into answer_flt values ('fl3c', 'english grammar');
insert into answer_flt values ('fl3d', 'none of the mentioned');

insert into answer_flt values ('fl4a', 'L1<L2');
insert into answer_flt values ('fl4b', 'L1>=L2');
insert into answer_flt values ('fl4c', 'L1 U L2 = .*');
insert into answer_flt values ('fl4d', 'L1=L2');


insert into answer_flt values ('fl5a', '[(a+b)*-(aa+bb)]*');
insert into answer_flt values ('fl5b', '[(0+1)-(0b+a1)*(a+b)]*');
insert into answer_flt values ('fl5c', '(01+11+10)*');
insert into answer_flt values ('fl5d', '(1+2+0)*(1+2)*');



