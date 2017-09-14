$(document).ready(function(){
    $('#student_id').keypress(function check_user_id(){
        $('#student_id_msg').text('Enter user id');
        check_user_id();
    });
    check_user_id();
});