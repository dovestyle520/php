create database auth;
use auth;

create table autohorized_users(name varchar(20),
                               password varchar(40),
                               primary key (name)
                               );
insert into autohorized_users values('username', 'password');

insert into autohorized_users value('testname', sha1('password'));

grant select on auth .*
                to 'webauth'
                identified by 'webauth';
flush privileges;                                               