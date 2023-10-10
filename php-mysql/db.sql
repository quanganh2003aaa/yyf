CREATE TABLE users(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    email varchar(255) UNIQUE,
    password varchar(255),
    status int,
    avatar varchar(255)
);