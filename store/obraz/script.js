$(document).ready(function(){
    $("#person").change(function(){
        //console.log($(this).val());
    let pracownik_id=$(this).val();
    $.get("personObraz.php", {person:pracownik_id}, function(server_data){
       console.log(server_data);
        let d = jQuery.parseJSON(server_data);
        let str="";
        str =str + "<ol>";
        console.log(str);
        for(let i=0; i<d.length; i++){
            str=str+("<li>"+d[i]+"</li>");

        }
        str = str+"</ol>";
        console.log(str);
        $("#tabela").html(str);
    });
});
});