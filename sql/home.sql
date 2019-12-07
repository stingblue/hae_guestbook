
CREATE DATABASE IF NOT EXISTS home;
USE home;

CREATE TABLE roles (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  role varchar(100) NOT NULL,
  date_created timestamp default '0000-00-00 00:00:00',
  date_updated timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
  unique(role)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO roles (role,
date_created) VALUES ('Administration', null);
INSERT INTO roles (role,
date_created) VALUES ('SALE', null);


CREATE TABLE users (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_name varchar(100) NOT NULL DEFAULT '',
  user_pass varchar(255) NOT NULL DEFAULT '',
  role_id INT NOT NULL,
  display_name varchar(250) NOT NULL DEFAULT '',
  date_created timestamp default '0000-00-00 00:00:00',
  date_updated timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
  unique(user_name),
  CONSTRAINT FK_RoleUser FOREIGN KEY (role_id)
    	REFERENCES roles(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE feedbacks (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    guest_name VARCHAR(100) NOT NULL,
    guest_email varchar(100) NOT NULL,
    feedback_content longtext NOT NULL,
    date_created timestamp default '0000-00-00 00:00:00',
    date_updated timestamp NULL ON UPDATE CURRENT_TIMESTAMP,
    unique(guest_email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Lisa', 'lisa0129@gmail.com', 'Lorem ipsum dolor sit
amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Tom Hink', 'tom hankk0129@gmail.com', 'Lorem ipsum
dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Vuze', 'lvuze0129@gmail.com', 'Lorem ipsum dolor sit
amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Natasha', 'natasha2149@gmail.com', 'Lorem ipsum dolor
sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Peter Monk', 'peter0295@gmail.com', 'Lorem ipsum dolor
sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Miami', 'miami8921@gmail.com', 'Lorem ipsum dolor sit
amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Sam Find', 'sam2718@gmail.com', 'Lorem ipsum dolor sit
amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
et dolore magna aliqua.', null);

INSERT INTO feedbacks (guest_name, guest_email, feedback_content,
date_created) VALUES ('Micheal Park', 'michael231@gmail.com', 'Lorem ipsum
dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua.', null);


