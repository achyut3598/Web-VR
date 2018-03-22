<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-teleport-controls@0.2.x/dist/aframe-teleport-controls.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@3.2.5/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-randomizer-components@3.0.2/dist/aframe-randomizer-components.min.js"></script>
    <script src="https://unpkg.com/aframe-entity-generator-component@3.0.1/dist/aframe-entity-generator-component.min.js"></script>
    <script type='text/javascript' src='func.js'></script>
  </head>
  <body>
    <a-scene>
      
      <!-- Assets -->
      <a-assets>
        <a-asset-item id="start" src="/assets/Start.gltf"></a-asset-item>
        <a-asset-item id="mid" src= "/assets/Mid.gltf"></a-asset-item>
        <a-asset-item id="end" src="/assets/End.gltf"></a-asset-item>
      </a-assets>
      <!-- Function for user count of Models -->
      
        <?php
        $lines = file('formdata.txt', FILE_IGNORE_NEW_LINES); 
        echo('<a-entity>');
          $k=$lines[3];
          $l=($k *4)/$k; 
          $c=0;
          for ($n= 0; $n < $k; $n++) {
              
            echo('<a-entity position="0 0 '); 
            echo($c);
            echo('">');
            if ($n==0)
              {
                echo('<a-entity gltf-model="#start" scale="4 4 4" position="0 0 0"');
                echo('></a-entity>');
              } 
            elseif ($n>0 && $n< ($k-1)) {
              echo('<a-entity gltf-model="#mid" scale="4 4 4" position="0 0 0');
              echo('"></a-entity>');
            }
            else {
              echo('<a-entity gltf-model="#end" scale="4 4 4" position="0 0 0');
              echo('"><a-entity>');
            }

          echo('</a-entity>');
          $c=$c + $l ;
          }
        echo('</a-entity>');
        ?>
      
      <!-- Camera and Controls -->
      <?php include('inc/camera.php'); ?>

      <!-- Sky -->
      <a-sky color="#111"></a-sky>
         
    </a-scene>
  </body>
</html>