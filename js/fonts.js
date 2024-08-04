let createFont = document.getElementById("createFont");
let container = document.getElementById("container");
let inputNotify = document.getElementById("notify");
let notifyText = document.getElementById("notifyText");

function createBoxFont(url, name) {
    let inputUrl = document.getElementById("urlFont").value;
    let inputName = document.getElementById("nameFont").value;
    localStorage.setItem("fontUrl", inputUrl);
    localStorage.setItem("nameFont", inputName);
    let data1 = localStorage.getItem("fontUrl");
    let data2 = localStorage.getItem("nameFont");
    if (inputUrl === "" || inputName === "") {
        inputNotify.classList.add("notify");
        notifyText.innerText = "Introduce los datos";
        notify();
    } else {
        linkCss(inputUrl);
        let newCard = document.createElement("div");
        newCard.classList.add("card");
        container.appendChild(newCard);

        let containerBox = document.createElement("div");
        containerBox.classList.add("container");
        newCard.appendChild(containerBox);

        let nameFont = document.createElement("h3");
        nameFont.classList.add("nameFont");
        nameFont.innerText = inputName;
        nameFont.style.fontFamily = inputName;
        containerBox.appendChild(nameFont);

        let textFont = document.createElement("p");
        textFont.classList.add("textFont");
        textFont.style.fontFamily = inputName;
        textFont.innerText = "A, a, B, b, C, c, 0, 1, 2, 3, 4, 5";
        containerBox.appendChild(textFont);

        let copybnt = document.createElement("button");
        copybnt.classList.add("copyFont");
        copybnt.innerText = "Copy";
        containerBox.appendChild(copybnt);

        const copyFont = async () => {
            try {
                await navigator.clipboard.writeText(`@import url(${data1}), font-family:"${data2}", cursive;`);
                inputNotify.classList.add("notify");
                notifyText.innerText = "Funete copiada: " + data2;
                notify();
            } catch (error) {
                console.log(error);
            }
        }
        copybnt.addEventListener("click", function () { copyFont(url, name); });
    }
}

function linkCss(url) {
    let cssLink = document.createElement("link");
    cssLink.rel = "stylesheet";
    cssLink.type = "text/css";
    cssLink.href = url;
    document.head.appendChild(cssLink);
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

createFont.addEventListener("click", function () { createBoxFont(); });