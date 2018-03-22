<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <script src="https://rawgit.com/takahirox/aframe-rain/master/build/aframe-rain.min.js"></script> 
    <script src="https://unpkg.com/aframe-teleport-controls@0.2.x/dist/aframe-teleport-controls.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@3.2.5/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-randomizer-components@3.0.2/dist/aframe-randomizer-components.min.js"></script>
    <script src="https://rawgit.com/feiss/aframe-environment-component/master/dist/aframe-environment-component.min.js"></script>
    <script src="https://unpkg.com/aframe-entity-generator-component@3.0.1/dist/aframe-entity-generator-component.min.js"></script>
  </head>

  <body>
    <a-scene rain="color:#EEE; vector: 4 -15 -4; count: 8000; splash: false;">
      
      <!-- Assets -->
      <a-assets>
        <a-asset-item id="base" src="/assets/base.gltf"></a-asset-item>
        <img id="logo" src="/assets/logo.png">
        <img id="eye" src="/assets/eye.png">
        <a-asset-item id="gltflogo" src="/assets/vectre.gltf">
          
      </a-assets>
        
      <!-- Function for user count of VR pages -->
      <?php
      $lines = file('formdata.txt', FILE_IGNORE_NEW_LINES); 
      $arr = array("theatre.php", "about.php", "productviewer.php", "contact.php");
      $k=$lines[0];
      $l=360/$k; 
      $c=$l/2;
      for ($n= 0; $n < $k; $n++) {
      $c=$c + $l ; 
      echo('<a-entity position="0 1.5 0" rotation="0 '); 
      echo($c); 
      echo(' 0"> 
        
        <a-entity position="0 -.5 5" link="on: click; color: #222; image: #eye; href: ');
      echo($arr[$n]);
      echo('"></a-entity>
      </a-entity>');
      }
      ?>

      <!-- Sky -->
      <a-sky color="#111"></a-sky>

      <!-- Camera and Controls -->
      <?php include('inc/camera.php'); ?>

      <!-- Logo -->
      <!-- <a-image src="#logo" position="0 2 -3" scale="3"></a-image> -->
      <a-gltf-model src="#gltflogo" position="0 1.5 -3" scale="8 8 8"></a-gltf-model>

      <!-- Scene Base Model -->
      <?php
      $lines = file('formdata.txt', FILE_IGNORE_NEW_LINES); 
      echo('<a-entity environment="preset: '); echo($lines[1]); echo('; skyType: gradient; skyColor: black; groundTexture: walkernoise;"></a-entity>');
      ?>
    </a-scene>
  </body>
</html>