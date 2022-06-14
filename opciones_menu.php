<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones menú</title>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    <script src="https://raw.githack.com/fcor/arjs-gestures/master/dist/gestures.js"></script>
 <style>
    /* This keeps child nodes hidden while the element loads */
    :not(:defined) > * {
      display: none;
    }
  
  
    #ar-button {
      background-repeat: no-repeat;
      background-size: 220px 220px;
      background-position: 50%;
      background-color: #fff;
      position:relative;
      left: 150%;
      transform: translateX(-50%);
      white-space: nowrap;
      bottom: 132px;
      padding: 1000px 16px 0px 40px;
      font-family: Roboto Regular, Helvetica Neue, sans-serif;
      font-size: 14px;
      color:#4285f4;
      height: 36px;
      line-height: 36px;
      border-radius: 18px;
      border: 1px solid #DADCE0;
    }
  
    #ar-button:active {
      background-color: #E8EAED;
    }
  
    #ar-button:focus {
      outline: none;
    }
  
    #ar-button:focus-visible {
      outline: 1px solid #4285f4;
    }
  
    .slider {
      width: 100%;
      text-align: center;
      overflow: hidden;
      position:20%;
      bottom: 16px;
      
    }
  
    .slides {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      -webkit-overflow-scrolling: touch;
    }
  
    .slide {
      scroll-snap-align: start;
      flex-shrink: 0;
      width: 100px;
      height: 100px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      margin-right: 10px;
      border-radius: 10px;
      border: none;
      display: flex;
    }
  
    .slide.selected {
      border: 2px solid #4285f4;
    }
  
    .slide:focus {
      outline: none;
    }
  
    .slide:focus-visible {
      outline: 1px solid #4285f4;
    }
  
  </style>
</head>
    <div class="slider" style="position: fixed; top: 10px; width: 100%; text-align: center; z-index:1;">
    <div  class="slides">
      <a href="opciones_menu/pizza.html">  <button  class="slide" id="btn1" style="background-image: url('recursos/objetos/pizza.png');">  </button></a>
      <a href="opciones_menu/sandwich.html">  <button  class="slide" id="btn3" style="background-image: url('recursos/objetos/sandwich.png');">  </button> </a>
      <a href="opciones_menu/helado.html">  <button  class="slide" id="btn4" style="background-image: url('recursos/objetos/helado.png');">  </button></a>
      <a href="opciones_menu/gelatina.html">  <button  class="slide" id="btn5" style="background-image: url('recursos/objetos/gelatina.png');">  </button></a>
      <a href="opciones_menu/refresco.html">  <button  class="slide" id="btn7" style="background-image: url('recursos/objetos/refresco.png');">  </button></a>
      <a href="opciones_menu/cafe.html">  <button  class="slide" id="btn8" style="background-image: url('recursos/objetos/cafe.png');">  </button></a>
      <a href="opciones_menu/jugo.html">  <button  class="slide" id="btn9" style="background-image: url('recursos/objetos/jugo.png');">  </button></a>
</div>
  </div>
  <body> 
    <a-scene embedded arjs="degubUIEnabled: false" vr-mode-ui="enabled: false"> <!--Scene embedded será el lanzador de la realidad aumentada-->
        <a-marker present="hiro">
            <a-entity id="entityID1" gltf-model="recursos/objetos/pizza.glb" scale=".30 .30 .30"></a-entity>
        </a-marker>
        <a-entity camera></a-entity>
    </a-scene>

</body>
</html>
