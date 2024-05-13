function getUser(){
    var search=document.getElementById("search-input").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status== 200)
        {
            document.getElementById("txt1").innerHTML = this.responseText;
        }
        
    };
    xhttp.open("GET", "http://localhost/healthcare_admin/controller/search_patient.php?username="+search, true);
    xhttp.send();
    }
    