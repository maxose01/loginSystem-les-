function Hide(){
    document.getElementById('js--noError').style.display = "none";
    document.getElementById('js--noFout').style.display = "none";
    document.getElementById('js--none').style.display = "none";
}

function error(event){
    document.getElementById('js--noFout').style.display = "block";
}

Hide();