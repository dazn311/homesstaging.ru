CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       email VARCHAR(100) NOT NULL UNIQUE,
                       name VARCHAR(100) NOT NULL,
                       password VARCHAR(100) NOT NULL,
                       createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       remember_me varchar(255),
                       role int default 0
);

INSERT INTO
    users (`id`, `email`, `name`, `password`,`createDate`,`remember_me`, `role`)
VALUES (
     null,
     'registration55@gmail.com',
     'Sasha',
     '12345',
     NOW(),
     '1' ,
     0),
       (
       null,
       'daz@gmail.com',
       'Alex',
       '12345',
       NOW(),
       '1' ,
       1),
       (
       null,
       'alex2505@bk.ru',
       'Alex',
       '$2y$10$mKa0eFlj229qrIRURXznj.m6fjQC5w.HZu.HRjmB5Q5m/t1xDWLhK',
       NOW(),
       '1' ,
       1);
