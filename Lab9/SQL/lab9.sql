/* Create Database
CREATE DATABASE IF NOT EXISTS vanm0012_Lab9;
*/

CREATE TABLE persons
(
  PersionId, INT, Primary Key NOT NULL AUTO_INCREMENT,
  FirstName, VARCHAR(50) NULL,
  LastName, VARCHAR(50) NULL,
  EmailAddress, VARCHAR(255) NULL,
  TelephoneNumber, VARCHAR(20) NULL,
  SocialInsuranceNumber, VARCHAR(11) NULL,
  Password, VARCHAR(60) NULL
);
