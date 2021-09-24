ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '1234';
use virtuallabsdsce;

create table userdata ( 
	username varchar(50),
    semester varchar(6),
	usn varchar(20) primary key,
    mobile_no numeric(10) unique,
    email varchar(20) unique,
    passwd varchar(20)
    );

create table user_scores (
	usn varchar(20),
    quiz_score numeric(4,1),
    program_solved boolean not null default 0,
    topic_name varchar(5),
    primary key(usn, topic_name),
    foreign key(usn) references userdata(usn));
    
create table questions_ds ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_oj ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_co ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_ld ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_cn ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_dbms ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_eng ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_linux ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_ada ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_se ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_flt ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_cloud ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_SysSoft ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_ML ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));


create table answer_ds ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_oj ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_co ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_ld ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_cn ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_dbms ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_eng ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_linux ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_ada ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_se ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_flt ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_cloud ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_SysSoft ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_ML ( option_no varchar(5) primary key ,  options_name varchar(200));

