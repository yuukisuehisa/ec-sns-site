const { default: axios } = require("axios");

$(function(){

    $("#btn1Text").on("click",()=>{

       $("#mailerror").text(""); 
       $("#passworderror").text("");
    
       axios({
           method: "POST",
           url: "login/entry",
           data: {
               mail: $("#mail1").val(),
               password: $("#password").val(),
           },
           contentType: "application/json",
           dataType: "json"
       })
       .then(response => {

       })
       .catch(error=>{
           $("#mailerror").text(error.response.data.error.mail);
           $("#passworderror").text(error.response.data.error.password);
       })
    });
});