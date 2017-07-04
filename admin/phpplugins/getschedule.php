<?php   
                                    require 'database_connect.php';
                                    $eksamino=$_POST['eksamino'];
                                    $etos=$_POST['etos'];
                                    $tomeas=$_POST['tomeas'];

                                    $sql="SELECT title,DATE_FORMAT(beginning_time, '%H:%i') AS start,DATE_FORMAT(end_time, '%H:%i') AS end FROM subject,teaching WHERE code=teaching_subject_code AND teaching_day='Monday' AND semester='xeimerino' AND teach_year='A' AND subjectsectorid='1';";
                                    $result = mysqli_query($conn,$sql);
                                    
                                    while($row = mysqli_fetch_array($result)) {
                                      echo '<li class="single-event" data-start="'.$row['start'].'" data-end="'.$row['end'].'"  data-content="math1" data-event="math1" >
                                              <a href="#0">
                                                <em class="event-name">'.$row['title'].'</em>
                                              </a>
                                            </li>';
                                    };

                                   ?>