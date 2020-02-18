const canvasElm = document.createElement('canvas');
document.body.insertAdjacentElement('afterbegin',canvasElm);

resizeCanvas();

function resizeCanvas(){
    let widthWindow = window.innerWidth;
    let heightWindow = window.innerHeight;

    canvasElm.width = widthWindow;
    canvasElm.height = heightWindow;
    window.addEventListener('resize',draw);

}

//*****

const ctx = canvasElm.getContext("2d");

function draw(){

    // First rect
    let wFR = window.innerWidth / 2 - 200;
    let hFR = window.innerHeight / 2 - 150;

    ctx.beginPath();
    ctx.rect(wFR,hFR,400,300);
    ctx.fillStyle = 'blue';
    ctx.fill();

    // Second rect
    ctx.beginPath();
    ctx.rect(wFR + 60,wFR + 60,300,200);
    ctx.fillStyle = 'white';
    ctx.fill();

    // Third rect
    ctx.beginPath();
    ctx.rect(70,70,280,180);
    ctx.strokeStyle = 'purple';
    ctx.lineWidth = 5;
    ctx.stroke();

    // Fourth rect
    let jardin = ctx.createLinearGradient(100,100,100,290);
    jardin.addColorStop(0,'IndianRed ');
    jardin.addColorStop(1,'GreenYellow');
    ctx.beginPath();
    ctx.rect(72,178,276,70);
    ctx.fillStyle = jardin;
    ctx.fill();

    // Fiveth rect
    let ciel = ctx.createLinearGradient(100,100,100,190);
    ciel.addColorStop(0,'blue');
    ciel.addColorStop(1,'cyan');
    ctx.beginPath();
    ctx.rect(72,72,276,107);
    ctx.fillStyle = ciel;
    ctx.fill();

    // Tenth rect
    ctx.beginPath();
    ctx.rect(280,130,10,60);
    ctx.fillStyle = 'brown';
    ctx.fill();

    //Tree
    ctx.beginPath();
    ctx.fillStyle = 'brown';
    ctx.arc(315,140,15,340,2 * Math.PI);
    ctx.fill();

    ctx.beginPath();
    ctx.strokeStyle = 'brown';
    ctx.arc(300, 130, 15, 355, 2* Math.PI, false);  // Bouche (sens horaire)
    ctx.lineWidth = 10;
    ctx.stroke();

    ctx.beginPath();
    ctx.strokeStyle = 'brown';
    ctx.arc(195, 200, 15, 190,  Math.PI, );  // Bouche (sens horaire)
    ctx.lineWidth = 10;
    ctx.stroke();

    ctx.beginPath();
    ctx.strokeStyle = 'brown';
    ctx.arc(195, 230, 15, 80,  2* Math.PI,false );  // Bouche (sens horaire)
    ctx.lineWidth = 10;
    ctx.stroke();

    ctx.beginPath();
    ctx.rect(205,230,10,18);
    ctx.fillStyle = 'brown';
    ctx.fill();

    //****************** HOUSE
    // Sixst rect
    ctx.beginPath();
    ctx.rect(150,140,80,60);
    ctx.fillStyle = 'yellow';
    ctx.fill();

    // Seveth rect
    ctx.beginPath();
    ctx.rect(200,160,20,20);
    ctx.fillStyle = 'brown';
    ctx.fill();

    // Heighth rect
    ctx.beginPath();
    ctx.rect(170,170,20,30);
    ctx.fillStyle = 'brown';
    ctx.fill();

    // Nineth rect
    ctx.beginPath();
    ctx.rect(200,100,20,30);
    ctx.fillStyle = 'brown';
    ctx.fill();

    ctx.beginPath();
    ctx.lineWidth = 2;
    ctx.fillStyle = 'brown';
    ctx.arc(180,170,10,340,2 * Math.PI,);
    ctx.fill();


    // Triangle
    ctx.beginPath();
    ctx.moveTo(190, 90);
    ctx.lineTo(230, 140);
    ctx.lineTo(150, 140);
    ctx.fillStyle = 'red';
    ctx.fill();




    // Road
    ctx.beginPath();
    ctx.lineWidth = 2;
    ctx.fillStyle = 'brown';
    ctx.arc(180,170,10,340,2 * Math.PI,);
    ctx.fill();







    // for (let i = 0; i <10; i++){
    //     let initialHorizontalOffset = 10;
    //     let initialVerticalOffset = 10;
    //     let rectWidth = 20;
    //     let rectHeight = 40;
    //     let spacing = 5;
    //     for (let j = 0; j <5; j++){
    //         let lFillColor = 50;
    //         ctx.strokeStyle = `hsl(${72 * j},100%,${lFillColor + (i * 5)}%)`;
    //         ctx.strokeRect(
    //             initialHorizontalOffset + (i * (rectWidth + spacing)),
    //             initialVerticalOffset + (j * (rectHeight + spacing)),
    //             20,
    //             40);
    //     }
    // }
    // let color = ctx.createLinearGradient(50,50,150,150);
    // color.addColorStop(0,'blue');
    // color.addColorStop(1,'purple');
    // ctx.fillStyle = color;
    //
    //
    // ctx.beginPath();
    // ctx.lineWidth = 2;
    // ctx.strokeStyle = color;
    // ctx.arc(100,100,50,0,2 * Math.PI,);
    // ctx.fill();
}
draw();
