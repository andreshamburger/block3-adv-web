<!-- Creating The Tables --> 
CREATE TABLE `awb_project`.`pets` (`pets_id` INT NOT NULL AUTO_INCREMENT , `pets_name` VARCHAR(255) NOT NULL , `pets_age` INT NOT NULL , `pets_gender` VARCHAR(255) NOT NULL , `pets_neutered` BOOLEAN NOT NULL , `pets_price` DECIMAL(10,2) NOT NULL , `species_id` INT NOT NULL , `breeds_id` INT NOT NULL , `toys_id` INT NOT NULL , PRIMARY KEY (`pets_id`)) ENGINE = InnoDB;

CREATE TABLE `awb_project`.`species` (`species_id` INT NOT NULL AUTO_INCREMENT , `species_name` VARCHAR(255) NOT NULL , `species_price` DECIMAL(10,2) NOT NULL , PRIMARY KEY (`species_id`)) ENGINE = InnoDB;

CREATE TABLE `awb_project`.`breeds` (`breeds_id` INT NOT NULL AUTO_INCREMENT , `breeds_name` VARCHAR(255) NOT NULL , `breeds_is_mixed` BOOLEAN NOT NULL , `breeds_price` DECIMAL(10,2) NOT NULL , `species_id` INT NOT NULL , PRIMARY KEY (`breeds_id`)) ENGINE = InnoDB;

CREATE TABLE `awb_project`.`toys` (`toys_id` INT NOT NULL AUTO_INCREMENT , `toys_name` VARCHAR(255) NOT NULL , `toys_price` DECIMAL(10,2) NOT NULL , PRIMARY KEY (`toys_id`)) ENGINE = InnoDB;

<!-- Adding the Foreign Keys into the Pet's Table --> 
ALTER TABLE `pets` ADD CONSTRAINT `species_id` FOREIGN KEY (`species_id`) REFERENCES `species`(`species_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pets` ADD CONSTRAINT `breeds_id` FOREIGN KEY (`breeds_id`) REFERENCES `breeds`(`breeds_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pets` ADD CONSTRAINT `toys_id` FOREIGN KEY (`toys_id`) REFERENCES `toys`(`toys_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

<!-- adding stuff inside the species table -->
INSERT INTO `species` (`species_id`, `species_name`, `species_price`) VALUES (NULL, 'cat', '250'), (NULL, 'dog', '210')

<!-- adding stuff inside the breeds table -->
INSERT INTO `breeds` (`breeds_id`, `breeds_name`, `breeds_is_mixed`, `breeds_price`, `species_id`) VALUES (NULL, 'siamese', '0', '210', '1'), (NULL, 'russian blue', '1', '200', '1')

INSERT INTO `breeds` (`breeds_id`, `breeds_name`, `breeds_is_mixed`, `breeds_price`, `species_id`) VALUES (NULL, 'golden retriever', '1', '160', '2'), (NULL, 'husky', '0', '900', '2')

<!-- adding stuff inside the toys table -->
INSERT INTO `toys` (`toys_id`, `toys_name`, `toys_price`) VALUES (NULL, 'frisbee', '30'), (NULL, 'tennis ball', '20')

<!-- adding stuff inside the pets table -->
INSERT INTO `pets` (`pets_id`, `pets_name`, `pets_age`, `pets_gender`, `pets_neutered`, `pets_price`, `species_id`, `breeds_id`, `toys_id`) VALUES (NULL, 'eli', '2', 'female', '1', '999', '1', '4', '2'), (NULL, 'pelusa', '2', 'male', '0', '320', '1', '3', '1'), (NULL, 'sussy', '10', 'female', '0', '160', '2', '5', '1'), (NULL, 'taffy', '6', 'male', '1', '420', '2', '6', '2')

<!-- joining the species, breeds and toys table into the pets table -->
SELECT * FROM `pets` NATURAL JOIN breeds NATURAL JOIN species NATURAL JOIN toys;