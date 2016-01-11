# empmanage


mysql

/*创建数据库*/
create database empmanage;

use empmanage;
/*管理员:admin*/
create table admin(
	id int primary key,
	name varchar(32) not null,
	password varchar(128) not null
);
/*雇员:emp*/
create table emp(
	id int primary key auto_increment,
	name varchar(64) not null,
	garde tinyint,   /*1表示一级工*/
	email varchar(64) not null,
	salary float
);
show tables;
desc emp;

/*添加初始化数据*/
insert into emp(name,garde,email,salary) values('lxj',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj2',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj3',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj4',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj5',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj6',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj7',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj8',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj9',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj10',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj11',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj12',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj13',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj14',1,'771394013@qq.com',20000);
insert into emp(name,garde,email,salary) values('lxj15',1,'771394013@qq.com',20000);

insert into admin values(100,'admin',md5('admin'));
insert into admin values(101,'admin',md5('admin1'));

select * from admin;


/*mysql自我复制，测试项目效率*/
insert into emp(name,garde,email,salary)select name,garde,email,salary from emp;
