let createGradiente = document.getElementById("bntGradient");
let container = document.getElementById("container");
let inputNotify = document.getElementById("notify");
let notifyText = document.getElementById("notifyText");

function createBoxGradient(val1, val2, val3) {
    let firstColor = document.getElementById("firstColor").value;
    let codeDeg = document.getElementById("deg").value;
    let secondColor = document.getElementById("secondColor").value;
    localStorage.setItem("val1", firstColor);
    localStorage.setItem("val2", codeDeg);
    localStorage.setItem("val3", secondColor);
    let data1 = localStorage.getItem("val1");
    let data2 = localStorage.getItem("val2");
    let data3 = localStorage.getItem("val3");
    if (firstColor === "" || codeDeg === "" || secondColor === "") {
        inputNotify.classList.add("notify");
        notifyText.innerText = "Ingresa el gradiente"
        notify();
    } else {
        let newCard = document.createElement("div");
        newCard.classList.add("card");
        container.appendChild(newCard);

        let codeGradient = document.createElement("p");
        codeGradient.classList.add("codeColor");
        codeGradient.innerText = "( " + firstColor + ", " + codeDeg + ", " + secondColor + " )";
        newCard.appendChild(codeGradient);

        let boxGradiente = document.createElement("div");
        boxGradiente.classList.add("boxColor");
        boxGradiente.style.backgroundImage =  `linear-gradient(${codeDeg}, ${firstColor}, ${secondColor})`;
        newCard.appendChild(boxGradiente);
        
        let bntCopy = document.createElement("button");
        bntCopy.classList.add("copybnt");
        bntCopy.innerText = "copy";
        newCard.appendChild(bntCopy);

        const copyGradient = async () => {
            try {
                await navigator.clipboard.writeText(`background-image:linear-gradient(${data2}, ${data1}, ${data3});`);
                inputNotify.classList.add("notifyG");
                notifyText.innerText = "Grediente copiado: " + firstColor + ", " + codeDeg + ", " + secondColor;
                notify();
            } catch (error) {
                console.log(error);
            }
        }
        bntCopy.addEventListener("click", function () { copyGradient(); }); 
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
    inputNotify.classList.remove("notifyG");
    notifyText.innerText = "";
    time = 1;
}

createGradiente.addEventListener("click", function () { createBoxGradient(); })