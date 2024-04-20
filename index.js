//* vars the colors
let createBntColor = document.getElementById("buttonColor");
let containerCardsColors = document.getElementById("containerCardsColors");
//* vars the gradients
let BntGradient = document.getElementById("buttonGradient");
let containerCardsGradient = document.getElementById("containerCardsGradiendt");
//* vars hthe fonts
let containerCardFonts = document.getElementById("containerCardsFonts");
let bntCreateFont = document.getElementById("buttonFont");

function createBoxColor() {
    //* obtenemos el valor del input
    let inputColor = document.getElementById("inputCodeColor").value;
    let inputBoxColor = document.getElementById("inputBoxColor").value;

    //* creamos la nueva card
    let newCard = document.createElement('div');
    newCard.classList.add('cards-colors');
    containerCardsColors.appendChild(newCard);

    //* creamos el nuevo color
    let newColor = document.createElement("div");
    newColor.classList.add("block-color");
    newCard.appendChild(newColor);
    newColor.style.backgroundColor = inputColor || inputBoxColor;

    //* creamos el texto del color
    let containerTextColors = document.createElement("div");
    containerTextColors.classList.add("container-text-color");
    newCard.appendChild(containerTextColors);

    //* creamos el texto hexa
    let newTextHexa = document.createElement("p");
    newTextHexa.classList.add("text-color");
    containerTextColors.appendChild(newTextHexa);
    newTextHexa.innerText = inputColor || inputBoxColor;

    //* creamos el texto RGB
    let coloRgb = hexa_rgb(inputColor || inputBoxColor);
    let newTextRgb = document.createElement("p");
    newTextRgb.classList.add("text-color");
    containerTextColors.appendChild(newTextRgb);
    newTextRgb.innerText = coloRgb;

    //* creamos el button for copy 
    let bntCopyColor = document.createElement("button");
    bntCopyColor.classList.add("button-copy");
    newCard.appendChild(bntCopyColor);
    bntCopyColor.innerText = 'Copy';


    function hexa_rgb(code_hexa) {
        code_hexa = code_hexa.replace(/^#/, ''); //* liminamos el #
        //* convertir los valores hexa a decimal
        let r = parseInt(code_hexa.substring(0, 2), 16);
        let g = parseInt(code_hexa.substring(2, 4), 16);
        let b = parseInt(code_hexa.substring(4, 6), 16);
        return 'rgb(' + r + "," + g + "," + b + ")";
    }
}

function createBoxgradient() {
    let fristColor = document.getElementById("inputFristColor").value;
    let codeDeg = document.getElementById("inputDeg").value;
    let secundColor = document.getElementById("inputSecondColor").value;

    console.log(fristColor)

    let newCardGradient = document.createElement("div");
    newCardGradient.classList.add("cards-gradient");
    containerCardsGradient.appendChild(newCardGradient);

    let newGradient = document.createElement("div");
    newGradient.classList.add("block-gradient");
    newCardGradient.appendChild(newGradient);
    newGradient.style.background = `linear-gradient(${codeDeg}, ${fristColor}, ${secundColor})`;

    let containerTextGradient = document.createElement("div");
    containerTextGradient.classList.add("container-text-gradient");
    newCardGradient.appendChild(containerTextGradient);

    let fristTextColor = document.createElement('p');
    fristTextColor.innerText = fristColor;
    containerTextGradient.appendChild(fristTextColor);

    let textDeg = document.createElement('p');
    textDeg.innerText = codeDeg;
    containerTextGradient.appendChild(textDeg);

    let secundTextColor = document.createElement('p');
    secundTextColor.innerText = secundColor;
    containerTextGradient.appendChild(secundTextColor);

    let bntCopyGradient = document.createElement("button");
    bntCopyGradient.classList.add("button-copy");
    bntCopyGradient.innerText = 'Copy';
    newCardGradient.appendChild(bntCopyGradient);
}

function createBoxFont() {
    let inputNameFont = document.getElementById("inputNameFont").value;
    let inputURL = document.getElementById("inputURL").value;
    fontURL(inputURL);

    let newCardFont = document.createElement("div");
    newCardFont.classList.add("card-font")
    containerCardsFonts.appendChild(newCardFont);

    let nameFont = document.createElement("h3");
    nameFont.classList.add("name-font");
    newCardFont.appendChild(nameFont);
    nameFont.innerText = inputNameFont;
    nameFont.style.fontFamily = inputNameFont;

    let boxTextExampleFont = document.createElement("div");
    boxTextExampleFont.classList.add("box-the-text");
    newCardFont.appendChild(boxTextExampleFont);

    let textExampleFont = document.createElement("p");
    textExampleFont.classList.add("text-example");
    boxTextExampleFont.appendChild(textExampleFont);
    textExampleFont.innerText = 'A, a, B, b, C, c, 0, 1, 2, 3, 4, 5';
    textExampleFont.style.fontFamily = inputNameFont;

    let bntCopyFont = document.createElement("button");
    bntCopyFont.setAttribute("id", "bntCopyFont");
    bntCopyFont.classList.add("button-copy");
    newCardFont.appendChild(bntCopyFont);
    bntCopyFont.innerText = "Copy";
}

function fontURL(url) {
    let cssLinkFont = document.createElement("link");
    cssLinkFont.rel = "stylesheet";
    cssLinkFont.type = "text/css";
    cssLinkFont.href = url;
    document.head.appendChild(cssLinkFont);
}

bntCreateFont.addEventListener('click', function () { createBoxFont(); });
BntGradient.addEventListener('click', function () { createBoxgradient(); });
createBntColor.addEventListener('click', function () { createBoxColor(); });
