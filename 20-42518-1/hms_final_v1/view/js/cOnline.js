function submitData(){
    $("#success").innerHTML = "";
    $(document).ready(function () {
        $("#co_form").submit(function (event) {
            event.preventDefault();
            const formData = {
                PatientID: $("#PatientID").val(),
                link: $("#link").val(),
                instruction: $("#instruction").val(),
                // superheroAlias: $("#superheroAlias").val(),
            };
    
            
            $.ajax({
                type: "POST",
                url: "../control/consultOnlineAction.php",
                data: formData,
                // dataType: "json",
                // encode: true,
                
                success:function(response){
                    $("#success").html( "Consultation info sent:(") ;
                    // alert(response);
                    console.log(response);
                }
            });
      
        });
    });
}