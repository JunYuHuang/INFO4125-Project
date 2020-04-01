DROP DATABASE IF EXISTS webdevgp6;
CREATE DATABASE webdevgp6;
USE webdevgp6;




CREATE TABLE Product
(
    productID BIGINT NOT NULL UNIQUE,
    productName VARCHAR(255) NOT NULL,
    productPrice DECIMAL(6,2)
    UNSIGNED NOT NULL,
    productDescription VARCHAR
    (255) NOT NULL,
    productImageFileName VARCHAR
    (255) NOT NULL,
    PRIMARY KEY
    (productID)
);

    CREATE TABLE PurchaseOrder
    (
        purchaseOrderID BIGINT NOT NULL
        AUTO_INCREMENT,
    customerFirstName VARCHAR
        (255) NOT NULL,
    customerLastName VARCHAR
        (255) NOT NULL,
    customerEmailAddress VARCHAR
        (255) NOT NULL,
    customerPhoneNumber VARCHAR
        (255) NOT NULL,
    addressStreet VARCHAR
        (255) NOT NULL,
    addressUnit VARCHAR
        (255),
    addressCity VARCHAR
        (255) NOT NULL,
    addressProvince CHAR
        (255) NOT NULL,
    addressPostalCode CHAR
        (6) NOT NULL,
    addressCountry VARCHAR
        (255) NOT NULL,
    creditCardName VARCHAR
        (255) NOT NULL,
    creditCardNumber CHAR
        (19) NOT NULL,
    creditCardType CHAR
        (64) NOT NULL,
    creditCardExpiryDate CHAR
        (4) NOT NULL,
    creditCardSecurityCode CHAR
        (4) NOT NULL,
    purchaseOrderID CHAR
        (30) NOT NULL,
    purchaseOrder CHAR
        (30) NOT NULL,
    postName VARCHAR
        (255) NOT NULL,
    postDesc VARCHAR
        (255) NOT NULL,
    postImageExt VARCHAR
        (4),
    datePosted DATETIME NOT NULL,
    PRIMARY KEY
        (purchaseOrderID)
);

        CREATE TABLE PurchaseOrderItem
        (
            productID BIGINT NOT NULL UNIQUE,
            purchaseOrderID CHAR(30) NOT NULL,
            purchaseOrderItemID CHAR(30) NOT NULL,
            purchaseOrderItemQuantity SMALLINT
            UNSIGNED NOT NULL DEFAULT 1,
    PRIMARY KEY
            (purchaseOrderItemID),
    FOREIGN KEY
            (purchaseOrderID)
        REFERENCES PurchaseOrder
            (purchaseOrderID)
        ON
            DELETE CASCADE
        ON
            UPDATE CASCADE,
    FOREIGN KEY (productID)
        REFERENCES Product (productID)
            ON
            DELETE CASCADE
        ON
            UPDATE CASCADE
);




            INSERT INTO Product
                (productID, productName, productPrice, productDescription, productImageFileName)
            VALUES
                ("1", "Ballpoint Pen", 4.99, "The classic choice for students since 1950.", "ballpoint.jpg"),
                ("2", "Marker Pen", 4.99, "Great for writing big and bold letters. Also great for smelling.", "marker.jpg"),
                ("3", "Gel Pen", 1.99, "An applicator for highly viscous and coloured fluids.", "gel.jpg"),
                ("4", "Retractable Pen", 1.99, "The perfect tool for writing documents and annoying your colleagues at the same time.", "retractable.jpg"),
                ("5", "Stylus Pen", 14.99, "Excellent pen with a comfortable, silicon-rubber grip that allows for precise ink strokes.", "stylus.jpg"),
                ("6", "Calligraphy Pen", 12.99, "The best option for an aspiring artist to practice calligraphy with accuracy.", "calligraphy.jpg"),
                ("7", "Spy Pen", 28.99, "Perfect for fulfilling your plagaristic desires in style (Mini Camera Built-in).", "spy.jpg" ),
                ("8", "Worlds Smallest Pen", 2.99, "You wouldn't even know it was there.", "tiny.jpg"),
                ("9", "Quill Pen", 14.99, "Made specially for those who want to time-travel backwards without being noticed with a classic pen. Ink reservoir not included.", "quill.jpg"),
                ("10", "Coming Soon TM", 9999.99, "Top secret pen coming next century.", "unknown.svg");




            DROP USER IF EXISTS 'websecgp6';
            CREATE USER 'websecgp6'@'localhost' IDENTIFIED BY 'websecgp6';
            GRANT SELECT ON webdevgp6.Product TO 'websecgp6'@'localhost';