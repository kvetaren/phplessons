create table user (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  username varchar(128) not null,
  password varchar(128) not null,
  date datetime not null
);
