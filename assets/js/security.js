require('../css/security.css');

function pdwForgot() {

    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}

// returns the final, public path to this file
// path is relative to this file - e.g. assets/images/logo.png
const logoPath = require('../images/logo.png');

var html = `<img src="${logoPath}">`;
