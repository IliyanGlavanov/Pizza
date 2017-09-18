$(document).ready(function () {
    $("#belene").hide();
    $("#textlocation").hide();
    $("#contentlogin").click(function () {
        $("#plslogin").hide();
        $(this).hide();
        $("#belene").show();
        $("#textlocation").show();
        
    });
});