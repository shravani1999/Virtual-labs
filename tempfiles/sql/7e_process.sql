insert into questions_linux values ( 'ps1', 'How to run a process in the background?', 'ps1a');
insert into questions_linux values ( 'ps2', 'Process information in the current shell can be obtained by using','ps2d');
insert into questions_linux values ( 'ps3', 'Which signal is sent by the command “kill -9 ” ?', 'ps3c');
insert into questions_linux values ( 'ps4', 'Which of the following values for STAT column of ps command is not true:', 'ps4c');
insert into questions_linux values ( 'ps5', 'When a child process exits before the parent process exits, which of the following is true:', 'ps5c');


insert into answer_linux values ('ps1a', '&');
insert into answer_linux values ('ps1b', '*');
insert into answer_linux values ('ps1c', '?');
insert into answer_linux values ('ps1d', '|');

insert into answer_linux values ('ps2a', 'kill');
insert into answer_linux values ('ps2b', 'bg');
insert into answer_linux values ('ps2c', 'fg');
insert into answer_linux values ('ps2d', 'ps');

insert into answer_linux values ('ps3a', 'INT');
insert into answer_linux values ('ps3b', 'TERM');
insert into answer_linux values ('ps3c', 'KILL');
insert into answer_linux values ('ps3d', 'STOP');

insert into answer_linux values ('ps4a', 'status R means running');
insert into answer_linux values ('ps4b', 'Status S means sleeping');
insert into answer_linux values ('ps4c', 'Status E means exited');
insert into answer_linux values ('ps4d', 'Status Z means zombie');

insert into answer_linux values ('ps5a', 'the child process becomes defunct');
insert into answer_linux values ('ps5b', 'the parent process becomes defunct');
insert into answer_linux values ('ps5c', 'if the parent process does not handle SIGCHLD, the child process becomes a zombie');
insert into answer_linux values ('ps5d', 'none of the mentioned');



