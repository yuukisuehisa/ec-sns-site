const { default: axios } = require("axios");

$(function(){

    $("#login").on("click",()=>{

       $("#mailerror").text(""); 
       $("#passworderror").text("");
    
       axios({
           method: "POST",
           url: "login/check",
           data: {
               mail: $("#mail").val(),
               password: $("#password").val(),
           },
           contentType: "application/json",
           dataType: "json"
       })
       .then(response => {
       window.location.href="./";
       })
       .catch(error=>{
           $("#mailerror").text(error.response.data.error.mail);
           $("#passworderror").text(error.response.data.error.password);
       })
    });

    $("#new").on("click",()=>{
        window.location.href="./signup";
        });
});