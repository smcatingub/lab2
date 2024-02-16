// declaring variables

var btn_likesback = document.getElementById("likes-back");
var btn_dislikesback = document.getElementById("dislikes-back");
var btn_hobbiesback = document.getElementById("hobbies-back");
var btn_peopleback1 = document.getElementById("people-back1");
var btn_peopleback2 = document.getElementById("people-back2");


var btn_likes = document.getElementById("int-likes");
var btn_dislikes = document.getElementById("int-dislikes");
var btn_hobbies = document.getElementById("int-hobbies");
var btn_people = document.getElementById("int-people");

var div_initial = document.getElementById("interests-container1");
var div_likes = document.getElementById("interests-container2");
var div_dislikes = document.getElementById("interests-container3");
var div_hobbies = document.getElementById("interests-container4");
var div_people = document.getElementById("interests-container5");


// likes button

btn_likes.addEventListener("click", ()=>{
    div_initial.style.visibility = "hidden";
    div_initial.style.opacity = "0";

    div_likes.style.visibility = "visible";
    div_likes.style.opacity = "1";
});

// dislikes button

btn_dislikes.addEventListener("click", ()=>{
    div_initial.style.visibility = "hidden";
    div_initial.style.opacity = "0";

    div_dislikes.style.visibility = "visible";
    div_dislikes.style.opacity = "1";
});

// hobbies button

btn_hobbies.addEventListener("click", ()=>{
    div_initial.style.visibility = "hidden";
    div_initial.style.opacity = "0";

    div_hobbies.style.visibility = "visible";
    div_hobbies.style.opacity = "1";
});

// people button

btn_people.addEventListener("click", ()=>{
    div_initial.style.visibility = "hidden";
    div_initial.style.opacity = "0";

    div_people.style.visibility = "visible";
    div_people.style.opacity = "1";
});


// back buttons, one by one thru id bcs i do not wanna stress myself out with figuring out how class event listeners work :>>>>

btn_likesback.addEventListener("click", ()=>{
    div_initial.style.visibility = "visible";
    div_initial.style.opacity = "1";

    div_likes.style.visibility = "hidden";
    div_likes.style.opacity = "0";
});

btn_dislikesback.addEventListener("click", ()=>{
    div_initial.style.visibility = "visible";
    div_initial.style.opacity = "1";

    div_dislikes.style.visibility = "hidden";
    div_dislikes.style.opacity = "0";
});

btn_hobbiesback.addEventListener("click", ()=>{
    div_initial.style.visibility = "visible";
    div_initial.style.opacity = "1";

    div_hobbies.style.visibility = "hidden";
    div_hobbies.style.opacity = "0";
});

btn_peopleback1.addEventListener("click", ()=>{
    div_initial.style.visibility = "visible";
    div_initial.style.opacity = "1";

    div_people.style.visibility = "hidden";
    div_people.style.opacity = "0";
});

btn_peopleback2.addEventListener("click", ()=>{
    div_initial.style.visibility = "visible";
    div_initial.style.opacity = "1";

    div_people.style.visibility = "hidden";
    div_people.style.opacity = "0";
});