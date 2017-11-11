window.onload = function(){
    
    var frm = document.forms["code_form"];
    frm["input_check"].onchange = function(e){  
            frm["custom_input"].disabled = !(this.checked);
    }
    frm.onsubmit = function(e){
        if(frm["code_text"].value != ""){
            if(frm["code_file"].value != ""){
                alert("You can submit either a file or text.");
                e.preventDefault();
            }
        }else if(frm["code_file"].value == ""){
            alert("Enter the code you want to submit.");
            e.preventDefault();
        }
        if(frm["code_lang"].value == "0"){
            alert("Select a language.");
            e.preventDefault();
        }
        if(frm["input_check"].checked && frm["custom_input"].value == ""){
            alert("Enter some custom input.");
            e.preventDefault();
        }   
    }
};

document.getElementById("user_name").onkeyup = function(e){
    if(e.which == 13){
        document.forms["set_user"].submit();
    }
}