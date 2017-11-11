$(function(){  
    $("#input_check").on("change", function(e){
            $("#custom_input").attr("disabled", !(this.checked));
    });
    $("#code_form").on("submit", function(e){
        e.preventDefault();
        if($("#code_text").val() != ""){
            if($("#code_file").val() != ""){
                alert("You can submit either a file or text.");
                return;
            }
        }else if($("#code_file").val() == ""){
            alert("Enter the code you want to submit.");
            return;
        }
        if($("#code_lang").val() == "0"){
            alert("Select a language.");
            return;
        }
        if($("#input_check").checked && $("#custom_input").val() == ""){
            alert("Enter some custom input.");
            return;
        }
        var frm = new FormData(document.forms["code_form"]);
        var req = $.ajax({
            contentType: false,
            url: "submit/",
            processData: false,
            data: frm,
            method: "post",
            cache: false
        });
        req.done(function(data){
            $("#output").html(data);
        });
        req.fail(function(xhr, error){
            alert(error);
        });
    });

    $("#user_name").keyup(function(e){
        if(e.which == 13){
            document.forms["set_user"].submit();
        }
    });
});