var btn_basic = document.getElementById("basic-info");
var btn_educ = document.getElementById("educ");
var btn_whyIT = document.getElementById("whyIT");
var btn_future = document.getElementById("future");

var div_select = document.getElementById("select");
var div_aboutbasic = document.getElementById("about-basic");
var div_abouteduc = document.getElementById("about-educ");
// var div_ = document.getElementById("");
// var div_ = document.getElementById("");

btn_basic.addEventListener("click", ()=>{
    div_select.style.visibility = "hidden";
    div_abouteduc.style.visibility = "hidden";
    div_aboutbasic.style.visibility = "visible";
    div_aboutbasic.style.opacity = "1";
});

btn_educ.addEventListener("click", ()=>{
    div_select.style.visibility = "hidden";
    div_aboutbasic.style.visibility = "hidden";
    div_abouteduc.style.visibility = "visible"
    div_abouteduc.style.opacity = "1";
});