// alert("Hi")
var i = 0;
var txt = 'What is the age of Internet?'; /* The text */
var j = txt.length - 1;
var speed = 300; /* The speed/duration of the effect in milliseconds */
function typeWriter() {
    if (i < txt.length) {
        document.getElementById("age").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
    // if (j >= 0) {
    //     document.getElementById("age").innerHTML -= txt.charAt(j);
    //     j--;
    //     setTimeout(typeWriter, speed);
    // }
}
setInterval(typeWriter, 1000);
setInterval(() => {
    let bar = document.getElementById('a');
    if (bar.style.display == 'none') {
        bar.style.display = 'inline-block';
    } else {
        bar.style.display = 'none';
    }
}, 500);
// function datetime() {
//     var dt = new Date;
//     document.getElementById('time').innerHTML = dt;
// }
// setInterval(datetime, 1000);
function net1() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('1983-01-01');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("netmain").innerHTML = dify + " years " + difm + " months and " + difd + " days old";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function yahoo() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('1995-01-18');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("yahoo").innerHTML = dify + " years " + difm + " months and " + difd + " days old";
    // console.log("The Yahoo was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function google() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('1998-09-04');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("google").innerHTML = dify + " years " + difm + " months and " + difd + " days old.";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function fb1() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('2004-02-04');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("fbmain").innerHTML = dify + " years " + difm + " months and " + difd + " days old.";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function youtube() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('2005-02-14');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("youtube").innerHTML = dify + " years " + difm + " months and " + difd + " days old.";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function twitter() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('2006-03-21');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("twitter").innerHTML = dify + " years " + difm + " months and " + difd + " days old.";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function whatsapp() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('2009-02-16');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("whatsapp").innerHTML = dify + " years " + difm + " months and " + difd + " days old.";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
function insta() {
    let dt1 = new Date;
    let dd1 = dt1.getDate();
    let mm1 = dt1.getMonth();
    let yy1 = dt1.getFullYear();
    let dt2 = new Date('2010-10-06');
    let dd2 = dt2.getDate();
    let mm2 = dt2.getMonth();
    let yy2 = dt2.getFullYear();
    let dify = Math.abs(yy1 - yy2);
    let difm = Math.abs(mm1 - mm2);
    let difd = Math.abs(dd1 - dd2);
    document.getElementById("instagram").innerHTML = dify + " years " + difm + " months and " + difd + " days old.";
    // console.log("The Internet was launched " + dify + "years " + difm + " months and " + difd + " days old");
}
// setTimeout(closedoc, 1000);
setInterval(net1, 1000);
setInterval(fb1, 1000);
setInterval(google, 1000);
setInterval(yahoo, 1000);
setInterval(youtube, 1000);
setInterval(twitter, 1000);
setInterval(whatsapp, 1000);
setInterval(insta, 1000);