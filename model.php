<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        body {
            font-family: 'Mali', cursive;
            background: url(https://png.pngtree.com/thumb_back/fw800/back_pic/00/05/66/1356275836021ea.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        #container {
            width: 600px;
            height: 400px;
            border: 1px solid black;
            margin: 10px auto;
            padding: 0px;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="manu.php">Reduce costs Save material</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="prism1.php">ปริซึมสี่เหลี่ยมมุมฉาก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cylindrical.php">ทรงกระบอก <span class="sr-only">(current)</span></a>
                </li>
        </div>
    </nav>

    <body>
        <?php
        $width = $_GET['width'];
        $height = $_GET['height'];
        $length = $_GET['length'];
        ?>
        <center>
            <script src="http://www.html5canvastutorials.com/libraries/three.min.js"></script>
            <br>
            <h2>โมเดลเเสดงผลของปริซึมสี่เหลี่ยมมุมฉาก</h2>
            <br>
            <div id="container"></div>
            <style>

            </style>
            <div class="display text">
                <h3> ความกว้าง <?php echo $width ?></h3>
                <h3> ความยาว <?php echo $length ?></h3>
                <h3> ความสูง <?php echo $height ?></h3>
            </div>
        </center>

    </body>


    <script type="text/javascript">
        //* by using three.js
        //TODO U can change params for learning this code
        //NODE JS
        var length = parseFloat("<?php echo $length; ?>");
        var width = parseFloat("<?php echo $width; ?>");
        var height = parseFloat("<?php echo $height; ?>");

        //Script for 3D Box 


        // revolutions per second
        var angularSpeed = 0.2;
        var lastTime = 0;

        var cube = null;
        var cylivarndrical = null;

        // this function is executed on each animation frame
        function animate() {
            // update
            var time = (new Date()).getTime();
            var timeDiff = time - lastTime;
            var angleChange = angularSpeed * timeDiff * 2 * Math.PI / 1000;
            cube.rotation.y += angleChange;
            cylindrical.rotation += angleChange;
            lastTime = time;

            // render
            renderer.render(scene, camera);

            // request new frame
            requestAnimationFrame(function() {
                animate();
            });
        }

        // renderer
        var container = document.getElementById("container");
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        container.appendChild(renderer.domElement);


        // camera
        var camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
        camera.position.z = 700;

        // scene
        var scene = new THREE.Scene();

        // cube
        cube = new THREE.Mesh(new THREE.CubeGeometry(1, 1, 1), new THREE.MeshLambertMaterial({
            color: '#cccccc'
        }));

        cube.overdraw = true;
        cube.rotation.x = Math.PI * 0.1;
        cube.rotation.y = Math.PI * 0.3;

        //ปรับอัตราส่วนการแสดงผล
        cube.scale.x = width * 15;
        cube.scale.y = height * 15;
        cube.scale.z = length * 15;

        scene.add(cube);

        // add subtle ambient lighting
        var ambientLight = new THREE.AmbientLight(0x888888);
        scene.add(ambientLight);

        // directional lighting
        var directionalLight = new THREE.DirectionalLight(0x666666);
        directionalLight.position.set(1, 1, 1).normalize();
        scene.add(directionalLight);

        // start animation
        animate();
    </script>

    </div>


</body>

</html>

<body>


</body>

</html>