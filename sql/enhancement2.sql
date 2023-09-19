
-- QUERY 1 - Insert the new client:

INSERT INTO clients (clientFirstName, clientLastName, clientEmail, clientPassword, comment)
VALUES ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman');


-- QUERY 2 - Modify the Tony Stark record to change the clientLevel

UPDATE clients
SET clientLevel = 3
WHERE clientFirstName = 'Tony' AND clientLastName = 'Stark';


-- QUERY 3 - Modify the "GM Hummer" record to change the interior description

UPDATE inventory
SET invDescription = REPLACE(invDescription, 'small interior', 'spacious interior')
WHERE invMake = 'GM' AND invModel = 'Hummer';


-- QUERY 4 - Select invModel and classificationName for SUV inventory items

SELECT inv.invModel, 
	cs.classificationName
FROM inventory inv
INNER JOIN carclassification cs ON inv.classificationId = cs.classificationId
WHERE carclassification.classificationName = 'SUV';


-- QUERY 5 - Delete the Jeep Wrangler from the database

DELETE FROM inventory
WHERE invMake = 'Jeep' AND invModel = 'Wrangler';



-- QUERY 6 - Update all records in the Inventory table to add "/phpmotors" to the beginning of the file path

UPDATE inventory
SET invImage = CONCAT('/phpmotors', invImage),
    invThumbnail = CONCAT('/phpmotors', invThumbnail);