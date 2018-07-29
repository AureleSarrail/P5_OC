
CREATE TABLE User (
                UserId INT AUTO_INCREMENT NOT NULL,
                Name VARCHAR(50) NOT NULL,
                FirstName VARCHAR(50) NOT NULL,
                Username VARCHAR(50) NOT NULL,
                Mail VARCHAR(255) NOT NULL,
                Rights INT NOT NULL,
                Password VARCHAR(50) NOT NULL,
                PRIMARY KEY (UserId)
);


CREATE TABLE Post (
                PostId INT AUTO_INCREMENT NOT NULL,
                Title VARCHAR(255) NOT NULL,
                Head Text NOT NULL,
                Image VARCHAR(255) NOT NULL,
                Content TEXT(50000) NOT NULL,
                LastModif DATE NOT NULL,
                CreatDate DATE NOT NULL,
                UserId INT NOT NULL,
                PRIMARY KEY (PostId)
);


CREATE TABLE Comment (
                Id_Com INT AUTO_INCREMENT NOT NULL,
                Content VARCHAR(255) NOT NULL,
                Creation_Date DATE NOT NULL,
                Status VARCHAR(20) NOT NULL,
                UserId INT NOT NULL,
                PostId INT NOT NULL,
                PRIMARY KEY (Id_Com)
);


ALTER TABLE Post ADD CONSTRAINT user_post_fk
FOREIGN KEY (UserId)
REFERENCES User (UserId)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Comment ADD CONSTRAINT user_comment_fk
FOREIGN KEY (UserId)
REFERENCES User (UserId)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Comment ADD CONSTRAINT post_comment_fk
FOREIGN KEY (PostId)
REFERENCES Post (PostId)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
