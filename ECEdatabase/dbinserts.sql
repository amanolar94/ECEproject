
INSERT INTO sector(name) VALUES ('Κορμός');
INSERT INTO sector(name) VALUES ('Ηλεκτρονικής & Υπολογιστών');
INSERT INTO sector(name) VALUES ('Τηλεπικοινωνιών & Τεχνολογίας Πληροφορίας');
INSERT INTO sector(name) VALUES ('Συστημάτων Αυτομάτου Ελέγχου');
INSERT INTO sector(name) VALUES ('Συστημάτων Ηλεκτρικής ενέργειας');
INSERT INTO sector(name) VALUES ('Μεταπτυχιακό');


INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('ece8118' , 'ece8118' , 'Αριστος Μανωλαράκης' ,'1994-10-27' , 'Σχολείου 9' , 'ece8118@upnet.gr' , '2106011019' , '6977263773' , 'student');
INSERT INTO student(student_username,enrolled) VALUES ('ece8118','2017-09-10 16:38:15');
INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('ece8220' , 'ece8220' , 'Βαγγελης  Μεγατσε' ,'1994-04-20' , 'Σχολείου 91' , 'ece8220@upnet.gr' , '2106221019' , '6977232773' , 'student');
INSERT INTO student(student_username,enrolled) VALUES ('ece8220','2017-09-10 16:38:15');
INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('ece8110' , 'ece8110' , 'Κυριος Αυγολεμονος' ,'1994-1-27' , 'Αρισταρχου 9' , 'ece8110@upnet.gr' , '2106031019' , '6937263773' , 'student');
INSERT INTO student(student_username,enrolled) VALUES ('ece8110','2017-09-10 16:38:15');
INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('ece8111' , 'ece8111' , 'Νικ Στεφανης' ,'1994-2-24' , 'Τριποντου 9' , 'ece8111@upnet.gr' , '2106011719' , '6977255773' , 'student');
INSERT INTO student(student_username,enrolled) VALUES ('ece8111','2017-09-10 16:38:15');
INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('ece8119' , 'ece8119' , 'Σπανουλης Μπρικ' ,'1994-2-22' , 'Φραγκου 9' , 'ece8119@upnet.gr' , '2106011339' , '6977269973' , 'student');
INSERT INTO student(student_username,enrolled) VALUES ('ece8119','2017-09-10 16:38:15');
INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('ece8000' , 'ece8000' , 'Στεφανος Χιος' ,'1994-12-27' , 'Χαλαρου 9' , 'ece8000@upnet.gr' , '2106011129' , '6977268973' , 'student');
INSERT INTO student(student_username,enrolled) VALUES ('ece8000','2017-09-10 16:38:15');


INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('admin' , 'admin' , 'Τάκης Σούκας' ,'1980-10-27' , 'Ακάκλυπτου 5' , 'admin@upatras.gr' , '2106012258' , '9687265789' , 'secretary');
INSERT INTO secratery(secretary_username,job) VALUES ('admin','anakoinwsakias' );



INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('teacher' , 'teacher' , 'Νικόλαος Αβούρης' ,'1980-10-27' , 'unknown' , 'mail' , '2106012589' , '697728959' , 'teacher');

INSERT INTO faculty(faculty_username,title,publications,citations,hours,facultysectorid) VALUES ('teacher','Καθηγητής','blah blah blah blah' , 'blah blah blah blah' , 'Τρίτη 10:00-12:00 Τετάρτη 14:00-15:00' ,  '2' );

INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('teacher2' , 'teacher2' , 'Μπάμπης Σουγιάς' ,'1980-10-27' , 'unknown' , 'mail2' , '2106012589' , '697728959' , 'teacher');

INSERT INTO faculty(faculty_username,title,publications,citations,hours,facultysectorid) VALUES ('teacher2','Καθηγητής','blah blah blah blah' , 'blah blah blah blah' , 'Τρίτη 10:00-12:00 Τετάρτη 14:00-15:00' , '2' );

INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('teacher3' , 'teacher3' , 'Κύριος Αυγολέμονος' ,'1980-10-27' , 'unknown' , 'egglemon@mail.com' , '2106012589' , '697728959' , 'teacher');

INSERT INTO faculty(faculty_username,title,publications,citations,hours,facultysectorid) VALUES ('teacher3','Καθηγητής','blah blah blah blah' , 'blah blah blah blah' , 'Τρίτη 10:00-12:00 Τετάρτη 14:00-15:00' , '2' );

INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('teacher4' , 'teacher4' , 'ΑΝΤΩΝΑΡΟΣ τζεσ' ,'1980-4-2' , 'unknown' , 'eaelemon@mail.com' , '2109912589' , '6977aa959' , 'teacher');

INSERT INTO faculty(faculty_username,title,publications,citations,hours,facultysectorid) VALUES ('teacher4','Καθηγητής','blah blah blah blah' , 'blah blah blah blah' , 'Τρίτη 10:00-12:00 Τετάρτη 14:00-15:00' , '3' );

INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('teacher5' , 'teacher5' , 'ΝΟ ΧΟΜΟ' ,'1980-1-7' , 'unknown' , 'eaedfon@mail.com' , '2106092589' , '697128959' , 'teacher');

INSERT INTO faculty(faculty_username,title,publications,citations,hours,facultysectorid) VALUES ('teacher5','Καθηγητής','blah blah blah blah' , 'blah blah blah blah' , 'Τρίτη 10:00-12:00 Τετάρτη 14:00-15:00' , '4' );

INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role) VALUES ('teacher6' , 'teacher6' , 'Ζελας Ζελοσ' ,'1943-11-28' , 'unknown' , 'eeremon@mail.com' , '2109812589' , '697712959' , 'teacher');

INSERT INTO faculty(faculty_username,title,publications,citations,hours,facultysectorid) VALUES ('teacher6','Καθηγητής','blah blah blah blah' , 'blah blah blah blah' , 'Τρίτη 10:00-12:00 Τετάρτη 14:00-15:00' , '5' );
INSERT INTO tags(tags_name,tag_date) VALUES('Γενικές',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Προπτυχιακές',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Μεταπτυχιακές',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Διδακτορικές',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Υποτροφίες',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Συνέδρια',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Μεταπτυχιακά',CURRENT_DATE);
INSERT INTO tags(tags_name,tag_date) VALUES('Προκυρήξεις',CURRENT_DATE);

INSERT INTO announcement(title,content) VALUES('Σπερο Σπερες','Τι γινετια ρε μαγκες?χαλαρο projectακι μεχρι τις 4 το πρωι και καφεδακι μετα ψηνετε?..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget fermentum ipsum. Nunc eget lectus lorem. Phasellus eu lacus eget lectus facilisis ultricies. Nunc eleifend ante gravida dolor tincidunt hendrerit sit amet vitae diam. Suspendisse potenti. Vestibulum in blandit nisl, ac accumsan justo. In hac habitasse platea dictumst.

Nunc euismod sapien eget nisi convallis efficitur. Quisque suscipit lobortis est, posuere convallis diam porta non. Mauris luctus, velit nec pharetra tincidunt, elit erat hendrerit tellus, et sollicitudin elit purus id mi. In commodo pellentesque imperdiet. Mauris nulla diam, aliquet sed erat sit amet, volutpat condimentum magna. Sed ut dui blandit, fermentum lectus eget, molestie nulla. Fusce tempus massa turpis, eu eleifend magna semper id. Ut aliquam convallis fringilla. Nunc molestie molestie purus tincidunt maximus. Vestibulum mollis elit ut enim aliquam suscipit. Suspendisse potenti. In lobortis dictum magna in varius. Duis scelerisque dignissim metus ac semper. Suspendisse fermentum nibh at nibh facilisis, quis viverra sapien pellentesque.');
INSERT INTO announcement(title,content) VALUES('5 η ωρα','Και ακομα να τελιεωσει το project.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget fermentum ipsum. Nunc eget lectus lorem. Phasellus eu lacus eget lectus facilisis ultricies. Nunc eleifend ante gravida dolor tincidunt hendrerit sit amet vitae diam. Suspendisse potenti. Vestibulum in blandit nisl, ac accumsan justo. In hac habitasse platea dictumst.

Nunc euismod sapien eget nisi convallis efficitur. Quisque suscipit lobortis est, posuere convallis diam porta non. Mauris luctus, velit nec pharetra tincidunt, elit erat hendrerit tellus, et sollicitudin elit purus id mi. In commodo pellentesque imperdiet. Mauris nulla diam, aliquet sed erat sit amet, volutpat condimentum magna. Sed ut dui blandit, fermentum lectus eget, molestie nulla. Fusce tempus massa turpis, eu eleifend magna semper id. Ut aliquam convallis fringilla. Nunc molestie molestie purus tincidunt maximus. Vestibulum mollis elit ut enim aliquam suscipit. Suspendisse potenti. In lobortis dictum magna in varius. Duis scelerisque dignissim metus ac semper. Suspendisse fermentum nibh at nibh facilisis, quis viverra sapien pellentesque.');
INSERT INTO announcement(title,content) VALUES('Βαθμος project','Περιμενουμε τουλαχιστον χαλαρο 9αρακι jesus dhladdLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget fermentum ipsum. Nunc eget lectus lorem. Phasellus eu lacus eget lectus facilisis ultricies. Nunc eleifend ante gravida dolor tincidunt hendrerit sit amet vitae diam. Suspendisse potenti. Vestibulum in blandit nisl, ac accumsan justo. In hac habitasse platea dictumst.

Nunc euismod sapien eget nisi convallis efficitur. Quisque suscipit lobortis est, posuere convallis diam porta non. Mauris luctus, velit nec pharetra tincidunt, elit erat hendrerit tellus, et sollicitudin elit purus id mi. In commodo pellentesque imperdiet. Mauris nulla diam, aliquet sed erat sit amet, volutpat condimentum magna. Sed ut dui blandit, fermentum lectus eget, molestie nulla. Fusce tempus massa turpis, eu eleifend magna semper id. Ut aliquam convallis fringilla. Nunc molestie molestie purus tincidunt maximus. Vestibulum mollis elit ut enim aliquam suscipit. Suspendisse potenti. In lobortis dictum magna in varius. Duis scelerisque dignissim metus ac semper. Suspendisse fermentum nibh at nibh facilisis, quis viverra sapien pellentesque.');
INSERT INTO announcement(title,content) VALUES('Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget fermentum ipsum. Nunc eget lectus lorem. Phasellus eu lacus eget lectus facilisis ultricies. Nunc eleifend ante gravida dolor tincidunt hendrerit sit amet vitae diam. Suspendisse potenti. Vestibulum in blandit nisl, ac accumsan justo. In hac habitasse platea dictumst.

Nunc euismod sapien eget nisi convallis efficitur. Quisque suscipit lobortis est, posuere convallis diam porta non. Mauris luctus, velit nec pharetra tincidunt, elit erat hendrerit tellus, et sollicitudin elit purus id mi. In commodo pellentesque imperdiet. Mauris nulla diam, aliquet sed erat sit amet, volutpat condimentum magna. Sed ut dui blandit, fermentum lectus eget, molestie nulla. Fusce tempus massa turpis, eu eleifend magna semper id. Ut aliquam convallis fringilla. Nunc molestie molestie purus tincidunt maximus. Vestibulum mollis elit ut enim aliquam suscipit. Suspendisse potenti. In lobortis dictum magna in varius. Duis scelerisque dignissim metus ac semper. Suspendisse fermentum nibh at nibh facilisis, quis viverra sapien pellentesque.');
INSERT INTO announcement(title,content) VALUES('Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget fermentum ipsum. Nunc eget lectus lorem. Phasellus eu lacus eget lectus facilisis ultricies. Nunc eleifend ante gravida dolor tincidunt hendrerit sit amet vitae diam. Suspendisse potenti. Vestibulum in blandit nisl, ac accumsan justo. In hac habitasse platea dictumst.

Nunc euismod sapien eget nisi convallis efficitur. Quisque suscipit lobortis est, posuere convallis diam porta non. Mauris luctus, velit nec pharetra tincidunt, elit erat hendrerit tellus, et sollicitudin elit purus id mi. In commodo pellentesque imperdiet. Mauris nulla diam, aliquet sed erat sit amet, volutpat condimentum magna. Sed ut dui blandit, fermentum lectus eget, molestie nulla. Fusce tempus massa turpis, eu eleifend magna semper id. Ut aliquam convallis fringilla. Nunc molestie molestie purus tincidunt maximus. Vestibulum mollis elit ut enim aliquam suscipit. Suspendisse potenti. In lobortis dictum magna in varius. Duis scelerisque dignissim metus ac semper. Suspendisse fermentum nibh at nibh facilisis, quis viverra sapien pellentesque.');


INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('1' , 'admin' , '1' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('1' , 'admin' , '2' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('1' , 'admin' , '3' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('2' , 'admin' , '3' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('2' , 'admin' , '2' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('3' , 'admin' , '1' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('4' , 'admin' , '1' , CURRENT_TIMESTAMP);
INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES('5' , 'admin' , '1' , CURRENT_TIMESTAMP);

INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y101','Διαφορικός Λογισμός και Μαθηματική Ανάλυση','theory','Πραγματικοί Αριθμοί. Αξιώματα του R.
Bασικές τοπολογικές έννοιες στο R. Συναρ-
τήσεις μιας μεταβλητής. Συνέχεια σε σημείο.
Συνέχεια σε διάστημα. Παράγωγος. Διαφο-
ρικό συνάρτησης. Παράγωγος συνθέτου
συναρτήσεως και παράγωγοι ανωτέρας
τάξεως. Βασικά Θεωρήματα Διαφορικού
Λογισμού. Επαναληπτική μέθοδος επίλυσης
εξισώσεων. Ακρότατα. Ανάπτυγμα Taylor.
Σειρές Taylor. Ομοιόμορφη σύγκλιση ακο-
λουθίας συναρτήσεων και σειράς συναρτή-
σεων. Αόριστο Ολοκλήρωμα. Ολοκλήρωμα
Riemann. Βασικά Θεωρήματα ολοκληρωτι-
κού Λογισμού. Εμβαδά. Λείες καμπύλες. Μή-
κος καμπύλης. Προσεγγιστική ολοκλήρωση.
Ακολουθίες. Σύγκλιση ακολουθίας. Κριτήριο
Cauchy. Μονότονες ακολουθίες. Αριθμητικές
σειρές. Κριτήρια σύγκλισης. Απόλυτη και
υπό συνθήκη σύγκλιση. Εναλλάσσουσες
σειρές. Αναδιάταξη σειρών. Γινόμενο σειρών.
Δυναμοσειρά και ακτίνα σύγκλισής της. Γε-
νικευμένα Ολοκληρώματα. Βασικές προτά-
σεις συγκλίσεως. Απόλυτη σύγκλιση. Σύ-
γκλιση υπό συνθήκη.','6','6','A','xeimerino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y102','Φυσική Ι ','theory','Στοιχεία διανυσματικής ανάλυσης. Κίνηση
σε μία δύο τρεις διαστάσεις. Στατική. Οι νο-
μοι της κίνησης και εφαρμογές αυτών. Έργο
ενέργεια. Δυναμική ενέργεια και διατήρηση
της ενέργειας. Γραμμική ορμή και κρούσεις.
Περιστροφική κίνηση στερεού σώματος.
Κύλιση, στροφορμή, ροπή. Ελαστικότητα.
Ταλαντώσεις. Μηχανική ρευστών. Βαρύτη-
τα.','6','6','A','xeimerino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

  INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y1022','Εργαστήριο Φυσικής Ι ','lab','Description','6','6','A','xeimerino','Αναφορές','3/10','1');

 --
 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `webpage`, `eclass_link`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Υ103Ν','Εισαγωγή στους Υπολογιστές ','theory','Το μάθημα είναι εισαγωγικό στην επιστή-
μη των υπολογιστών και τον προγραμματι-
σμό με τη γλώσσα Python.
1 Ψηφιακή αριθμητική, αναπαράσταση α-
ριθμών. Ψηφιοποίηση Πληροφορίας. Κωδι-
κοποίηση χαρακτήρων. 2 Διαδικαστικός
προγραμματισμος με τη γλώσσα Python:
Αριθμητικές εκφράσεις και βασικές εντολές,
εντολές εισόδου/εξόδου, εντολές επιλογής, 3
Βρόχοι επανάληψης, συναρτήσεις βιβλιοθη-
κών (modules), συναρτήσεις οριζόμενες από
τον χρήστη. 4 Ακολουθίες, συμβολοσειρές,
λίστες και λεξικά. 5 Αρχεία, κλήσεις στο λει-
τουργικό σύστημα, 6. Αλγόριθμοι ταξινόμη-
σης και αναζήτησης, πολυπλοκότητα. 7 Α-
ντικειμενοστρεφής προγραμματισμός στην
Python, Ορισμός κλάσεων, δημιουργία αντι-
κειμένων, μέθοδοι, κληρονομικότητα, 8
Γραφικές διεπαφές χρήστη, προγραμματι-
σμός με tkinter. 9 Στοιχεία αρχιτεκτονικής
υπολογιστών Σύστημα Μνήμης, Ιεραρχία
μνήμης, Κεντρική Μονάδα Επεξεργασίας. 10
Λειτουργικά συστήματα: Διαχείριση διεργα-
σιών, Χρονοπρογραμματισμός διεργασιών,
Εικονική μνήμη. 11. Εισαγωγή στα δίκτυα
υπολογιστών και στο Διαδίκτυο. Δικτυακός
προγραμματισμός. 12. Ανάκτηση δεδομένων
από το διαδίκτυο. 13. Κοινωνική διάσταση
πληροφορικής, ελεύθερο λογισμικό.
Το μάθημα περιλαμβάνει εργαστηριακές
ασκήσεις που αφορούν αλγοριθμική και
προγραμματισμό και ομαδικές εργασίες.','7','7','A','xeimerino','	http://hci.ece.upatras.gr/index.php?option=com_content&task= view&id=177&Itemid=113','https://eclass.upatras.gr/courses/EE759/','Γραπτή στο τέλος του εξαμήνου, Project,Εξέταση εργαστηρίου','10/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y104','Γραμμική Άλγεβρα ','theory','Description','3','3','A','xeimerino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`,`eclass_link`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Υ111','Τεχνικό Σχέδιο ','theory','Description','5','5','A','xeimerino','https://eclass.upatras.gr/courses/EE895/','Γραπτή στο τέλος του εξαμήνου,Εξέταση εργαστηρίου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Ε133','Βιομηχανικό Μάρκετινγκ και Οργάνωση Δυναμικού Πωλήσεων ','theory','Description','3','3','A','xeimerino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Ε138 ','Ιστορία της Ευρωπαϊκής Λογοτεχνίας','theory','Description','3','3','A','xeimerino','Γραπτή στο τέλος του εξαμήνου','3/10','1');


 --
 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y105','Εισαγωγή στην Ψηφιακή Λογική','theory','Description','3','3','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');


 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`,  `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Υ201','Συναρτήσεις πολλών μεταβλητών & Διανυσματική Ανάλυση ','theory','Description','5','5','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y202','Φυσική ΙΙ ','theory','Description','6','6','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y204','Διαφορικές Εξισώσεις ','theory','Description','4','4','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`,  `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Y207','Αρχές Προγραμματισμού ','theory','Description','6','6','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');


 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_Υ210','Εισαγωγή στην Επιστήμη του Ηλεκτρολόγου Μηχανικού(Γελάμε)','theory','Description','3','3','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_ΞΓ220','Γαλλικά ','theory','Description','3','3','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_ΞΓ230','Γερμανικά ','theory','Description','3','3','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_ΞΓ240','Ρωσικά ','theory','Description','3','3','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');

 INSERT INTO `subject`(`code`, `title`,`type`, `description`, `ects`, `dm`, `teach_year`, `semester`, `exam_type`, `evaluation`, `subjectsectorid`)
 VALUES ('ECE_ΞΓ210','Αγγλικά ','theory','Description','3','3','A','earino','Γραπτή στο τέλος του εξαμήνου','3/10','1');
