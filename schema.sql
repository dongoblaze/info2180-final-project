CREATE TABLE users(
        id INT PRIMARY KEY,
        firstname CHAR(20),
        lastname CHAR(20),
        password CHAR(40),
        email VARCHAR(40),
        date_joined date);

CREATE TABLE issues(
        id INT PRIMARY KEY,
        title CHAR,
        description CHAR,
        type CHAR(18),
        priority CHAR,
        status CHAR,
        assign_to INT,
        created_by INT,
        created CHAR,
        updated CHAR);
        DROP TABLE users;

INSERT INTO users(id,password, email) VALUES(1,md5('password123'),'admin@bugme.com');
