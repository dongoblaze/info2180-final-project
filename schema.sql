CREATE TABLE users(
        id INT PRIMARY KEY,
        firstname CHAR(20),
        lastname CHAR(20),
        password CHAR(9),
        email CHAR,
        date_joined date
);
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
        updated CHAR
);
SELECT * FROM student;
INSERT INTO user(password, email) VALUES('password123','admin@bugme.com');


        