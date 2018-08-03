$( document ).ready(function() {

var subject = $('#news-subject'), 
    content = $('#news-content');
    
    $('#save-news').on('click', function (){
        if(subject.val() == '') {
            alert('Empty subject');
        };
        
        if(content.val() == '') {
            alert('Empty content');
        };
        
        var data = {
            'subject' : subject.val(),
            'content' : content.val()
        };
        
        $.post( 'SaveNews_Ajax.php', data, function( result ) {
        alert(result);

    });
    });

//$('#js-button').on('click', function () {
//    $.post( window.location.href + 'ajaxCall', 'test', function( data ) {
//        alert(data);
//
//    });
//});


});