DROP DATABASE businessDBAndroid;
create database businessDBAndroid;
use businessDBAndroid;

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


INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Rice Box','1529 N Wood Ave, Florence, AL 35630','Restaurants','15% off your entire purchase ** excludes alcohol','https://www.facebook.com/RiceBox256/','','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Homeside','3922 Cloverdale Rd, 35633 Florence','Restaurants','10% off your entire purchase.','https://www.facebook.com/homesiderestaurant/','','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Soul Wingery & Records','105 S. Poplar Street, 35630 Florence','Restaurants','10% off your entire purchase.','https://www.facebook.com/SoulWingsandRecords/','','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Marco\'s Pizza','3250 Florence Blvd, Florence, AL 35634','Restaurants','25% off carry out and dine in *cannot be combined with any other offers','https://www.facebook.com/MarcosPizzaFlorenceBlvdAL/','','https://www.marcos.com/locations/');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('306 BBQ','','Restaurants','10% off your entire purchase ** excludes alcohol','https://www.facebook.com/306BBQ.Florence/?fref=ts','https://www.instagram.com/_u/306bbq.florence/','http://306bbq.com/florence/');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Season\'s','1420 Huntsville Rd, Florence, AL 35630','Restaurants','10% off your purchase','https://www.facebook.com/Seasons1420/','http://instagram.com/_u/seasonsfood1420','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Rattlesnake Saloon','1292 Mount Mills Rd, 35674 Tuscumbia','Restaurants','15% off your purchase *excludes alcohol','https://www.facebook.com/Rattlesnake-Saloon-144201392286795/','','https://www.rattlesnakesaloon.net/');;
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Flobama','','Restaurants','15% off your entire purchase before 5pm ** dine in only ** excludes alcohol','https://www.facebook.com/flobamamusic/?fref=ts','','');

INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Dairy Queen - Florence Blvd','2908 Florence Blvd, 35630-9553 Florence, AL','Restaurants','10% off regular priced purchase **Does not apply to Court St. location.','https://www.facebook.com/DairyQueenFlorence/','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Dairy Queen - Avalon Ave.','Firestone Avenue and Avalon Avenue, 35661 Muscle Shoals','Restaurants','10% off regular priced purchase **Does not apply to Court St. location.','','http://www.instagram.com/_u/','https://pizzapiefactory.com/');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('The Pie Factory','106 N Court St, 35630 Florence, AL','Restaurants','10% off food only','https://www.facebook.com/piefactoryflorence/','http://www.instagram.com/_u/the_pie_factory/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Garden Gate Cafe - Florence','1917 Florence Blvd, Florence, AL 35630','','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Garden Gate Cafe - Muscle Shoals','701 Avalon Ave, Muscle Shoals, AL 35661','','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Yummies Bakery','2530 Florence Blvd, Florence, AL','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Las Trojas Cantina','301 Cox Creek Pkwy, 35630 Florence, AL','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Fiesta Mexicana',' 4001 N. Jackson Hwy, Sheffield, AL','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Alabama Bliss','1202 Woodward Ave, 35661 Muscle Shoals','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Burger Depot','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Butler Fit Foods','907 Florence Blvd, 35630 Florence','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Lawler\'s Barbecue','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('St. Florian Pharmacy','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Jack\'s Place','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Domino\'s - Highway 157','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Domino\'s - Darby Dr','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Domino\'s - Muscle Shoals','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Taco Garage','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Buffalo Wild Wings','','Restaurants','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Alabama Outdoors','119 N Court St, Florence, AL 35630','Apparel','10% off any regular priced item','https://www.facebook.com/AlabamaOutdoors.Florence/','http://www.instagram.com/_u/alabamaoutdoorsofficial/','https://alabamaoutdoors.com/');

INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Nellie Mae Boutique','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('The Shoppes At Coldwater','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Alabama Bliss','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Mefford Jewelers','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('VisitFlorenceAL','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Cypress Creek Indoor Range','','','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Shoals Yoga','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Branded Boutique','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Sassy and Classy Boutique','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Off Campus Book Store','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Lucky Finds','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('The Look!','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Creative Jewelers','','Apparel','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Ooh La La Salon & Spa','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Meraki Salon & Spa','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Mitchell Printing','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Tan City','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Custon Organization, LLC','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Health Connect America','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Hicks & Associates Insurance','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Singing River Pest Control','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Gator Fitness','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Ulta-Florence, AL','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Workout Anytime','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Bumper 2 Bumper Mobile Detailing','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Gallaher Spa at the GunRunner Hotel','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('The Unlimited Health & Fitness Club','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Crenshaw Cuts','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Elite Sports','','Services','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Paradox-Florence','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Cypress Creek Indoor Range','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Florence Brazilian Jiu-Jitsu','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Gator Fitness','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Shoals Yoga','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('The Unlimited Health & Fitness Club','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Elite Sports','','Activities','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Virtual Healthcare','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Total Nutrition','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Hickory Hills Dental Care','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Gator Fitness','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Dr. Mike McCleary Family & Cosmetic Dentistry','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('The Unlimited Health & Fitness Club','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Elite Sports','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Level Up Nutrition','','Healthcare','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Bellamy Florence','','Rentals','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Middle Road Self Storage','','Rentals','','','http://www.instagram.com/_u/','');
INSERT INTO businessDBAndroid.businesses(name,address,category,discount,facebook,instagram,website) VALUES('Brookfield Apartment Homes','','Rentals','','','http://www.instagram.com/_u/','');
