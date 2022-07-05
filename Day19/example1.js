var text = '{"en": "Hello World","de": "Hallo Welt"}';

var text_j = JSON.parse(text);

document.getElementById("en").innerHTML = text_j.en;
document.getElementById("de").innerHTML = text_j.de;
