create table login(username varchar(50) not null, password varchar(50) not null,
                   primary key(username));

create table users(username varchar(50) not null, first_name varchar(50) not null, 
                   last_name varchar(50) not null, primary key(username),
                   foreign key(username) references login(username));

create table income(username varchar(50) not null, name varchar(50) not null, 
                    value decimal(10, 2) not null, primary key(username),
                    foreign key(username) references login(username));

create table expense(username varchar(50) not null, name varchar(50) not null, 
                     value decimal(10, 2) not null, primary key(username),
                     foreign key(username) references login(username));