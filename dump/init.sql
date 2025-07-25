# CREATE DATABASE example;
CREATE TABLE users (
                       id int(11) primary key auto_increment,
                       email varchar(45),
                       password varchar(255)
                   );


INSERT INTO users (email, password) values ('registration@gmail.com', '12345')