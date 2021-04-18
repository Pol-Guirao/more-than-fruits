
$("#newOrder").click(function(){
    var error = false;
    $(".formEntry").each(function(){
        if($(this).val()==""){
            error = true;
        }
    });
    if(error){
        $('#error').html("You must complete all fields");
    }else{
        var cif = $(".formEntry[name=cif]").val();
        if(!cif.match(/^\+34/)){
            $('#error').html("Provider Id must start with \"+34\" ");
        }else{
            send();
        }
    }
});

$("#newUser").click(function(){
     var error = false;
    $(".userEntry").each(function(){
        if($(this).val()==""){
            error = true;
        }
    });
    if(error){
        $('#errorUser').html("You must complete all fields");
    }else{
        sendUser();
    }
});

$(".deleteUser").click(function(){
    var id = $(this).attr("id");
     $.ajax({
            method: 'POST',
            url: 'controllers/handlers/adminHandler.php',
            data: {
                type:"deleteUser",
                id:id
            },            
            success: function (data) {
                location.reload();
            },
            error: function(data){
                console.log(data);
            }
    });
});

function send() {
        $.ajax({
            method: 'POST',
            url: 'controllers/handlers/adminHandler.php',
            data: {
                type:"order",
                provider:$(".formEntry[name=provider]").val(),
                country:$(".formEntry[name=country]").val(),
                phone:$(".formEntry[name=phone]").val(),
                fruit:$(".formEntry[name=fruit]").val(),
                cif:$(".formEntry[name=cif]").val(),
                kg:$(".formEntry[name=kg]").val()
            },            
            success: function (data) {
                location.reload();
            },
            error: function(data){
                console.log(data);
            }
    });
}
function sendUser() {
        $.ajax({
            method: 'POST',
            url: 'controllers/handlers/adminHandler.php',
            data: {
                type:"user",
                user:$(".userEntry[name=user]").val(),
                pw:$(".userEntry[name=pw]").val(),
            },            
            success: function (data) {
                location.reload();
            },
            error: function(data){
                console.log(data);
            }
    });
}


