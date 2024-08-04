let createColor = document.getElementById("createColor");
let container = document.getElementById("container");
let inputNotify = document.getElementById("notify");
let notifyText = document.getElementById("notifyText");

function createBoxColor(color) {
    let inputColor = color || document.getElementById("inputColor").value;
    localStorage.setItem("codeColor", inputColor);
    let data = localStorage.getItem("codeColor");
    if (inputColor === "") {
        inputNotify.classList.add("notify");
        notifyText.innerText = "Introduce el color";
        notify();
    } else {
        let newCard = document.createElement("div");
        newCard.classList.add("card");
        container.appendChild(newCard);

        let codeRGB = hexa_rgb(inputColor)
        let codeColor = document.createElement("p");
        codeColor.classList.add("codeColor");
        codeColor.innerText = codeRGB + " | " + inputColor;
        newCard.appendChild(codeColor);

        let boxColor = document.createElement("div");
        boxColor.classList.add("boxColor");
        boxColor.style.backgroundColor = inputColor;
        newCard.appendChild(boxColor);

        let bntCopyColor = document.createElement("button");
        bntCopyColor.classList.add("copybnt");
        bntCopyColor.innerText = "Copy";
        newCard.appendChild(bntCopyColor);

        const copyColor = async () => {
            try {
                await navigator.clipboard.writeText(data);
                inputNotify.classList.add("notify");
                notifyText.innerText = "Color copiado: " + data;
                notify();
            } catch (error) {
                console.log(error);
            }
        }

        function hexa_rgb(code_hexa) {
            code_hexa = code_hexa.replace(/^#/, '');
            let r = parseInt(code_hexa.substring(0, 2), 16);
            let g = parseInt(code_hexa.substring(2, 4), 16);
            let b = parseInt(code_hexa.substring(4, 6), 16);
            return 'rgb' + r + "," + g + "," + b;
        }
        bntCopyColor.addEventListener("click", function () { copyColor(data); })
    }
}

let time = 1;

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function notify() {
    while (time <= 10) {
        time++;
        await delay(1000);
    }
    inputNotify.classList.remove("notify");
    notifyText.innerText = "";
    time = 1;
}

createColor.addEventListener("click", function () { createBoxColor(); })