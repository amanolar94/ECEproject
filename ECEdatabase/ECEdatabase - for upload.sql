


ALTER DATABASE ece8118sql1 CHARACTER SET utf8 COLLATE utf8_general_ci;
-- -----------------------------------------------------
-- Table `ece8118sql1`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`user` (
  `username` VARCHAR(10) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `bdate` DATE NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
  `htel` BIGINT UNSIGNED NOT NULL,
  `mtel` BIGINT UNSIGNED NOT NULL,
  `role` VARCHAR(10) NOT NULL,
  `image_name` VARCHAR(100) NOT NULL DEFAULT 'nick.png',
  `image_path` VARCHAR(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`),
  UNIQUE INDEX `maill_UNIQUE` (`mail` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`sector`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`sector` (
  `sector_id` TINYINT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`sector_id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`faculty`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`faculty` (
  `faculty_username` VARCHAR(10) NOT NULL,
  `title` VARCHAR(20) NOT NULL,
  `bio_1` TEXT NULL,
  `bio_2` TEXT NULL,
  `bio_3` TEXT NULL,
  `publications` TEXT NULL,
  `citations` TEXT NULL,
  `hours` MEDIUMTEXT NULL,
  `scholar` VARCHAR(50)  NOT NULL DEFAULT '',
  `facultysectorid` TINYINT NOT NULL,
  PRIMARY KEY (`faculty_username`),
  INDEX `facultysectorid_idx` (`facultysectorid` ASC),
  CONSTRAINT `fid`
    FOREIGN KEY (`faculty_username`)
    REFERENCES `ece8118sql1`.`user` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `facultysectorid`
    FOREIGN KEY (`facultysectorid`)
    REFERENCES `ece8118sql1`.`sector` (`sector_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`student` (
  `student_username` VARCHAR(10) NOT NULL,
  `studentsectorid` TINYINT NOT NULL DEFAULT '1',
  `enrolled` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `studentsectorid_idx` (`studentsectorid` ASC),
  PRIMARY KEY (`student_username`),
  CONSTRAINT `sid1`
    FOREIGN KEY (`student_username`)
    REFERENCES `ece8118sql1`.`user` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `studentectorid`
    FOREIGN KEY (`studentsectorid`)
    REFERENCES `ece8118sql1`.`sector` (`sector_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`secratery`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`secratery` (
  `secretary_username` VARCHAR(45) NOT NULL,
  `job` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`secretary_username`),
  INDEX `sid_idx` (`secretary_username` ASC),
  CONSTRAINT `sid`
    FOREIGN KEY (`secretary_username`)
    REFERENCES `ece8118sql1`.`user` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`announcement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`announcement` (
  `announcement_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` TEXT NOT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`announcement_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`tags` (
  `tags_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tags_name` VARCHAR(20) NOT NULL,
  `tag_date` DATE NOT NULL,
  PRIMARY KEY (`tags_id`),
  UNIQUE INDEX `tags_name_UNIQUE` (`tags_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`post` (
  `announcementid` INT UNSIGNED NOT NULL,
  `secretaryusername` VARCHAR(45) NOT NULL,
  `tagid` INT UNSIGNED NULL,
  `post_timedate` DATETIME NOT NULL,
  INDEX `announcementid_idx` (`announcementid` ASC),
  INDEX `secretaryusername_idx` (`secretaryusername` ASC),
  INDEX `tagid_idx` (`tagid` ASC),
  PRIMARY KEY (announcementid , secretaryusername, tagid),
  CONSTRAINT `announcementid`
    FOREIGN KEY (`announcementid`)
    REFERENCES `ece8118sql1`.`announcement` (`announcement_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `secretaryusername`
    FOREIGN KEY (`secretaryusername`)
    REFERENCES `ece8118sql1`.`secratery` (`secretary_username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `tagid`
    FOREIGN KEY (`tagid`)
    REFERENCES `ece8118sql1`.`tags` (`tags_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;




-- -----------------------------------------------------
-- Table `ece8118sql1`.`subject`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`subject` (
  `code` VARCHAR(10) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `type` VARCHAR(10) NOT NULL,
  `description` TEXT NOT NULL,
  `ects` TINYINT NOT NULL,
  `dm` TINYINT NOT NULL,
  `teach_year` VARCHAR(1) NOT NULL,
  `semester` VARCHAR(10) NOT NULL,
  `webpage` VARCHAR(45) NOT NULL DEFAULT '#',
  `eclass_link` VARCHAR(45) NOT NULL DEFAULT '#',
  `exam_type` VARCHAR(45) NULL,
  `evaluation` BLOB NULL,
  `subjectsectorid` TINYINT NOT NULL,
  PRIMARY KEY (`code`),
  CONSTRAINT `subjectsectorid`
    FOREIGN KEY (`subjectsectorid`)
    REFERENCES `ece8118sql1`.`sector` (`sector_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`connected`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`connected` (
  `connected1_code` VARCHAR(10) NULL,
  `connected2_code` VARCHAR(10) NULL,
  PRIMARY KEY (`connected1_code`,`connected2_code`),
  INDEX `connected1_code_idx` (`connected1_code` ASC),
  INDEX `connected2_code_idx` (`connected2_code` ASC),
  
  CONSTRAINT `connected1_code`
    FOREIGN KEY (`connected1_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `connected2_code`
    FOREIGN KEY (`connected2_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`required`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`required` (
  `subject_code` VARCHAR(10) NULL,
  `required_code` VARCHAR(10) NULL,
  INDEX `rsubject_code_idx` (`subject_code` ASC),
  INDEX `required_code_idx` (`required_code` ASC),
  PRIMARY KEY (`subject_code`,`required_code`),
  CONSTRAINT `subject_code`
    FOREIGN KEY (`subject_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `required_code`
    FOREIGN KEY (`required_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`book`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`book` (
  `isbn` VARCHAR(30) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `desciption` TEXT NOT NULL,
  `writer` VARCHAR(45) NOT NULL,
  `issue_date` YEAR(4) NOT NULL,
  `enumber` VARCHAR(45) NOT NULL,
  `publication_number` VARCHAR(3) NOT NULL,
  `publisher` VARCHAR(50) NOT NULL,
  `frontpage` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`isbn`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`subjectbook`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`subjectbook` (
  `subject_code` VARCHAR(10) NOT NULL,
  `book_isbn` VARCHAR(30) NOT NULL,
  INDEX `subject_code_idx` (`subject_code` ASC),
  INDEX `subject_book_idx` (`book_isbn` ASC),
  PRIMARY KEY (`subject_code`,`book_isbn`) , 
  CONSTRAINT `subject_code2`
    FOREIGN KEY (`subject_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `subject_book`
    FOREIGN KEY (`book_isbn`)
    REFERENCES `ece8118sql1`.`book` (`isbn`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`attends`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`attends` (
  `username` VARCHAR(10) NOT NULL,
  `subject_code` VARCHAR(10) NOT NULL,
  `grade` DECIMAL(10,1) NOT NULL DEFAULT '0',
  `on_schedule` TINYINT NOT NULL DEFAULT '0',
  `rating` TINYINT NOT NULL DEFAULT '-1',
  INDEX `username_idx` (`username` ASC),
  INDEX `sunject_code_idx` (`subject_code` ASC),
  PRIMARY KEY (`username`,`subject_code`),
  CONSTRAINT `username`
    FOREIGN KEY (`username`)
    REFERENCES `ece8118sql1`.`student` (`student_username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `sunject_code`
    FOREIGN KEY (`subject_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`comment` (
  `comment_id` INT NOT NULL AUTO_INCREMENT,
  `comment_username` VARCHAR(10) NOT NULL,
  `subject_code` VARCHAR(10) NOT NULL,
  `content` TEXT NOT NULL,
  `timedate` DATETIME NOT NULL,
  `approved` smallint NOT NULL DEFAULT '0',
  INDEX `username_idx` (`comment_username` ASC),
  INDEX `sunject_code_idx` (`subject_code` ASC),
  PRIMARY KEY (`comment_id`),
  CONSTRAINT `username0`
    FOREIGN KEY (`comment_username`)
    REFERENCES `ece8118sql1`.`student` (`student_username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `sunject_code0`
    FOREIGN KEY (`subject_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`class` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `class_name` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ece8118sql1`.`teaching`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ece8118sql1`.`teaching` (
  `teaching_id` INT NOT NULL AUTO_INCREMENT UNIQUE,
  `teacher_username` VARCHAR(10) NOT NULL,
  `class_id` INT NOT NULL,
  `teaching_subject_code` VARCHAR(10) NOT NULL,
  `teaching_day` VARCHAR(10) NOT NULL,
  `beginning_time` TIME NOT NULL,
  `end_time` TIME NOT NULL,
  INDEX `teacher_username_idx` (`teacher_username` ASC),
  INDEX `class_id_idx` (`class_id` ASC),
  INDEX `teaching_subject_code_idx` (`teaching_subject_code` ASC),
  PRIMARY KEY (`class_id`,`teaching_day`,`beginning_time`,`end_time`),
  CONSTRAINT `teacher_username`
    FOREIGN KEY (`teacher_username`)
    REFERENCES `ece8118sql1`.`faculty` (`faculty_username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_class_id`
    FOREIGN KEY (`class_id`)
    REFERENCES `ece8118sql1`.`class` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `teaching_subject_code`
    FOREIGN KEY (`teaching_subject_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `ece8118sql1`.`was_teaching` (
  `t_username` VARCHAR(10) NOT NULL,
  `t_subject_code` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`t_username`,`t_subject_code`),
  CONSTRAINT `t_username`
    FOREIGN KEY (`t_username`)
    REFERENCES `ece8118sql1`.`faculty` (`faculty_username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `t_subject_code`
    FOREIGN KEY (`t_subject_code`)
    REFERENCES `ece8118sql1`.`subject` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


