<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Código Falado</title>
    <style>
        :root{
    --negro: #000000;
    --blanco: #ffffff;

    --cafe-1: #9c5a52;
    --cafe-2: #74433b;
    --cafe-3: #48211c;
    --cafe-s: #914942;
    --cafe-s2: #653932;

    --boca: #ffbb9c;
    --boca-s: #ffaf96;

    --rosa: #ff3960;
    --rojo: #ff0059;
    --marron: #b42644;

    --azul: #EB007D;
    --azul-s: rebeccapurple;

}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background: var(--azul);
}
.shadow{
    position: absolute;
    width: 100%;
    height: 25px;
    bottom: 105px;
    border-radius: 25px;
    background: var(--azul-s);
    z-index: -1;
}

.main{
    width: 800px;
    height: 600px;
    position: relative;
}
.arbol{
    position: absolute;
    width: 200px;
    height: 400px;
    left: 50px;
    bottom: 125px;
}
.arbol:nth-of-type(2){
    left: calc(100% - 250px);
    transform: rotateY(180deg);
}
    .atronco{
        position: absolute;
        bottom: 0;
        left: 117px;
        width: 15px;
        height: 80%;
        border-radius: 5px;
        background: var(--azul-s);
    }
    .copa{
        position: absolute;
        top: 20px;
        left: 75px;
        width: 200px;
        height: 100px;
        border-radius: 25px;
        background: var(--azul-s);
    }
    .copa:nth-of-type(2){
        top: 90px;
        left: 0px;
        width: 100px;
        height: 40px;
    }
    .copa:nth-of-type(3){
        top: 150px;
        width: 150px;
        height: 80px;
        left: 0px;
    }
    .copa:nth-of-type(4){
        top: 130px;
        height: 50px;
        width: 50px;
        left: 150px;
    }
.simio{
    width: 250px;
    height: 300px;
    position: absolute;
    right: calc(50% - 160px);
    bottom: 122px;
}
.copete{
    position: absolute;
    width: 60px;
    border-top: 30px solid var(--cafe-2);
    border-left: 30px solid transparent;
    border-bottom: 30px solid transparent;
    border-right: 30px solid var(--cafe-2);
    transform: rotateZ(45deg);
    border-radius: 50%;
    animation: copete .25s infinite ease-in-out alternate;

}
    .copete--i{ left: 25px;}
    .copete--d{
        top: 15px;
        left: 54px;
    }

.oreja{
    position: absolute;
    top: 50px;
    height: 55px;
    width: 55px;
    border-radius: 50%;
    animation: oreja 1s infinite ease-in-out;
}

    .oreja--i{
        left: 3px;
        background: var(--cafe-3);

    }
    .oreja--d {
        display: flex;
        justify-content: center;
        align-items: center;
        left: 135px;
        background: var(--cafe-2);
    }
        .oreja--d::after{
            content: '';
            position: absolute;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: var(--cafe-3);
        }
.cabeza{
    width: 135px;
    height: 135px;
    position: absolute;
    top: 30px;
    left: 20px;
    border-radius: 50%;
    background: var(--cafe-2);
    z-index: 100;
}
    .cabeza .mancha{
        position: absolute;
        bottom: 10px;
        right: 10px;
        height: 20px;
        width: 10px;
        border-radius: 5px;
        background: var(--cafe-s2);
    }
    .cabeza .mancha:nth-of-type(2){
        bottom: 40px;
        right: 15px;
        height: 15px;
    }
    .cabeza .mancha:nth-of-type(3){
        bottom: 70px;
        right: 30px;
        height: 15px;
        width: 5px;
    }
    .cabeza .mancha:nth-of-type(4){
        bottom: 60px;
        right: 10px;
        height: 10px;
        width: 5px;
    }

.ojos{
    position: absolute;
    top: 55px;
    left: 35px;
    width: 65px;
    height: 25px;
    z-index: 200;
}
    .ceja{
        height: 7px;
        width: 95%;
        position: absolute;
        top: 0;
        left: 2px;
        background: var(--negro);
        border-radius: 5px;
        z-index: 1;
    }
    .ojo{
        position: absolute;
        width: 22px;
        height: 22px;
        background: var(--blanco);
        border-radius: 50%;
    }
    .ojo::after{
        content: '';
        position: absolute;
        left: 7px;
        bottom: 3px;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: var(--negro);
        animation: ojo 2s infinite alternate;
    }

    .ojo--i{ left: 10px;}
    .ojo--d{ left: 30px; }
.nariz{
    width: 105px;
    height: 60px;
    position: absolute;
    left: 15px;
    top: 80px;
    z-index: 300;
}
    .fosa{
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--rojo);
        overflow: hidden;
        animation: fosa 1s infinite;

    }
    .fosa::before{
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        border-radius: 50%;
        bottom: 10px;
        left: 5px;
        background: var(--rosa);
    }
    .fosa::after{
        content: '';
        position: absolute;
        height: 35%;
        width: 35%;
        border-radius: 50%;
        background: var(--marron);
    }
    .fosa--i{ left: 0;}
    .fosa--d{ left: calc(100% - 60px);}


.boca{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 120px;
    height: 65px;
    top: 110px;
    left: 10px;
    border-radius: 60px;
    z-index: 250;
    background: var(--boca-s);
    overflow: hidden;
}
    .boca::before{
        content: '';
        position: absolute;
        bottom: 10px;
        width: 100%;
        height: 100%;
        border-radius: 60px;
        background: var(--boca);
    }
    .boca::after{
        content: '';
        position: absolute;
        width: 25%;
        height: 10px;
        margin-top: 7px;
        border-radius: 5px;
        background: var(--blanco);
    }
.tronco{
    width: 135px;
    height: 160px;
    position: absolute;
    top: 95px;
    left: 20px;
    border-bottom-left-radius: 35px;
    background: var(--cafe-s2);
    z-index: 50;
    overflow: hidden;
}
    .tronco:before{
        content: '';
        position: absolute;
        width: 100%;
        height: 90%;
        bottom: 20px;

        border-bottom-left-radius: 50px;
        background: var(--cafe-2);
    }
    .tronco .mancha{
        position: absolute;
        bottom: 30px;
        left: 20px;
        height: 20px;
        width: 10px;
        border-radius: 5px;
        background: var(--cafe-s2);
    }
    .tronco .mancha:nth-of-type(2){
        bottom: 30px;
        left: 55px;
        height: 15px;
    }
    .tronco .mancha:nth-of-type(3){
        bottom: 60px;
        left: 20px;
        height: 15px;
        width: 5px;
    }
    .tronco .mancha:nth-of-type(4){
        bottom: 55px;
        left: 40px;
        height: 13px;
    }

.brazo{
    position: absolute;
    bottom: 0;
    width: 80px;
    height: 120px;
    border-top-left-radius: 15px;
    border-top-right-radius: 30px;
    transform-origin: top right;
    animation: brazo 1s infinite ease-in-out;
}

.brazo-i::after,
.brazo-d::after{
    content: '';
    position: absolute;
    bottom: 0;
    right: -20px;
    width: 20px;
    height: 30px;
    border-bottom-right-radius: 10px;
    background: var(--cafe-3);
}
    .brazo-i{
        left: 0;
        border-bottom-left-radius: 40px;
        background: var(--cafe-3);
    }
    .brazo-d{
        left: 102px;
        width: 83px;
        border-bottom-left-radius: 50px;
        z-index: 300;
        background: var(--cafe-s);
    }

        .brazo-d::after{background: var(--boca);}
        .brazo-d::before{
            content: '';
            position: absolute;
            width: 100%;
            height: 85%;
            bottom: 20px;

            border-top-left-radius: 15px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 50px;
            background: var(--cafe-1);
        }

        .brazo-d .mancha{
            position: absolute;
            top: 20px;
            left: 20px;
            height: 20px;
            width: 10px;
            border-radius: 5px;
            background: var(--cafe-s);
        }
        .brazo-d .mancha:nth-of-type(2){
            top: 25px;
            left: 55px;
            height: 15px;
        }
        .brazo-d .mancha:nth-of-type(3){
            top: 45px;
            left: 45%;
            height: 23px;
            width: 12px;
        }
        .brazo-d .mancha:nth-of-type(4){
            top: 75px;
            left: 55px;
            height: 13px;
        }
        .brazo-d .mancha:nth-of-type(5){
            top: 65px;
            left: 18px;
            width: 6px;
            height: 18px;
        }

.piernas{
    width: 120px;
    height: 65px;
    position: absolute;
    bottom: 40px;
    right: 0;
    border-radius: 30px;
    background: var(--cafe-s2);
    z-index: 50;
    overflow: hidden;
}
    .piernas .mancha{
        position: absolute;
        top: 10px;
        right: 30px;
        height: 10px;
        width: 20px;
        border-radius: 5px;
        background: var(--cafe-s2);
    }
    .piernas .mancha:nth-of-type(2){
        top: 25px;
        right: 15px;
        word-spacing: 15px;
    }
    .piernas::before{
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: 20px;
        border-bottom-right-radius: 30px;
        background: var(--cafe-2);
    }
    .piernas--b{
        position: absolute;
        bottom: 0;
        right: 18px;
        width: 40px;
        height: 50px;
        background-image:
            linear-gradient(
                to right,
                var(--cafe-3) 50%,
                var(--cafe-s2) 50%
                );
    }
/**/
@keyframes brazo {
    0%{ bottom: 0; }
    80%{ bottom: 5px; }
}
@keyframes copete {
    0%{ transform: rotateZ(46deg); }
    100%{ transform: rotateZ(44deg); }
}
@keyframes fosa {
    0%{
        width: 60px;
        height: 60px;
    }
    80%{
        width: 59px;
        height: 59px;
    }
}
@keyframes ojo {
    0%{ left: 7px; }
    100%{ left: 12px; }
}
@keyframes oreja {
    0%{ top: 49px; }
    100%{ top: 52px; }
}


@media (max-width: 1024px){ .main{ transform: scale(.8);} }
@media (max-width: 768px){ .main{ transform: scale(.7);} }	
@media (max-width: 640px){ 
	.main{ transform: scale(.5);}
	.arbol:nth-of-type(2){ display: none; }
}	
@media (max-width: 480px){ 
	.main{ transform: scale(.4);}
	.arbol:nth-of-type(1){ display: none; }
}		
@media (max-width: 360px){ .main{ transform: scale(.4); }	}
    
    </style>
</head>
<body>
    <div class="main">

        <div class="arbol">
            <div class="atronco"></div>
            <div class="copa"></div>
            <div class="copa"></div>
            <div class="copa"></div>
            <div class="copa"></div>
        </div>
        <div class="arbol">
            <div class="atronco"></div>
            <div class="copa"></div>
            <div class="copa"></div>
            <div class="copa"></div>
            <div class="copa"></div>
        </div>
            
        <div class="simio">
        
            <div class="copete copete--i"></div>
            <div class="copete copete--d"></div>
            <div class="oreja oreja--i"></div>
            <div class="oreja oreja--d"></div>
            <div class="cabeza">
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
            </div>
            <div class="ojos">
                <div class="ceja"></div>
                <div class="ojo ojo--i"></div>
                <div class="ojo ojo--d"></div>
            </div>
            <div class="nariz">
                <div class="fosa fosa--i"></div>
                <div class="fosa fosa--d"></div>
            </div>
            <div class="boca"></div>
            <div class="tronco">
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
            </div>
            <div class="piernas">
                <div class="mancha"></div>
                <div class="mancha"></div>
            </div>
            <div class="piernas--b"></div>
            <div class="brazo brazo-i"></div>
            <div class="brazo brazo-d">
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
                <div class="mancha"></div>
            </div>
        </div>
        <div class="shadow"></div>        
</body>
</html>