	<!-- Cursor / Camera -->
	<a-entity camera position="0 1.6 0" camera="userHeight: 1.6" look-controls>
          <a-entity cursor="fuse: true; fuseTimeout: 2000"
                    position="0 0 -1"
                    geometry="primitive: ring; radiusInner: 0.02; radiusOuter: 0.03"
                    material="color: black; shader: flat; opacity: .2;">
          </a-entity>
    </a-entity>

    
    <!-- Controls -->
    <!-- Vive. -->
      <a-entity id="teleHand" hand-controls="left" teleport-controls="type: parabolic"></a-entity>
      <a-entity id="teleHand" hand-controls="right" teleport-controls="type: parabolic"></a-entity>
      <!-- Rift -->
      <a-entity oculus-touch-controls="hand: left"></a-entity>
      <a-entity oculus-touch-controls="hand: right"></a-entity>