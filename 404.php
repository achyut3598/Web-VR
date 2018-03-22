<!DOCTYPE html>
<html>
  <head>
    <title>404</title>
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js">
    </script>
    <script src="https://unpkg.com/aframe-animation-component@3.2.5/dist/aframe-animation-component.min.js">   	
    </script>
    <script src="https://unpkg.com/aframe-randomizer-components@3.0.2/dist/aframe-randomizer-components.min.js">   	
    </script>
    <script src="https://unpkg.com/aframe-entity-generator-component@3.0.1/dist/aframe-entity-generator-component.min.js">	
    </script>

<a-scene>
	<a-assets>
        <a-asset-item id="robot" src="/assets/robot.gltf"></a-asset-item>
	</a-assets>


	<!-- Camera and Controls -->
	<?php include('inc/camera.php'); ?>

	<a-sky id="sky" color="#111111"></a-sky>
	<a-entity rotation=" 0 0 0">
		<a-entity position="0 1 -1.5" gltf-model="#robot"></a-entity>
	</a-entity>

	<a-entity rotation=" 0 90 0">
		<a-entity position="0 1 -1.5" gltf-model="#robot"></a-entity>
	</a-entity>

	<a-entity rotation=" 0 180 0">
		<a-entity position="0 1 -1.5" gltf-model="#robot"></a-entity>
	</a-entity>

	<a-entity rotation=" 0 270 0">
		<a-entity position="0 1 -1.5" gltf-model="#robot"></a-entity>
	</a-entity>

</a-scene>