psql -U postgres base_test_stage
php -S 127.0.0.1:8000 -t public


CREATE TABLE users(id serial primary key, e_mail varchar(255) unique, nom varchar(255), prenom varchar(255), identifiant varchar(255), password varchar(255), role varchar(80));
ALTER TABLE users ALTER COLUMN role TYPE integer USING (role::integer);
ALTER TABLE users ADD FOREIGN KEY (id) REFERENCES roles;
ALTER TABLE users ADD UNIQUE (identifiant);
create table roles(id_role serial primary key, role varchar(100));
  Insert into roles (role) values ('admin'),('developpeur'),('client');

  Insert into users (e_mail,nom,prenom,identifiant,password,role) values ('test@teste.com','G','stan','idunique','azerty',1);
