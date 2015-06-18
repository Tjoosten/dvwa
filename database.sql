--- DB name: root

CREATE TABLE Users (
  id INT(11) AUTO_INCREMENT, 
  firstname VARCHAR(255),
  lastname VARCHAR(255),
  password VARCHAR(255), 
  PRIMARY KEY(id))
  ENGINE = MyISAM;
  
INSERT Users ('','firstname','lastname','password') 
  VALUES
    ('','tim','joosten', '74cc1c60799e0a786ac7094b532f01b1'), 
    ('','Admin','Administrator','456b7016a916a4b178dd72b947c152b7'), 
    ('','User','User', 'e7df7cd2ca07f4f1ab415d457a6e1c13');
    
