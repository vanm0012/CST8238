/* Create Database
CREATE DATABASE IF NOT EXISTS vanm0012_Lab9;
*/

CREATE TABLE persons
(
  person_id INT Primary Key NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(50) NULL,
  last_name VARCHAR(50) NULL,
  email VARCHAR(255) NULL,
  telephone VARCHAR(20) NULL,
  sin VARCHAR(11) NULL,
  pass_hash VARCHAR(60) NULL
);
