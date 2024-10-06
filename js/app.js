let btn_cerrar = document.getElementById("btn_cerrar");
let card_body = document.querySelector("#card_body");
card_body.style.height != "800px";
const cerrarData = () => {
    let form = document.querySelector("form");
    let card_body = document.querySelector("#card_body");
    if (card_body.style.height != "0px") {
        card_body.style.height = "0px";
        form.style.display = 'none'
    } else {
        card_body.style.height = "800px";
        form.style.display = ''
    }
}
btn_cerrar.addEventListener("click", cerrarData);
function generar() {
    console.log("Hemos dado click");
    let dataForm = new FormData(document.querySelector("form"));
    let visorpdf = document.querySelector("#visorpdf");
    fetch("/generador.php", {
        method: "POST",
        body: dataForm
    })
        .then(response => response.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log('Success:', response.archivo)
            visorpdf.src = response.archivo;
        });

}

