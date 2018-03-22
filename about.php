<!DOCTYPE html>
<html>
  <head>
    <title>Hello, WebVR! - A-Frame</title>
    <meta name="description" content="Hello, WebVR! - A-Frame">
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@3.2.5/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-randomizer-components@3.0.2/dist/aframe-randomizer-components.min.js"></script>
    <script src="https://unpkg.com/aframe-text-geometry-component@^0.5.0/dist/aframe-text-geometry-component.min.js"></script>
    <script src="https://unpkg.com/aframe-entity-generator-component@3.0.1/dist/aframe-entity-generator-component.min.js"></script>
    <script src="func.js"></script>
    
    
  </head>
<body>
  <a-scene>
    <a-assets>
      <img id="sky" crossorigin="anonymous" src="/assets/sky.jpg">
      <img id="homeThumbnail" src="/assets/420.jpg">
    </a-assets>

    <!-- Camera and Controls -->
    <?php include('inc/camera.php'); ?>

    <!-- About Section Left -->
    <a-entity rotation="0 -60 0">
      <a-entity position="0 3 -1" text="value: About Us; width: 1; align: center; baseline: bottom;"></a-entity>

      <a-entity position="0 2.5 -1" text="

        value: Donec posuere, tortor bibendum commodo iaculis, erat felis efficitur est, at ultricies mi urna quis ligula. Maecenas placerat velit et odio commodo, et auctor mauris accumsan. Aenean ornare aliquam sem, in mattis quam cursus vitae. Integer vitae orci diam. Proin sed elit id ante tempus tincidunt. Mauris orci tortor, sagittis sit amet diam ac, consectetur fermentum orci. Sed sapien risus, fringilla ac nibh ut, cursus rhoncus nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dolor dui, gravida sit amet libero in, vestibulum feugiat nunc. Aliquam scelerisque augue ut odio dignissim, sed vehicula velit suscipit. Nulla non odio eros. ;
        
        baseline: top;

        width: 1; 

        wrapCount: 30;

        ">
      </a-entity>
    </a-entity>

    <!-- About Section Mid -->
    <a-entity rotation="0 0 0">
      <a-entity position="0 3 -1" text="value: About Us; width: 1; align: center; baseline: bottom;"></a-entity>

      <a-entity position="0 2.5 -1" text="

        value: Morbi non eros in nisl blandit pretium ac ut sapien. Nullam sagittis scelerisque ultrices. Duis lacus dolor, sollicitudin vel turpis nec, finibus malesuada nulla. Sed porttitor mattis rhoncus. Pellentesque finibus interdum hendrerit. Duis pellentesque ex sit amet velit imperdiet, non auctor sem mattis. Aliquam erat volutpat.;
        
        baseline: top;

        width: 1; 

        wrapCount: 30;

        ">
      </a-entity>
    </a-entity>

    <!-- About Section Right -->
    <a-entity rotation="0 60 0">
      <a-entity position="0 3 -1" text="value: About Us; width: 1; align: center; baseline: bottom;"></a-entity>

      <a-entity position="0 2.5 -1" text="

        value: Morbi non eros in nisl blandit pretium ac ut sapien. Nullam sagittis scelerisque ultrices. Duis lacus dolor, sollicitudin vel turpis nec, finibus malesuada nulla. Sed porttitor mattis rhoncus. Pellentesque finibus interdum hendrerit. Duis pellentesque ex sit amet velit imperdiet, non auctor sem mattis. Aliquam erat volutpat.;
        
        baseline: top;

        width: 1; 

        wrapCount: 30;

        ">
      </a-entity>
    </a-entity>

    <a-sky color="#111"></a-sky>
    <a-entity position="0 1 3" src="#homeThumbnail" link="on: click; href: index.php"></a-entity>
  </a-scene>
</body>

</html>
