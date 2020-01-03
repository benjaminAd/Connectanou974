$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profil-pic').attr('src', e.target.result);
                
                
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $("#button1").on('change', function(){
        readURL(this);
    });
    
    $("#cam1").on('click', function() {
       $("#button1").click();
    });

    var readURL2 = function(input) {
        if (input.files && input.files[1]) {
            var reader2 = new FileReader();

            reader2.onload = function (e) {
                $('.page-header ').css("background-image", "url(" + e.target.result+ ")");
                
                
            }
    
            reader2.readAsDataURL(input.files[1]);
        }
    }
    

    $("#button2").on('change', function(){
        readURL(this);
    });
    
    $("#cam2").on('click', function() {
       $("#button2").click();
    });



    
});




