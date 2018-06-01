function playSoundMk() {
    var sound = document.getElementById("mk");
    sound.play();
}

function playSoundBell() {
    var sound = document.getElementById("bell");
    sound.play();
}

function playSoundEx() {
    var sound = document.getElementById("ex");
    sound.play();
}

function playSoundLaugh() {
    var sound = document.getElementById("laugh");
    sound.play();
}

function checkname() {
    var f = document.getElementById("fname");
    var val = f.value.toString();
    
    if (-1 == val.indexOf('a') || -1 == val.indexOf('d') || -1 != val.indexOf(' ')) {
      console.log("The message is: '" + myError.message + "'");
      return false;
    }
    else {
        return true;
    }
}