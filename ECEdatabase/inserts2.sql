INSERT INTO `book`(`isbn`, `title`, `desciption`, `writer`, `issue_date`, `enumber`, `publication_number`,`publisher`, `frontpage`)
VALUES ('9789609427289','ΕΦΑΡΜΟΣΜΕΝΑ ΜΑΘΗΜΑΤΙΚΑ','ΑΝΩΤΕΡΑ, ΕΦΑΡΜΟΣΜΕΝΑ, ΜΑΘΗΜΑΤΙΚΑ','ΜΑΡΚΕΛΛΟΣ ΒΑΣΙΛΕΙΟΣ','2013','32998565','1','GOTSIS','math1.jpg');

INSERT INTO `book`(`isbn`, `title`, `desciption`, `writer`, `issue_date`, `enumber`, `publication_number`,`publisher`, `frontpage`)
VALUES ('978-618-5066-11-6','Μαθηματική Ανάλυση Ι','θεωρία λυμένες ασκήσεις παραδείγματα','Ρασσιάς Θ.','2014','41955063','1η','Τσότρας','anal.jpg');

INSERT INTO `book`(`isbn`, `title`, `desciption`, `writer`, `issue_date`, `enumber`, `publication_number`,`publisher`, `frontpage`)
VALUES ('978-960-418-342-5','Φυσική για Επιστήμονες και Μηχανικούς','Giancoli, Εκδόσεις Τζιόλα, Επιστήμονες, Κβαντομηχανική, Μηχανικούς, Νόμοι του Newton, Πανεπιστημιακή Φυσική, εφαρμογές, ηλεκτρισμός και μαγνητισμός, φυσική',' Giancoli','2011','18549052','4η','ΤΖΙΟΛΑ','giancoli.jpg');

INSERT INTO `book`(`isbn`, `title`, `desciption`, `writer`, `issue_date`, `enumber`, `publication_number`,`publisher`, `frontpage`)
VALUES ('978-960-01-1493-5','Φυσική','Μηχανική, Κυματική, Θερμοδυναμική','Halliday David, Resnick Robert, Walker Jearl','2012','18549053','1η','Gutenberg','physics.jpg');


INSERT INTO `book`(`isbn`, `title`, `desciption`, `writer`, `issue_date`, `enumber`, `publication_number`,`publisher`, `frontpage`)
VALUES ('978-960-491-084-7','Ψηφιακή Σχεδίαση','Verilog HDL, boole, digital design','Mano Morris, Ciletti Michael','2013','33153989','5η','Παπασωτηρίου','psif.jpg');



-- subject code
INSERT INTO `subjectbook`(`subject_code`, `book_isbn`) VALUES ('ECE_Y101','9789609427289');
INSERT INTO `subjectbook`(`subject_code`, `book_isbn`) VALUES ('ECE_Y101','978-618-5066-11-6');
INSERT INTO `subjectbook`(`subject_code`, `book_isbn`) VALUES ('ECE_Y102','978-960-418-342-5');
INSERT INTO `subjectbook`(`subject_code`, `book_isbn`) VALUES ('ECE_Y102','978-960-01-1493-5');
INSERT INTO `subjectbook`(`subject_code`, `book_isbn`) VALUES ('ECE_Y105','978-960-491-084-7');

-- classes
INSERT INTO `class`(`class_name`) VALUES ('ΗΛ1');
INSERT INTO `class`(`class_name`) VALUES ('ΗΛ2');
INSERT INTO `class`(`class_name`) VALUES ('ΗΛ3');
INSERT INTO `class`(`class_name`) VALUES ('ΗΛ4');
INSERT INTO `class`(`class_name`) VALUES ('ΗΛ5');

-- ΓΙΑ ΤΙΣ ΑΛΥΣΙΔΕΣ (ΓΙΑ ΤΗΝ ΟΙΚΟΝΟΜΙΑ ΤΗΣ ΑΣΚΗΣΗΣ ΕΣΤΩ ΟΤΙ Η ΦΥΣΙΚΗ 1 ΕΙΝΑΙ ΠΡΟΥΠΟΘΕΣΗ ΓΙΑ ΤΗ ΦΥΣΙΚΗ 2)
INSERT INTO `required`(`subject_code`, `required_code`) VALUES ('ECE_Y202','ECE_Y102');
INSERT INTO `required`(`subject_code`, `required_code`) VALUES ('ECE_Υ201','ECE_Y101');


-- Για τα μαθήματα που συνδέοντα

INSERT INTO `connected`(`connected1_code`, `connected2_code`) VALUES ('ECE_Y1022','ECE_Y102');

-- Για τα μαθήματα που παρακολουθεί ο φοιτητής (Αρχική τιμή στο grade 0)

INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y101');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y102');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y104');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y105');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y202');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y204');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Y207');
INSERT INTO `attends`(`username`, `subject_code`) VALUES ('ece8118','ECE_Υ103Ν');

-- Διδασκαλία από καθηγητή
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','2','ECE_Y101','Monday','10:00','12:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','2','ECE_Y102','Tuesday','10:00','12:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','2','ECE_Y101','Wednesday','10:00','12:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','2','ECE_Y101','Thursday','10:00','12:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','2','ECE_Y102','Thursday','12:00','14:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','2','ECE_Y1022','Thursday','14:00','18:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','3','ECE_Υ103Ν','Tuesday','13:00','15:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','4','ECE_Y1022','Tuesday','17:00','19:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher3','1','ECE_Y105','Monday','17:00','19:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher4','3','ECE_Y207','Friday','17:00','19:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','1','ECE_Ε133','Monday','12:00','14:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher3','5','ECE_ΞΓ210','Wednesday','12:00','14:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','5','ECE_ΞΓ220','Wednesday','14:00','16:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher5','5','ECE_ΞΓ230','Wednesday','18:00','20:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher6','5','ECE_ΞΓ240','Wednesday','09:00','10:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher3','5','ECE_Υ111','Monday','09:00','10:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','5','ECE_ΞΓ210','Monday','14:00','17:00');

INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','5','ECE_Υ210','Friday','09:00','10:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher2','5','ECE_Ε138','Friday','10:00','12:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher','3','ECE_Y104','Friday','12:00','13:00');
INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
VALUES ('teacher6','1','ECE_Y204','Friday','13:00','14:00');

-- Δίδασκε παλαιότερα.

INSERT INTO `was_teaching`(`t_username`, `t_subject_code`) VALUES ('teacher','ECE_Y105');

INSERT INTO `was_teaching`(`t_username`, `t_subject_code`) VALUES ('teacher3','ECE_Y101');


-- Σχόλιο από μαθητή για μάθημα

INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`,`approved`)
VALUES ('ece8118','ECE_Y101','bla bla bla bla bla bla bla bla bla bla bla bla bla bla', CURRENT_TIMESTAMP,'1');

INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`,`approved`)
VALUES ('ece8118','ECE_Y102','bla bla bla bla bla bla bla bla bla bla bla bla bla bla', CURRENT_TIMESTAMP,'1');

INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`)
VALUES ('ece8118','ECE_Y104','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum rutrum enim ultrices dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacus arcu, malesuada eu ligula non, bibendum congue arcu. Sed gravida augue et scelerisque facilisis. Maecenas auctor bibendum sagittis.', CURRENT_TIMESTAMP);

INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`)
VALUES ('ece8118','ECE_Y104','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum rutrum enim ultrices dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacus arcu, malesuada eu ligula non, bibendum congue arcu. Sed gravida augue et scelerisque facilisis. Maecenas auctor bibendum sagittis.', CURRENT_TIMESTAMP);

INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`)
VALUES ('ece8118','ECE_Y105','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum rutrum enim ultrices dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacus arcu, malesuada eu ligula non, bibendum congue arcu. Sed gravida augue et scelerisque facilisis. Maecenas auctor bibendum sagittis.', CURRENT_TIMESTAMP);

INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`)
VALUES ('ece8118','ECE_Y101','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum rutrum enim ultrices dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacus arcu, malesuada eu ligula non, bibendum congue arcu. Sed gravida augue et scelerisque facilisis. Maecenas auctor bibendum sagittis.', CURRENT_TIMESTAMP);
