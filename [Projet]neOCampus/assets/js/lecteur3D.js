$(

  var lastTime = 0;
  function animate() {
    var timeNow = new Date().getTime();
    if (lastTime != 0) {
      var elapsed = timeNow - lastTime;
      for (var i in cubes) {
        cubes[i].animate(elapsed);
      }
    }
    lastTime = timeNow;
  }


  function tick() {
    requestAnimFrame(tick);
    // drawScene();
    animate();
  }

  function webGLStart() {
    var canvas = document.getElementById("Test");
    initGL(canvas);
    initPrograms();
    initBuffers();

    gl.clearColor(0.0, 0.0, 0.0, 1.0);
    gl.enable(gl.DEPTH_TEST);

    tick();
  }

);