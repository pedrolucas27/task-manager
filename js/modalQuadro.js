// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        showPopup("none");
    }
};

function showPopup(obj, display){
    document.getElementById(obj).style.display = display;
}

function teste(){
    var x = document.getElementById('d');
    console.log(x);
}


