CREATE TABLE tasks (
    id int NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    is_done BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (id)
);