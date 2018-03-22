<!DOCTYPE html>
<html>
  <head>
    <title>Vectre Theatre</title>
    <meta name="description" content="Hello, WebVR! - A-Frame">
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@3.2.5/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-randomizer-components@3.0.2/dist/aframe-randomizer-components.min.js"></script>
    <script src="https://rawgit.com/oscarmarinmiro/aframe-video-controls/master/dist/aframe-video-controls.min.js"></script>
    <script src="https://unpkg.com/aframe-entity-generator-component@3.0.1/dist/aframe-entity-generator-component.min.js"></script>
  </head>
  <body>
    <a-scene>
      
      <!-- Assets -->
      <a-assets>
        <a-asset-item id="theater" src="/assets/theater.gltf" ></a-asset-item>
        <video id="Video" autoplay loop="true" src="/assets/Rick & Morty.mp4"></video>
      </a-assets>

      <?php include('inc/camera.php'); ?>
      
      <!-- Theater Model -->
      <a-entity gltf-model="#theater" rotation="0 180 0" position="0 1.6 0"></a-entity>

      <!-- Link Home -->
      <a-entity scale=".4 .4 .4" position="0 1.75 1.5" link="on: click; href: index.php"></a-entity>

      <!-- Video -->
      <a-entity position="0 -.55 -1"><a-entity video-controls="src:#Video" ></a-entity></a-entity>
      <a-video src="#Video" width="4" height="2" position="0 2.2 -3.2"></a-video>
      
   </a-scene>
  </body>
</html>