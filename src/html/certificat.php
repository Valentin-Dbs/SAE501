<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap">
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: auto;
        }

        canvas {
            width: 1280px; /* Fixed width */
            height: 720px; /* Fixed height */
        }

        #downloadButton {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<?php include('../../php/auth/check_session.php'); ?>

    <canvas id="myCanvas"></canvas>
    <button id="downloadButton">Download as PNG</button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var canvas = document.getElementById("myCanvas");
            var ctx = canvas.getContext("2d");

            // Function to draw content on the canvas
            function drawCanvas() {
                // Set canvas dimensions to fixed size (1280x720)
                canvas.width = 1280;
                canvas.height = 720;

                // Load the background image
                var backgroundImage = new Image();
                backgroundImage.src = '../../img/BG-image-NOTEXT.png'; // Replace with the actual image path

                // Draw the background image onto the canvas
                backgroundImage.onload = function () {
                    ctx.drawImage(backgroundImage, 0, 0, 1280, 720);

                    // Add custom text
                    ctx.fillStyle = "#000000"; // Black text color

                    // Draw "nom" in the middle taking 50% of canvas width
                    // ctx.font = "bold 60px Josefin Sans";
                    var nom = "<?php echo $nom; ?>";
                    var nomWidth = ctx.measureText(nom).width;
                    var xNom = (1280 - nomWidth) / 2;
                    var yNom = 0.5 * 720 - 30; // 50% of canvas height, minus half the font size
                    ctx.fillText(nom, xNom, yNom);

                    // Draw "numero_etudiant" below "nom" with "n° " prepended
                    ctx.font = "bold 40px Josefin Sans";
                    var numero_etudiant = "n° <?php echo $numero_etudiant; ?>";
                    var numero_etudiantWidth = ctx.measureText(numero_etudiant).width;
                    var xNumeroEtudiant = (1280 - numero_etudiantWidth) / 2;
                    var yNumeroEtudiant = yNom + 40; // 40 pixels below "nom"
                    ctx.fillText(numero_etudiant, xNumeroEtudiant, yNumeroEtudiant);
                };
            }

            // Call drawCanvas initially
            drawCanvas();

            // Add download button functionality
            var downloadButton = document.getElementById("downloadButton");
            downloadButton.addEventListener("click", function () {
                var dataURL = canvas.toDataURL("image/png");
                var link = document.createElement("a");
                link.href = dataURL;
                link.download = "canvas_image.png";
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });
    </script>

</body>

</html>