
<!DOCTYPE html>
<html>
<head>
  <title>My A-Frame Scene</title>
  <script src="https://aframe.io/releases/0.2.0/aframe.min.js"></script>
  <script src="https://rawgit.com/oscarmarinmiro/aframe-video-controls/master/dist/aframe-video-controls.min.js"></script>
</head>

 <body>
    <a-scene>
      <a-assets>
        <video id="video_1" src="https://www.youtube.com/watch?v=kSLnIIQqPVI"></video>
      </a-assets>

      <a-camera position="0 0 5">
          <a-cursor id="cursor" color="yellow"></a-cursor>
      </a-camera>


      <a-entity video-controls="src:#video_1"></a-entity>

    </a-scene>
  </body>
</html>