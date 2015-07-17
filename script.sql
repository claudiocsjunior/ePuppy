create database epuppy;

create table owners(
    id int auto_increment primary key,
    name varchar(100),
    address varchar(100),
    email varchar(50),
    phone varchar(20)
);
