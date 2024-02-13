var btn_basic = document.getElementById("basic-info");
var btn_educ = document.getElementById("educ");
var btn_whyIT = document.getElementById("whyIT");
var btn_future = document.getElementById("future");

var div_select = document.getElementById("select");
var div_aboutbasic = document.getElementById("about-basic");
var div_abouteduc = document.getElementById("about-educ");
var div_aboutwhyit = document.getElementById("about-whyit");
var div_aboutfuture = document.getElementById("about-future");

btn_basic.addEventListener("click", ()=>{
    div_select.style.visibility = "hidden";

    div_aboutbasic.style.visibility = "visible";
    div_aboutbasic.style.opacity = "1";

    div_abouteduc.style.visibility = "hidden";
    div_abouteduc.style.opacity = "0";

    div_aboutwhyit.style.visibility = "hidden"
    div_aboutwhyit.style.opacity = "0";

    div_aboutfuture.style.visibility = "hidden";
    div_aboutfuture.style.opacity = "0";
});

btn_educ.addEventListener("click", ()=>{
    div_select.style.visibility = "hidden";

    div_aboutbasic.style.visibility = "hidden";
    div_aboutbasic.style.opacity = "0";

    div_abouteduc.style.visibility = "visible"
    div_abouteduc.style.opacity = "1";

    div_aboutwhyit.style.visibility = "hidden"
    div_aboutwhyit.style.opacity = "0";

    div_aboutfuture.style.visibility = "hidden";
    div_aboutfuture.style.opacity = "0";
});

btn_whyIT.addEventListener("click", ()=>{
    div_select.style.visibility = "hidden";

    div_aboutbasic.style.visibility = "hidden";
    div_aboutbasic.style.opacity = "0";

    div_abouteduc.style.visibility = "hidden";
    div_abouteduc.style.opacity = "0";

    div_aboutwhyit.style.visibility = "visible"
    div_aboutwhyit.style.opacity = "1";

    div_aboutfuture.style.visibility = "hidden";
    div_aboutfuture.style.opacity = "0";
});

btn_future.addEventListener("click", ()=>{
    div_select.style.visibility = "hidden";

    div_aboutbasic.style.visibility = "hidden";
    div_aboutbasic.style.opacity = "0";

    div_abouteduc.style.visibility = "hidden";
    div_abouteduc.style.opacity = "0";

    div_aboutwhyit.style.visibility = "hidden"
    div_aboutwhyit.style.opacity = "0";

    div_aboutfuture.style.visibility = "visible";
    div_aboutfuture.style.opacity = "1";
});