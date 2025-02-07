function submit(){
    var feedback = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value
    }
    localStorage.setItem(localStorage.length+1, JSON.stringify(feedback))

    document.getElementById("contact_form").reset();
    alert("Your message has been sent!");
    //localStorage.clear(); 
}

function changeHomeButton1(){
    document.getElementById("buttonHome").innerText ="View my work ↓";
}

function changeHomeButton2(){
    document.getElementById("buttonHome").innerText ="View my work →";
}