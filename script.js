function SendMail(){
    var params= {
        from_name : document.getElementById("fullName").value,
        email_id : document.getElementById("email_id").value,
        message : document.getElementById("message").value,
        file : document.getElementById("file").value,
    }
    emailjs.send("service_vymnj9r", "template_8f3qft9", params).then(function (res){

        alert("Success!" + res.status);
    })
}