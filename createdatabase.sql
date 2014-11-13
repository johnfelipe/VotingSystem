CREATE DATABASE voting_system;
CREATE USER voter@localhost IDENTIFIED BY 'voter_pass';
GRANT ALL ON voting_system.* TO voter@localhost;
