function showCoords1(event) {
    var x = (event.clientX)*0.05;
    var y = ((event.clientY))*0.05;
    var z= (x+y);
    document.getElementById("box1").style.boxShadow = x+"px "+y+"px "+z+"px #000";
    document.getElementById("box1").style.backgroundImage="radial-gradient(at "+x+"% "+y+"%, #25262A, rgb(25,25,28))";
    console.log(x+", "+y+", " +z)
}

function showCoords2(event) {
    var x = ((event.clientX)*(0.05))-20;
    var y = (event.clientY)*0.03;
    var z= (x+y);
    document.getElementById("box2").style.boxShadow = x+"px "+y+"px "+z+"px #000";
    document.getElementById("box2").style.backgroundImage="radial-gradient(at "+x+"% "+y+"%, #25262A, rgb(25,25,28))";
    console.log(x+", "+y+", " +z)
    console.log("2")
}

function showCoords3(event) {
    var x = ((event.clientX)*(0.05))-45;
    var y = (event.clientY)*0.05;
    var z= (x+y);
    document.getElementById("box3").style.boxShadow = x+"px "+y+"px "+z+"px #000";
    document.getElementById("box3").style.backgroundImage="radial-gradient(at "+x+"% "+y+"%, #25262A, rgb(25,25,28))";
    console.log(x+", "+y+", " +z)
    console.log("3")
}

function showCoords4(event) {
    var x = (event.clientX)*0.05;
    var y = (event.clientY)*0.05;
    var z= (x+y)-15;
    document.getElementById("box6").style.boxShadow = x+"px "+y+"px "+z+"px #000";
    document.getElementById("box6").style.backgroundImage="radial-gradient(at "+x+"% "+y+"%, #25262A, rgb(25,25,28))";
    console.log(x+", "+y+", " +z)
}

function showCoords5(event) {
    var x = ((event.clientX)*(0.05))-20;
    var y = (event.clientY)*0.05;
    var z= (x+y)-15;
    document.getElementById("box4").style.boxShadow = x+"px "+y+"px "+z+"px #000";
    document.getElementById("box4").style.backgroundImage="radial-gradient(at "+x+"% "+y+"%, #25262A, rgb(25,25,28))";
    console.log(x+", "+y+", " +z)
}

function showCoords6(event) {
    var x = ((event.clientX)*(0.05))-20;
    var y = (event.clientY)*0.05;
    var z= (x+y)-15;
    document.getElementById("box5").style.boxShadow = x+"px "+y+"px "+z+"px #000";
    document.getElementById("box5 ").style.backgroundImage="radial-gradient(at "+x+"% "+y+"%, #25262A, rgb(25,25,28))";
    console.log(x+", "+y+", " +z)
}



function clearshadow() {
    document.getElementById("box1").style.boxShadow = "";
    document.getElementById("box1").style.backgroundImage="radial-gradient(#25262A, rgb(25,25,28))";
    document.getElementById("box2").style.boxShadow = "";
    document.getElementById("box2").style.backgroundImage="radial-gradient(#25262A, rgb(25,25,28))";
    document.getElementById("box3").style.boxShadow = "";
    document.getElementById("box3").style.backgroundImage="radial-gradient(#25262A, rgb(25,25,28))";
    document.getElementById("box4").style.boxShadow = "";
    document.getElementById("box4").style.backgroundImage="radial-gradient(#25262A, rgb(25,25,28))";
    document.getElementById("box5").style.boxShadow = "";
    document.getElementById("box5").style.backgroundImage="radial-gradient(#25262A, rgb(25,25,28))";
    document.getElementById("box6").style.boxShadow = "";
    document.getElementById("box6").style.backgroundImage="radial-gradient(#25262A, rgb(25,25,28))";
    
}
