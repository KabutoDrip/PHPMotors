INSERT INTO `clients`(`clientId`, `clientFirstname`, `clientLastname`, `clientEmail`, `clientPassword`, `clientLevel`, `comment`) VALUES ('','Tony','Stark','tony@starkent.com','Iam1ronM@n','','"I am the real Ironman" ');

SELECT `clientId`, `clientFirstname`, `clientLastname`, `clientEmail`, `clientPassword`, `clientLevel`, `comment` FROM `clients`;

UPDATE `clients` SET `clientLevel`='3' WHERE clientId = '1';

SELECT `invId`, `invMake`, `invModel`, `invDescription`, `invImage`, `invThumbnail`, `invPrice`, `invStock`, `invColor`, `classificationId` FROM `inventory` WHERE `invModel` = 'hummer'; 

UPDATE `inventory` SET `invDescription` = REPLACE(invDescription, 'small interior', 'spacious interior');

SELECT carclassification.classificationId, carclassification.classificationName, inventory.invMake, inventory.invModel FROM inventory INNER JOIN carclassification ON inventory.classificationId = carclassification.classificationId WHERE carclassification.classificationName = 'SUV';

SELECT `invId`, `invMake`, `invModel`, `invDescription`, `invImage`, `invThumbnail`, `invPrice`, `invStock`, `invColor`, `classificationId` FROM `inventory` WHERE `invMake` = 'Jeep';

DELETE FROM `inventory` WHERE `invModel` = "Wrangler";

SELECT `invImage`, `invThumbnail` FROM `inventory`;

