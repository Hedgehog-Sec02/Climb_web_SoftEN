
CREATE TABLE Question (
    qid int(5) NOT NULL AUTO_INCREMENT,
    qdesc varchar(100) NOT NULL, 
    qcatalog varchar(10) NOT NULL,
    CONSTRAINT Qid_pk PRIMARY KEY(qid)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO Question VALUES ("", "What was the name of your first pet?", "1");
INSERT INTO Question VALUES ("", "What is your favorite food?","1");
INSERT INTO Question VALUES ("", "Where is your hometown?","1");

INSERT INTO Question VALUES ("", "What is your favorite color?","2");
INSERT INTO Question VALUES ("", "What is your favorite song?","2");
INSERT INTO Question VALUES ("", "What's your best friend's name?","2");

INSERT INTO Question VALUES ("", "What is your hero name?","3");
INSERT INTO Question VALUES ("", "What city did your parents meet?","3");
INSERT INTO Question VALUES ("", "What is your favorite movie?","3");


