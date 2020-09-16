create database suivi;

create table student(
    -> Id int not null auto_increment primary key,
    -> firstname varchar(45),
    -> lastname varchar(45),
    -> gender varchar(45),
    -> parentId int,
    -> level varchar(45),
    -> created_on date,
    -> deleted char(45),
    -> courseId int(45));
Query OK, 0 rows affected (0.59 sec)

create table course(
    -> Id int not null auto_increment primary key,
    -> name varchar(45),
    -> courseId int(45),
    -> levelId int(45),
    -> created_on date,
    -> deleted char(45),
    -> studentId int,
    -> foreign key(Id) references student(Id));
Query OK, 0 rows affected (0.48 sec)


 create table permission(
    -> Id int not null auto_increment primary key,
    -> name varchar(45),
    -> description varchar(45),
    -> start_date date,
    -> end_date date,
    -> created_on date,
    -> deleted char(45),
    -> studentId int,
    -> foreign key(Id) references student(Id));
Query OK, 0 rows affected (0.44 sec)


 create table marks(
    -> Id int not null auto_increment primary key,
    -> courseId int,
    -> created_on date,
    -> deleted char(45),
    -> studentId int,
    -> foreign key(Id) references student(Id));
Query OK, 0 rows affected (0.36 sec)

create table parent(
    -> Id int not null auto_increment primary key,
    -> firstname varchar(45),
    -> lastname varchar(45),
    -> phone char(45),
    -> email varchar(45),
    -> created_on date,
    -> deleted char(45));
Query OK, 0 rows affected (0.56 sec)


create table notification(
    -> Id int not null auto_increment primary key,
    -> message varchar(45),
    -> created_on date,
    -> deleted char(45),
    -> parentId int,
    -> foreign key(Id) references parent(id));
Query OK, 0 rows affected (0.39 sec)

 create table staff(
    -> Id int not null auto_increment primary key,
    -> firstname varchar(45),
    -> lastname varchar(45),
    -> phone char(45),
    -> staff_role varchar(45),
    -> created_on date,
    -> deleted char(45),
    -> notificationId int,
    -> foreign key(Id) references notification(Id));
Query OK, 0 rows affected (0.29 sec)


create table staffrole(
    -> Id int not null auto_increment primary key,
    -> name varchar(45),
    -> created_on date,
    -> deleted char(45),
    -> staffId int,
    -> foreign key(Id) references staff(Id));
Query OK, 0 rows affected (0.78 sec)

 create table users(
    -> Id int not null auto_increment primary key,
    -> username varchar(45),
    -> password varchar(45),
    -> usertype varchar(45),
    -> created_on date,
    -> deleted char(45));
Query OK, 0 rows affected (0.41 sec)

create table usertype(
    -> Id int not null auto_increment primary key,
    -> name varchar(45),
    -> userId int(45),
    -> created_on date,
    -> deleted char(45),
    -> staffId int,
    -> foreign key(Id) references staff(Id),
    -> usersId int,
    -> foreign key(id) references users(Id),
    -> studentId int,
    -> foreign key(Id) references student(Id));
Query OK, 0 rows affected (0.34 sec)


create table disciplineMarks(
    -> Id int not null auto_increment primary key,
    -> created_on date,
    -> deleted char(45),
    -> studentId int,
    -> foreign key(Id) references student(Id));
Query OK, 0 rows affected (0.42 sec)