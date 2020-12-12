//prevent any other charactyer from inputing except +, numbers, brackets, and hyphen
$(function() { 
        $("input[name='number']").on('input', function(e) { 
            $(this).val($(this).val().replace(/[^+()0-9 -]/g, '')); 
        }); 
    }); 

document.getElementById("number").minLength = "6";
document.getElementById("number").maxLength = "18";

document.getElementById('productCode').readOnly = true;