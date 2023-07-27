Create database blogs;
create table users (
id int primary key auto_increment ,
user_name varchar (255) not null ,
 email varchar (255) not null unique,
 password varchar(30) not null,
 created_at datetime default now()
 );
 create table posts(
 id int auto_increment primary key,
 title varchar(255),
 content text(1000),
  created_at datetime default now()
 );
 
  create table comments (
   id int auto_increment primary key,
    foreign key (user_id)
    references users(id),
	foreign key (post_id )
    references posts (id),
    content text(1000),
   created_at timestamp default now()
);
   