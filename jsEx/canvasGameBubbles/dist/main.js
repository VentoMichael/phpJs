class Circle {
    constructor(canvas,colors,ctx) { // on met le canvasElm avec new circle entre () et on le passe en argument dans le constructor Ne pas OUBLIER DE LE CHANGER PARTOUT MTN
        this.ctx = ctx;
        this.radius = 10 + Math.round(Math.random()*30) ;
        this.posX = this.radius + Math.floor(Math.random()* (canvas.width - 2 * this.radius));
        this.posY = this.radius + Math.floor(Math.random()* (canvas.height - 2 * this.radius));
        this.color = colors[Math.floor(Math.random()*colors.length)];
        this.velocityX = 5;
        this.velocityY = 5;
    }
    draw(){
        //this.ctx.clearRect(0,0,canvasElm.width,canvasElm.height);
        this.ctx.beginPath();
        this.ctx.arc(this.posX, this.posY, this.radius, 0, 2 * Math.PI);
        this.ctx.fillStyle = this.color;
        this.ctx.fill();
    }
}

const animation = {
    canvasElm : null,
    ctx : null,
    circles : [],
    nbCircle : 20,
    colors : ['red','blue','green','yellow','purple'],
    init(){
        this.canvasElm = document.createElement('canvas');
        document.body.insertAdjacentElement('afterbegin',this.canvasElm);
        this.ctx = this.canvasElm.getContext('2d');
        this.resizeCanvas();
        for (let i = 0; i <= this.nbCircle; i++){
            this.circles.push(new Circle(this.canvasElm,this.colors,this.ctx)); // on prend le canvas)
        }
        this.draw();
        this.animation();
    },
    draw(){
        for (let i = 0; i < this.nbCircle; i++){
            this.circles[i].draw();
        }
    },
    resizeCanvas(){
        this.canvasElm.width = innerWidth;
        this.canvasElm.height = innerHeight;
    },
    animation() {
        window.requestAnimationFrame(this.draw); // ca met en pause l'animation quand on a pas le focus sur le navigateur
    }
};

animation.init();
//CREATE ELEMENT CANVAS
/*


function resizeCanvas(){
    canvasElm.width = innerWidth;
    canvasElm.height = innerHeight;
}
resizeCanvas();
window.onresize = resizeCanvas;


// CONTEXT
function draw() {

    ctx.clearRect(0,0,canvasElm.width,canvasElm.height);
    ctx.beginPath();
    ctx.fillStyle = color;
    ctx.arc(posX, posY, radius, 0, 2 * Math.PI);
    ctx.fill();
    window.requestAnimationFrame(draw); // ca met en pause l'animation quand on a pas le focus sur le navigateur
    if(posX === 0 && posY === 0){
        posX = radius + Math.floor(Math.random()* (canvasElm.width - 2 * radius));
        posY = radius + Math.floor(Math.random()* (canvasElm.height - 2 * radius));
    }
    if (posX >= canvasElm.width - radius || posX <= radius){
        this.velocityX = velocityX * -1;
    }
    posX += velocityX;

    if (posY >= canvasElm.height - radius || posY <= radius){
        velocityY = velocityY * -1;
    }
    posY += velocityY;
}
*/




