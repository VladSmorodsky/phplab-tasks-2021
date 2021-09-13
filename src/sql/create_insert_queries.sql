CREATE database event_calendar;

USE event_calendar;

CREATE TABLE User(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    date_of_birth date,
    registered_at datetime DEFAULT now(),
    PRIMARY KEY (id)
);

CREATE TABLE Event_Category(
    id int NOT NULL AUTO_INCREMENT,
    category_name varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Event(
    id int NOT NULL AUTO_INCREMENT,
    user_id int NOT NULL,
    event_date datetime NOT NULL,
    event_category_id int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (event_category_id) REFERENCES Event_Category(id)
);

INSERT INTO Event_Category(category_name) VALUES('Birthday');
INSERT INTO Event_Category(category_name) VALUES('Wedding');
INSERT INTO Event_Category(category_name) VALUES('Meetup');

INSERT INTO User (name, password, email, date_of_birth) VALUES ('Vladson', 'r!23et', 'vl@example.com', '1995-10-11');
INSERT INTO User (name, password, email, date_of_birth) VALUES ('Test', 'r!2ttet', 'test@example.com', '1986-12-01');
INSERT INTO User (name, password, email, date_of_birth) VALUES ('Peter', 'ui!2ttet', 'peter@example.com', '2000-14-06');

INSERT INTO Event (user_id, event_date, event_category_id, description) VALUES (1, '2021-09-11', 1, 'Birthday Test User');
INSERT INTO Event (user_id, event_date, event_category_id, description) VALUES (1, '2021-10-09', 1, 'Birthday Vladson User');
INSERT INTO Event (user_id, event_date, event_category_id, description) VALUES (1, '2021-09-11', 3, 'Symfony MeetUp');


