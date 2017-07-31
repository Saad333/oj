function select_option(that) {
    if (that.value == "0") {
        document.getElementById("input-0").style.display = "block";
        document.getElementById("input-1").style.display = "none";
        document.getElementById("input-2").style.display = "none";
        document.getElementById("input-3").style.display = "none";
    } else if (that.value == "1") {
        document.getElementById("input-0").style.display = "none";
        document.getElementById("input-1").style.display = "block";
        document.getElementById("input-2").style.display = "none";
        document.getElementById("input-3").style.display = "none";
    }else if (that.value == "2") {
        document.getElementById("input-0").style.display = "none";
        document.getElementById("input-1").style.display = "none";
        document.getElementById("input-2").style.display = "block";
        document.getElementById("input-3").style.display = "none";
    }else if (that.value == "3") {
        document.getElementById("input-0").style.display = "none";
        document.getElementById("input-1").style.display = "none";
        document.getElementById("input-2").style.display = "none";
        document.getElementById("input-3").style.display = "block";
    }
    else
    {
        document.getElementById("input-0").style.display = "none";
        document.getElementById("input-1").style.display = "none";
        document.getElementById("input-2").style.display = "none";
        document.getElementById("input-3").style.display = "none";
    }
}
function select_code_submit_option(that) {
    if (that.value == "code"){
        document.getElementById("code_editor").style.display = "block";
        document.getElementById("select_code_file").style.display = "none";
    }
    else if(that.value == "file")
    {
        document.getElementById("code_editor").style.display = "none";
        document.getElementById("select_code_file").style.display = "block";
    }
    else
    {
        document.getElementById("code_editor").style.display = "none";
        document.getElementById("select_code_file").style.display = "none";
    }
}