create table brands(
br_id int auto_increment primary key,
br_name varchar(100)
);

create table categories(
br_id int auto_increment primary key,
br_name varchar(100)
);

create table product(
pr_id int auto_increment primary key,
pr_name varchar(100)
);