/*
Author: Milton Bain
Purpose: This is a simple single file that is used to implement the databse to
	hold the buisnesses.
	[should only implement once, unless updated or deleted.]
Permissions: 
	Admin:
		Has the ability to add, delete, and display the database.
	User:
		No direct interaction. May see information elsewhere.
		
Last Modified: 3/20/2019
*/
create database businessDB;
use businessDB;

CREATE TABLE businesses (
  ID int(11) NOT NULL auto_increment,
  name varchar(32),
  address varchar(80),
  category varchar(11),
  discount varchar(80),
  facebook varchar(80),
  instagram varchar(80),
  website varchar(64),
  PRIMARY KEY (ID)
);


INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(1,'rice box','1529 N Wood Ave, Florence, AL 35630','Restaurants','15% off your entire purchase ** excludes alcohol','https://www.facebook.com/RiceBox256/','','');
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(2,'homeside','Homeside Restaurant, 3922 Cloverdale Rd, 35633 Florence','Restaurants','10% off your entire purchase.','https://www.facebook.com/homesiderestaurant/','','');
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(3,'soul wingery & records','Soul: Wingery and Records, 105 S. Poplar Street, 35630 Florence','Restaurants','10% off your entire purchase.','https://www.facebook.com/SoulWingsandRecords/','','');
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(4,'marco\'s pizza','3250 Florence Blvd, Florence, AL 35634','Restaurants','25% off carry out and dine in *cannot be combined with any other offers','https://www.facebook.com/MarcosPizzaFlorenceBlvdAL/','','https://www.marcos.com/locations/');
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(5,'306 bbq','','Restaurants','10% off your entire purchase ** excludes alcohol','https://www.facebook.com/306BBQ.Florence/?fref=ts','https://www.instagram.com/306bbq.florence/?hl=en','http://306bbq.com/florence/');
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(6,'season\'s','1420 Huntsville Rd, Florence, AL 35630','Restaurants','10% off your purchase','https://www.facebook.com/Seasons1420/','https://www.instagram.com/seasonsfood1420/?hl=en','');
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(7,'rattlesnake saloon','Rattlesnake Saloon, 1292 Mount Mills Rd, 35674 Tuscumbia','Restaurants','15% off your purchase *excludes alcohol','https://www.facebook.com/Rattlesnake-Saloon-144201392286795/','','https://www.rattlesnakesaloon.net/');;
INSERT INTO businessDB.businesses(ID,name,address,category,discount,facebook,instagram,website) VALUES(8,'flobama','','Restaurants','15% off your entire purchase before 5pm ** dine in only ** excludes alcohol','https://www.facebook.com/flobamamusic/?fref=ts','','');