$(document).ready(function() {
    var name = "";
    $.ajax({
        type:"get",
        url:"service.php",
        dataType: "json",
        success: function(data){
            $(data).each(function(index, value){
                name = value.firstName;
            })
        },
        error: function(){
            alert("Error");
        }
    });
    $("#name").html("Hello " + name);
})