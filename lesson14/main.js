$(document).ready(function () {

    $('#send').on('click', function () {
        var name = $('#name').val();
        var email = $('#email').val();
        
        if(name == '' || email == ''){
            alert('Empty fields');
        }
        
        var data = {
            'name' : name,
            'email': email
        };
        
        $.post('form.php', data, function(result){
            alert(result);
        });
    });

});


