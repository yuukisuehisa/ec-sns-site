const { default: axios } = require("axios");

$(function(){

    $("#touroku").on("click",()=>{

       $("#mailerror").text(""); 
       $("#passworderror").text("");
       $("#nameerror").text("");
       $("#namaeerror").text(""); 
       $("#seinengappierror").text("");
       $("#codeerror").text("");
       $("#addresserror").text(""); 
       $("#telerror").text("");
       $("#password2error").text("");
       axios({
           method: "POST",
           url: "signup/entry",
           data: {
               mail: $("#mail").val(),
               password: $("#password").val(),
               password2: $("#password2").val(),
               name: $("#name").val(),
               namae: $("#namae").val(),
               code: $("#code").val(),
               address: $("#address").val(),
               tel: $("#tel").val(),
               year: $("#year").val(),
               month: $("#month").val(),
               day: $("#day").val(),
           },
           contentType: "application/json",
           dataType: "json"
       })
       .then(response => {

       })
       .catch(error=>{
           $("#mailerror").text(error.response.data.error.mail);
           $("#passworderror").text(error.response.data.error.password);
           $("#nameerror").text(error.response.data.error.name);
           $("#namaeerror").text(error.response.data.error.namae);
           $("#seinengappierror").text(error.response.data.seinengappierror);
           $("#password2error").text(error.response.data.error.password2);
           $("#codeerror").text(error.response.data.error.code);
           $("#addresserror").text(error.response.data.error.address);
           $("#telerror").text(error.response.data.error.tel);

       })
    });
});