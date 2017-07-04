$(document).ready(function(){
  $('[data-toggle="offcanvas"]').click(function(){
    $('#sidemenu').toggleClass("hidden-xsmall" )
  });
});



//Function for Search in announcements!!!!!!!!!!!!!!!/
function getPost() {
    $('#after_search').css("display","block");
    var str=$('.searchbar').val();
    if (str == "") {
        document.getElementById("results").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


                document.getElementById("results").innerHTML = this.responseText;
                

            }
        };
        xmlhttp.open("GET","postinfo - Copy.php?q="+str,true);
        xmlhttp.send();
    }

};

//For press Enter in Search
function enterpress(){

    $('.searchbar').keypress(function(e){
      if(e.keyCode==13)
      $('.gosearch').click();
    });

};

// AJAX SAVE ANNOUNCEMENT
$(document).ready(function(){
    $("#formsubmit").click(function(){
        var title=$('#title').val();
        var tagscount=$("select[name='tags[]'] option:selected").length;
        var announcement=$('#announcement').val();
        var tags = $("select[name='tags[]'] option:selected").val();
        

        if((tagscount==0) || (title=="") || (announcement=="")){
            $('#notsubmited').css("display","inline-block");
        }else{
            $('#notsubmited').css("display","none");
                    $.ajax({
                    type: "POST",

                    url: "add_announcement.php",
                    data: $('#announcement_form').serialize(),
                    cache: false,
                    success: function(result){
                        alert(result);
                        location.reload();}
        
                    });
            }
        


        return false;

    });
});


$(document).ready(function(){
    $('.clearsearch').click(function(){
        $('#results').empty();
        $('.search').val('');
        $('#after_search').css("display","none");

    });

});

// AJAX SAVE EDITED ANNOUNCEMENT
$(document).ready(function(){
    $("#editsubmit").click(function(){
        var title=$('#title').val();        
        var announcement=$('#announcement').val();     

        if((title=="") || (announcement=="")){
            $('#notsubmited').css("display","inline-block");
        }else{
            $('#notsubmited').css("display","none");
                    $.ajax({
                    type: "POST",
                    url: "phpplugins/edit_announcement_post.php",
                    data: $('#edit_form').serialize(),
                    cache: false,
                    success: function(result){
                        $('#submited').css("display","inline-block");

                        }
        
                    });
            }
        


        return false;
    });
});

// AJAX FOR DELETING ANNOUNCEMENT
$(document).ready(function(){
    $(document ).on("click",".delete",function(){   
        var r = confirm("Είστε σίγουροι ότι θέλετε να διαγράψετε την ανακοίνωση;");
        if (r == true) {
            var form_id = $(this).closest("form").attr('id');
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/deleteannouncement.php",
                    data:$('#' + form_id).serialize(),
                    cache: false,
                    success: function(result){
                        
                        location.reload();
                        

                        }
        
                    });
        } else {
            return false;
        
        }
        
    });
});

//Show tag edit!!!!
$(document).ready(function(){
    $(document).on("click",".editButton",function(){
        var form_id = $(this).closest("form").attr('id');
        $('#' + form_id).children('.edit_tag').css("display","inline-block");
        
    

    });
});

//Abort tag edit!!!!
$(document).ready(function(){
    $(document).on("click",".edit_abort",function(){
        var form_id = $(this).closest(".edit_tag").attr('id')
        $('#'+form_id).css("display","none");
        $(this).siblings("textarea").css("border-color","rgb(169, 169, 169)");
        
    

    });
});

// Save edited tag
$(document).ready(function(){
    $(document).on("click",".edit_save",function(){
        if($(this).siblings("textarea").val()===""){
            $(this).siblings("textarea").css("border-color","#E9322D");

        }else{
            var r = confirm("Μετατροπή ετικέτας?");
        if (r == true) {
            var form_id = $(this).closest("form").attr('id');
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/editTag.php",
                    data:$('#' + form_id).serialize(),
                    cache: false,
                    success: function(result){

        

                        
                        location.reload();
                        

                        }
        
                    });
        } else {
            return false;
            alert(result);
        
        
        }
        }


    });
});

// Delete  tag
$(document).ready(function(){
    $(document).on("click",".delete_tag",function(){
        var r = confirm("Διαγραφή ετικέτας?");
        if (r == true) {
            var form_id = $(this).closest("form").attr('id');
            
            $('#problem')
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/deleteTag.php",
                    data:{tag_id: $('#' + form_id +' #tagID').val()},
                    cache: false,
                    success: function(result){
                        
                        
                        
                        location.reload();
                        

                        }
        
                    });
        } else {
            return false;
            
            
        }


    });
});

//Create Tag
$(document).ready(function(){
    $('.create_tag').click(function(){
        if($('#tag_content').val()===""){
            $('#tag_content').css("border-color","#E9322D");

        }else{
            var tagvalues = $('#tag_content').val().split(",");
        for (i=0;i<tagvalues.length;i++){
                
                $.ajax({
                    type: "POST",
                    url: "phpplugins/createtag.php",
                    data:{tag: tagvalues[i]},
                    cache: false,
                    success: function(result){
                        
                    }

                });
            }

                
            
            
             
     location.reload(); 
        }  
    });

});

// Get students for the firt load
$(document).ready(function(){
    $.ajax({
                    type: "POST",
                    url: "phpplugins/getusers.php",
                    data:{user: $("input[name='user']:checked").val()},
                    cache: false,
                    success: function(result){
                        $('.users').empty();
                        $('.users').append(result);
                        
                    }

                });

});

// Get the users!!!!!!
$(document).ready(function(){
    $("input[name='user']").change(function(){
        $.ajax({
                    type: "POST",
                    url: "phpplugins/getusers.php",
                    data:{user: $("input[name='user']:checked").val()},
                    cache: false,
                    success: function(result){
                        $('.users').empty();
                        $('.users').append(result);
                        
                    }

                });



    });
});


// user search!!!!!
$(document).ready(function(){
    $('.usersearch').keyup(function(){
            $.ajax({
                    type: "POST",
                    url: "phpplugins/usersearch.php",
                    data: {searchvalue: $('.usersearch').val()},
                    cache: false,
                    success: function(result){
                        $('.users').empty();
                        $('.users').append(result);
                        
                        
        
                    }
                });

        
        
    });

});



// Check if form is filled
$(document).ready(function(){
    $('#create').click(function()
{
  var valid=true;
  var fields = ["mail", "username", "password", "conf_password", "name", "address","bdate","htel","mtel"];
  if($("#type").val()!='student'){
    if($("input[name='position']").val().length===0){
        var radio_checked=!$('.radio_sector').is(':checked');
        if( $("input[name='title']").val().length===0 || radio_checked  ){
            var valid = false;

        }

    
  }

  }
  
  

  

  var i, l = fields.length;
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if ($("input[name='"+fieldname+"']").val() === "") {
      var valid = false;
      
    }
  }
  // Έλεγχος αν έχουν συμπληρωθεί όλα τα πεδία
  if(valid){
    var ck_username = /^[A-Za-z0-9_]{3,20}$/;
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i ;
    var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var ck_htel =  /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/ ;
    var ck_mtel =  /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/ ;
    var username= $('#username').val();
    var mail= $('#mail').val();
    var password= $('#password').val();
    var htel= $('#htel').val();
    var mtel= $('#mtel').val();
    // Έλεγχος αν οι τιμές είναι σωστές 
    if(ck_username.test(username) && ck_email.test(mail) && ck_password.test(password) && ck_htel.test(htel) && ck_mtel.test(mtel)){
        var pass=$.trim($('#password').val());
        var passrep=$.trim($('#conf_password').val());
        if(pass==passrep){
            // Έλεγχος αν υπάρχει ήδη χρήστης με αυτό mail στη βάση
            $.ajax({
              url: "phpplugins/mailexists.php",
              type: 'POST',
              data: {mail: $('#mail').val()},
              success: function(result) {
                if(result==1){
                    // Έλεγχος αν υπάρχει ήδη χρήστης με το ίδιο username στη βάση
                    $.ajax({
                      url: "phpplugins/usernameexists.php",
                      type: 'POST',
                      data: {mail: $('#username').val()},
                      success: function(result) {
                        if(result==1){
                            // εδώ στέλνουμε τα δεδομένα για αποθήκευση!!!!
                            $.ajax({
                              url: "phpplugins/addnewuser.php",
                              type: 'POST',
                              data: $('#new_user').serialize(),
                              success: function(result) {
                                alert("New user added");
                                window.location.replace("http://localhost/template/admin/users.php");
                                
                              }
                            });
                            



                        }
                      }
                    });






                    
                }
              }
            });

        }

    }


  }else{
    alert("All fields must be completed");
}
  
});

});

//Options for type
$(document).ready(function(){
    $('#type').change(function(){
        if($('#type').val()=='secretary'){
            $('.position_col').css("display","inline-block");
            $('#sector').css("display","none");
            $(".radio_sector").prop('checked',false);
            $("input[name='title']").val('');
            $('.title_col').css("display","none");

        }else if($('#type').val()=='faculty'){
            $('.title_col').css("display","inline-block");
            $('.position_col').css("display","none");
            $("input[name='position']").val('');
            $('#sector').css("display","inline-block");
        }else{
            $('.title_col').css("display","none");
            $('.position_col').css("display","none");
            $("input[name='position']").val('');
            $("input[name='title']").val('');
            $('#sector').css("display","none");
            $(".radio_sector").prop('checked',false);
        }

        
    });

});


//Check if passwords are the same
$(document).ready(function(){
    $('#conf_password').keyup(function(){
        var pass=$.trim($('#password').val());
        var passrep=$.trim($('#conf_password').val());
        if(pass!=passrep){
            $('.same_pas_warning ').css("display","inline-block");
        }else{
            $('.same_pas_warning ').css("display","none");
        }

    });

});

$(document).ready(function(){
    $('#password').keyup(function(){
        if($('#conf_password').val.length>1){
        var pass=$.trim($('#password').val());
        var passrep=$.trim($('#conf_password').val());
        if(pass!=passrep){
            $('.same_pas_warning ').css("display","inline-block");
        }else{
            $('.same_pas_warning ').css("display","none");
        }
        }else{
            $('.same_pas_warning ').css("display","none");
        }

    });

});

// Check if the email already exists
$(document).ready(function(){
    $('#mail').blur(function(){
        $.ajax({
              url: "phpplugins/mailexists.php",
              type: 'POST',
              data: {mail: $('#mail').val()},
              success: function(result) {
                if(result==1){
                    $('.mail_warning').css("display","none");
                }else{
                    $('.mail_warning').css("display","block");
                }
              }
            });

    });

});

// Check if the username already exists
$(document).ready(function(){
    $('#username').blur(function(){
        $.ajax({
              url: "phpplugins/usernameexists.php",
              type: 'POST',
              data: {mail: $('#username').val()},
              success: function(result) {
                if(result==1){
                    $('.username_warning').css("display","none");
                }else{
                    $('.username_warning').css("display","block");
                }
              }
            });

    });

});

// Check username
$(document).ready(function(){
    $('#username').blur(function(){
        var ck_username = /^[A-Za-z0-9_]{3,20}$/;
        var username= $('#username').val();
        if(!ck_username.test(username)){
            $('#username').popover('show'); 
            $('#username').css("border-color","#E9322D"); 
        }else{
            $('#username').popover('hide'); 
            $('#username').css("border-color","#ccc"); 
        }

    });

});

// Check mail
$(document).ready(function(){
    $('#mail').blur(function(){
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i ;
        var mail= $('#mail').val();
        if(!ck_email.test(mail)){
            $('#mail').popover('show'); 
            $('#mail').css("border-color","#E9322D"); 
        }else{
            $('#mail').popover('hide'); 
            $('#mail').css("border-color","#ccc"); 
        }

    });

});

// Check password
$(document).ready(function(){
    $('#password').blur(function(){
        var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var password= $('#password').val();
        if(!ck_password.test(password)){
            $('#password').popover('show'); 
            $('#password').css("border-color","#E9322D"); 
        }else{
            $('#password').popover('hide'); 
            $('#password').css("border-color","#ccc"); 
        }

    });

});


// Check Home telephone
$(document).ready(function(){
    $('#htel').blur(function(){
        var ck_htel =  /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/ ;
        var htel= $('#htel').val();
        if(!ck_htel.test(htel)){
            $('#htel').popover('show'); 
            $('#htel').css("border-color","#E9322D"); 
        }else{
            $('#htel').popover('hide'); 
            $('#htel').css("border-color","#ccc"); 
        }

    });

});

// Check mobile telephone
$(document).ready(function(){
    $('#mtel').blur(function(){
        var ck_mtel =  /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/ ;
        var mtel= $('#mtel').val();
        if(!ck_mtel.test(mtel)){
            $('#mtel').popover('show'); 
            $('#mtel').css("border-color","#E9322D"); 
        }else{
            $('#mtel').popover('hide'); 
            $('#mtel').css("border-color","#ccc"); 
        }

    });

});
$(document).ready(function(){
    $(document).on("click",".subject",function(){
        var start=$(this).attr("data-start");
        var end=$(this).attr("data-end");
        var color=$(this).css("background-color");
        $('.modal-header').css("background-color",color);
        $.ajax({
                              url: "phpplugins/subject_info.php",
                              type: 'POST',
                              data: {code: $(this).attr("id")},
                              dataType:"json",
                              success: function(info) {
                                
                                var time= start+"-"+end;
                                $('.modal_time').html(time);
                                $('.modal_title').html('<b>'+info[0]+'</b>');
                                $('.modal-body div').html(info[1]);
                                $('.modal_class').html(info[2]);
                                var teacher =info.slice(3);
                                var teacher_string = teacher.join(", ");
                                $('.modal_teacher').html('<br>'+teacher_string);
                                
                                
                                
                                
                              }
                            });


        
    });
});
    
$(document).ready(function(){
    $(document).on("click",".delete_comment",function(){

         var r = confirm("Είστε σίγουροι ότι θέλετε να διαγράψετε το σχόλιο;");
            if (r == true) {
            $.ajax({
              url: "phpplugins/delete_comment.php",
              type: 'POST',
              data: {comment_id: $(this).attr("name")},
              success: function(result) {
                alert(result);
                location.reload();
                
              }
            });
        } else {
            return false;
        
        }
        
         
    });
});

$(document).ready(function(){
    $(document).on("click",".approve_comment",function(){

         var r = confirm("Έγκριση σχολίου;");
            if (r == true) {
            $.ajax({
              url: "phpplugins/approve_comment.php",
              type: 'POST',
              data: {comment_id: $(this).attr("name")},
              success: function(result) {
                location.reload();
                
              }
            });
        } else {
            return false;
        
        }
        
         
    });
});

$(document).ready(function(){
    $(document).on("click",".unapprove_comment",function(){

         var r = confirm("Αναίρεση έγκρισης;");
            if (r == true) {
            $.ajax({
              url: "phpplugins/unapprove_comment.php",
              type: 'POST',
              data: {comment_id: $(this).attr("name")},
              success: function(result) {
                location.reload();
                
              }
            });
        } else {
            return false;
        
        }
        
         
    });
});
// For secretary
$(document).ready(function(){
    $(document).on("click",".edit-subject",function(){
        // alert($(this).attr("id"));
        $.ajax({
              url: "phpplugins/subject-edit.php",
              type: 'POST',
              data: {code: $(this).attr("id")},
              dataType: "json",
              success: function(json) {
                $('.subject-code').html(json.subject_info[0]);
                $('.subject-title').html(json.subject_info[1]);
                $('.subject-description').html(json.subject_info[2]);
                $('#ects').val(json.subject_info[4]);
                $('#dm').val(json.subject_info[3]);
                $('.subject-year').val(json.subject_info[5]);
                $('.subject-semester').html(json.subject_info[6]);
                $('.subject-sector').val(json.subject_info[10]);
                $('.webpage').attr("href",json.subject_info[7]);
                $('.eclass').attr("href",json.subject_info[8]);
                $('.add-teacher').attr("data-id",json.subject_info[0]);
                $('.mean-grade').html(json.subject_info[12]);
                $('.mean-rating').html(json.subject_info[13]);
                
                
                

                var i;
                for(i=0;i<=json.schedule_count;i++){
                    $('#teaching-schedule').append('<span class="teaching"><div class="pull-left "><input type="text" class="'+json.teaching_id[i]+'" value="'+json.teaching_day[i]+'" id="teaching-day" name="teaching-day"> &nbsp;</div><div class="teaching-hour"><input class="pull-left" type="text" value="'+json.start_time[i]+'" id="start-time" name="start-time"><input class="pull-left" type="text" value="'+json.end_time[i]+'" id="end-time" name="end-time"></div><div class="btn btn-primary save-schedule">Save</div></span><br><br>');
                }
                $(".teach-class option[value='"+json.subject_info[9]+"']").attr("selected","selected");
                $("option[name=option-subject]").addClass(json.subject_info[0]);

                $('.subject-menu').css("display","none");
                $('.all-subjects').css("display","none");
                $('#new_teacher').attr("data-subject-id",json.subject_info[0]);
                $('.subject-part').css("display","inline-block");
                if(json.subject_info[11]>='1'){
                    $('.subject-comments').val(json.subject_info[0]);
                    $('.comments-title').val(json.subject_info[1]);
                    $('.comment-form').css("display","inline-block");
                }else{
                    $('.comment-form').css("display","none");

                }
                for(i=0;i<=json.teacher_count;i++){
                    $('.current-teachers').append('<tr><td>'+json.teachers[i]+'</td><td class="btn btn-primary pull-right delete-teacher" id="'+json.subject_info[0]+'" data-teacher="'+json.teacher_username[i]+'">Αφαίρεση</td></tr><br>')
                }
                if(json.past_teacher_count>=0){
                    
                    for(i=0;i<=json.past_teacher_count;i++){
                    $('.past-teachers').append('<tr><td>'+json.past_teachers[i]+'</td></tr>')
                }
                $('.table-past-teachers').css("display","inline-table");


                }else{
                    $('.table-past-teachers').css("display","none");
                }
                


                 

                



                
              }
            });


    });
});

$(document).ready(function(){
    $('#save-comment').click(function(){
        var r = confirm("Αποθήκευση σχολίου;");
            if (r == true) {
            $.ajax({
              url: "phpplugins/post_comment.php",
              type: 'POST',
              data: {comment: $(this).siblings("textarea").val(),subject: $(this).attr("data-subject"),user: $(this).attr("data-user") },
              success: function(result) {
                alert(result);
                location.reload();
                
              }
            });
        } else {
            return false;
        
        }



    });

});

$(document).ready(function(){
    $('.go-back').click(function(){
        $("option[name=option-subject]").removeClass();
        $('#teaching-schedule').empty();
        $('.subject-part').css("display","none");
        $('.subject-menu').css("display","inline-block");
        $('.all-subjects').css("display","inline-block");
        $('.current-teachers').empty();
        $('.table-past-teachers').css("display","none");
        $('.past-teachers').empty();
       $('.change-ects').css("display","none");
       $('.subject-description').replaceWith($('<p class="subject-description">'));



        

    })

});

$(document).ready(function(){
    $(document).on("click",".save-subject",function(){
        if($(this).siblings("textarea").val()===""){
            $(this).siblings("textarea").css("border-color","#E9322D");

        }else{
            var r = confirm("Μετατροπή ετικέτας?");
        if (r == true) {
            var form_id = $(this).closest("form").attr('id');
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/editTag.php",
                    data:$('#subject-form').serialize(),
                    cache: false,
                    success: function(result){

        

                        
                        // location.reload();
                        

                        }
        
                    });
        } else {
            return false;
            alert(result);
        
        
        }
        }


    });
});

$(document).ready(function(){
    $(document).on("click",".save-schedule",function(){
        var i=$(this).closest('span').attr("class");
        var id=$('.'+i+' div').find('#teaching-day').attr("class")
        var day=$('.'+i+' div').find('#teaching-day').val();
        var start=$('.'+i).find('#start-time').val();
        var end=$('.'+i).find('#end-time').val();
        if(end === "" || start === "" || day === ""){
            alert('All data must be filled');
        }else{
            var r = confirm("Αλλαγή προγράμματος;");
        if (r == true) {
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/save-schedule.php",
                    data:{id: id,day: day,start: start,end:end},
                    cache: false,
                    success: function(result){
                        alert(result);

        

                        
                        // location.reload();
                        

                        }
        
                    });
        } else {
            return false;
            alert(result);
        
        
        }
        }


    });
});

$(document).ready(function(){
    $('.teach-class').change(function(){
        var r = confirm("Αλλαγή αίθουσας διδασκαλίας;");
        if (r == true) {
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/change_class.php",
                    data:{class_id: $(this).val(),lesson_id: $(this).find('option').attr("class")},
                    cache: false,
                    success: function(result){
                        alert(result);
                        location.reload();

        

                        
                        
                        

                        }
        
                    });
        } else {
            return false;
            
        
        
        }

    });
});

$(document).ready(function(){
    $(document).on("click",".delete-teacher",function(){
        var r = confirm("θέλετε να αφαιρέσετε τον συγκεκριμένο καθηγητή από τους διδάσκοντες του μαθήματος;");
        if (r == true) {
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/remove_teacher.php",
                    data:{subject_id: $(this).attr("id"),teacher_id: $(this).attr("data-teacher")},
                    cache: false,
                    success: function(result){
                        var r = confirm(result+ "\nθέλετε να προσθέσετε κάποιον άλλο καθηγητή στους διδάσκοντες;");
                        if (r == true) {
                            $.redirect("add_teacher.php",{subject_id: $('.delete-teacher').attr("id")},"POST", "_blank");

                        }else{
                            location.reload();
                        }


                        

        

                        
                        
                        

                        }
        
                    });
        } else {
             
            return false;
            
        
        
        }
    });

});

$(document).ready(function(){
    $('.add-teacher').click(function(){
        $.redirect("add_teacher.php",{subject_id: $(this).attr("data-id")},"POST", "_blank");
    });
});

$(document).ready(function(){
    $('#ects').keyup(function(){
        $('#ects').change(function(){
            $('.change-ects').css("display","block");

    });

    });
});

$(document).ready(function(){
    $('#dm').keyup(function(){
        $('#dm').change(function(){
            $('.change-ects').css("display","block");

    });

    });
});

$(document).ready(function(){
    $('.change-ects').click(function(){
        var code =$('.add-teacher').attr("data-id");
        var ects = $('#ects').val();
        var dm = $('#dm').val();
        if(ects==="" || dm===""){
            alert("Όλα τα πεδία πρέπει να συμπληρωθούν")

        }else{

        var r = confirm("Αλλαγή μονάδων;");
        if (r == true) {
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/change_ects.php",
                    data:{code: code,ects: ects,dm: dm },
                    cache: false,
                    success: function(result){
                        alert(result);
                        location.reload();

        

                        
                        
                        

                        }
        
                    });
        } else {
            return false;
            
        
        
        }


        }
       

    });
});



// For Student
$(document).ready(function(){
    $(document).on("click",".view-subject",function(){
        // alert($(this).attr("id"));
        $.ajax({
              url: "phpplugins/subject-edit.php",
              type: 'POST',
              data: {code: $(this).attr("id")},
              dataType: "json",
              success: function(json) {
                $('.subject-code').html(json.subject_info[0]);
                $('.subject-title').html(json.subject_info[1]);
                $('.subject-description').html(json.subject_info[2]);
                $('#ects').html(json.subject_info[4]);
                $('#dm').html(json.subject_info[3]);
                $('.subject-year').val(json.subject_info[5]);
                $('.subject-semester').html(json.subject_info[6]);
                $('.subject-sector').val(json.subject_info[10]);
                $('.webpage').attr("href",json.subject_info[7]);
                $('.eclass').attr("href",json.subject_info[8]);
                $('.add-teacher').attr("data-id",json.subject_info[0]);
                $('.mean-grade').html(json.subject_info[12]);
                $('.mean-rating').html(json.subject_info[13]);
                
                

                var i;
                for(i=0;i<=json.schedule_count;i++){
                    $('#teaching-schedule').append('<span><div class="pull-left">'+json.teaching_day[i]+'&nbsp;</div><div class="pull-left">'+json.start_time[i]+'&nbsp;-&nbsp;</div><div>'+json.end_time[i]+'</div></span>');
                }
                $(".place").html(json.class[0]);
                $("option[name=option-subject]").addClass(json.subject_info[0]);

                $('.subject-menu').css("display","none");
                $('.all-subjects').css("display","none");
                $('#new_teacher').attr("data-subject-id",json.subject_info[0]);
                $('.subject-part').css("display","inline-block");
                if(json.subject_info[11]>='1'){
                    $('.subject-comments').val(json.subject_info[0]);
                    $('.comments-title').val(json.subject_info[1]);
                    $('.comment-form').css("display","inline-block");
                }else{
                    $('.comment-form').css("display","none");

                }
                for(i=0;i<=json.teacher_count;i++){
                    $('.current-teachers').append('<tr><td>'+json.teachers[i]+'</td></tr><br>')
                }
                if(json.past_teacher_count>=0){
                    
                    for(i=0;i<=json.past_teacher_count;i++){
                    $('.past-teachers').append('<tr><td>'+json.past_teachers[i]+'</td></tr>')
                }
                $('.table-past-teachers').css("display","inline-table");


                }else{
                    $('.table-past-teachers').css("display","none");
                }

                $('#save-comment').attr("data-subject",json.subject_info[0]);
                


                 

                



                
              }
            });


    });
});
// For Professor
$(document).ready(function(){
    $(document).on("click",".prof-subject",function(){
        // alert($(this).attr("id"));
        $.ajax({
              url: "phpplugins/subject-edit.php",
              type: 'POST',
              data: {code: $(this).attr("id")},
              dataType: "json",
              success: function(json) {
                $('.subject-code').html(json.subject_info[0]);
                $('.subject-title').html(json.subject_info[1]);
                $('.subject-description').html(json.subject_info[2]);
                $('#ects').html(json.subject_info[4]);
                $('#dm').html(json.subject_info[3]);
                $('.subject-year').val(json.subject_info[5]);
                $('.subject-semester').html(json.subject_info[6]);
                $('.subject-sector').val(json.subject_info[10]);
                $('.webpage').attr("href",json.subject_info[7]);
                $('.eclass').attr("href",json.subject_info[8]);
                $('.add-teacher').attr("data-id",json.subject_info[0]);
                $('.mean-grade').html(json.subject_info[12]);
                $('.mean-rating').html(json.subject_info[13]);
                
                

                var i;
                for(i=0;i<=json.schedule_count;i++){
                    $('#teaching-schedule').append('<span><div class="pull-left">'+json.teaching_day[i]+'&nbsp;</div><div class="pull-left">'+json.start_time[i]+'&nbsp;-&nbsp;</div><div>'+json.end_time[i]+'</div></span>');
                }
                $(".place").html(json.class[0]);
                $("option[name=option-subject]").addClass(json.subject_info[0]);

                $('.subject-menu').css("display","none");
                $('.all-subjects').css("display","none");
                $('#new_teacher').attr("data-subject-id",json.subject_info[0]);
                $('.subject-part').css("display","inline-block");
                if(json.subject_info[11]>='1'){
                    $('.subject-comments').val(json.subject_info[0]);
                    $('.comments-title').val(json.subject_info[1]);
                    $('.comment-form').css("display","inline-block");
                }else{
                    $('.comment-form').css("display","none");

                }
                for(i=0;i<=json.teacher_count;i++){
                    $('.current-teachers').append('<tr><td>'+json.teachers[i]+'</td></tr><br>')
                }
                if(json.past_teacher_count>=0){
                    
                    for(i=0;i<=json.past_teacher_count;i++){
                    $('.past-teachers').append('<tr><td>'+json.past_teachers[i]+'</td></tr>')
                }
                $('.table-past-teachers').css("display","inline-table");


                }else{
                    $('.table-past-teachers').css("display","none");
                }

                $('#save-description').attr("data-subject",json.subject_info[0]);
                for(i=0;i<=json.teacher_count;i++){
                    if($('.description').attr("data-prof")==json.teacher_username[i]){
                        $(".subject-description").replaceWith($('<textarea class="subject-description">'));
                        $("textarea").val(json.subject_info[2]);
                        $("textarea").attr("rows","25");
                        $("textarea").css("width","100%");
                        $("#save-description").css("display","inline-block");
                        return false;
        
                    }else{
                        $("#save-description").css("display","none");

                    }
                }
                


                 

                



                
              }
            });


    });
});

$(document).ready(function(){
    $('#save-description').click(function(){
        alert($(this).attr("data-subject"));
        alert($(this).siblings("textarea").val());
    });
});


$(document).ready(function(){
    $(document).on("change","#small-input",function(){
        var code=$(this).val();
        $.ajax({
                    type: "POST",
                    url: "phpplugins/get_books.php",
                    data:{code: code},
                    cache: false,
                    success: function(result){
                        if (result.length<=2){
                            $('#subject-book').html("<p class='bg-danger'>Δεν υπάρχουν βιβλία διαθέσιμα</p>");
                            

                        }else{
                        $('#subject-book').html(result);
                      
                        

                        }
                        

        

                        
                        
                        

                        }
        
                    });
        

    });
});

$(document).ready(function(){
    $(document).on("click",".book",function(){
      var isbn=$(this).attr("id"); 
      
      $.ajax({
                    type: "POST",
                    url: "phpplugins/get_book_info.php",
                    data:{code: isbn},
                    dataType:"json",
                    success: function(info){
                        $('.panel-heading').html(info[1]); 
                        $('.isbn').html(info[0]);
                        $('.writer').html(info[3]);
                        $('.pub_year').html(info[4]);
                        $('.pub_no').html(info[5]);  
                        $('.publisher').html(info[6]);
                        $('.description').html(info[2]);
                        $('.book-image').attr("src","img/"+info[7]);
                        $('#book-info').css("display","block");

        

                        
                        
                        

                        }
        
                    });
    });
});

$(document).ready(function(){
    $(document).on("change","#chose-subject",function(){
        
        var r = confirm("Προσθήκη μαθήματος;");
        if (r == true) {
        var code=$(this).val();
        var user=$(this).closest("select").attr("data-user");
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/add_attends.php",
                    data:{code: code, user: user },
                    cache: false,
                    success: function(result){

                        
                        location.reload();
                        

                        }
        
                    });
        } else {
            return false;
        
        }

        

    });
});
