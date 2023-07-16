CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
);

INSERT INTO feedback(name ,email, body, date) VALUES
('John','john@gmail.com','I like it', current_timestamp()),
('Tony','tony@gmail.com','Please add more videos', current_timestamp()),
('Hoang','hoang@gmail.com','One more', current_timestamp());
