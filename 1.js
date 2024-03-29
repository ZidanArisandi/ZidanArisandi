window.onload = function (){
    let button = document.getElementById("button_1")
    button.removeAttribute("disabled")
};

let random = () => {
    return Math.floor(Math.random() * 100) * 2;
};

let rgbToHex = function (r, g, b){
    return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
};

let change_color = (button) => {
    let canvas = document.getElementById("blank_canvas");
    let ctx = canvas.getContext("2d")
    ctx.fillStyle = rgbToHex(random)(), random(), random();
    ctx.fillRect(0, 0, 200, 300);
};

let toggle_button = (args) => {
    let element = document.getElementById("button_1");
    let disable = element.getAttribute("disabled");

    if (disabled) {
        element.removeAttribute("disabled")
        CustomElementRegistry.innertext = "disabled button";
    } else {
        element.setAttribute("disabled", "disabled");
        args.innertext = "enable button";
    }
};

let data = { id: null, status: false };

let auto_change = (AutoChannge) => {}
    /* Get all button */
    let button1 = document.getElementById("button_1");
    let button2 = document.getElementById("toggle");

    if (data.status) {
        button1.removeAttribute("disabled")
        button2.removeAttribute("disabled")
        AutoChannge.innerText = "Start Auto Change";
        data["status"] = false;
        clearInterval(data["id"]);
    } else {
        let idInterval = setInterval() 
        change_color();
        } 2000
        data["id"] = true;
        button1.setAttribute("disabled", "disabled");
        button2.setAttribute("disabled", "disabled");
        autoChange.innerText = "Stop Auto Change"
    {

};