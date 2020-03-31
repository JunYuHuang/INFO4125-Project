-- Create the Penzaar database
DROP DATABASE IF EXISTS webdevgp6;
CREATE DATABASE webdevgp6;
USE webdevgp6;

-- create the tables
CREATE TABLE Product
(
    productID CHAR(30) NOT NULL UNIQUE,
    productName VARCHAR(255) NOT NULL,
    productPrice DECIMAL(6,2) NOT NULL,
    productDescription VARCHAR(255) NOT NULL,
    productImageFileName VARCHAR(255) NOT NULL,
    PRIMARY KEY (productID)
);

-- SAMPLE DATA

-- products
INSERT INTO Product
    (productID, productName, productPrice, productDescription, productImageFileName)
VALUES
    ("1", "Ballpoint Pen", 4.99, "The classic choice for students since 1950.", "ballpoint.jpg"),
    ("2", "Marker Pen", 4.99, "Great for writing big and bold letters. Also great for smelling.", "marker.jpg"),
    ("3", "Gel Pen", 1.99, "An applicator for highly viscous and coloured fluids.", "gel.jpg"),
    ("4", "Retractable Pen", 1.99, "The perfect tool for writing documents and annoying your colleagues at the same time.", "retractable.jpg"),
    ("5", "Stylus Pen", 14.99, "Excellent pen with a comfortable, silicon-rubber grip that allows for precise ink strokes.", "stylus.jpg"),
    ("6", "Coming Soon TM", 9999.99, "Top secret pen coming next century.", "unknown.svg");

-- omit creating a user if user account below has already been created
DROP USER IF EXISTS 'websecgp6';
CREATE USER 'websecgp6'@'localhost' IDENTIFIED BY 'websecgp6';
GRANT SELECT ON webdevgp6.Product TO 'websecgp6'@'localhost';