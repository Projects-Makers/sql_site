
    <style>
        /* Additional styles for the square */
        .square {
            width: 1100px;
            height: 900px;
            background-color: red;
            display: none;
            position: absolute;
        }

        .map-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; /* Add margin to create space between banner and map */
        }

        .close-btn {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 20px;
            height: 20px;
            background-color: white;
            color: black;
            text-align: center;
            line-height: 20px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>

    <!-- Menu boczne jest w baner.html -->
    
    <!-- Główna sekcja -->
    <main id="main">
        <section id="tresc">
            <div class="container">
                <div class="content">
                    <div class="map-container">
                        <img src="zdj/mapa.png" alt="Mapa Śląska" id="mapImage">
                        <div class="square" id="square">
                            <div class="close-btn" onclick="hideSquare()">&times;</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

    <!-- JavaScript -->
    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            const hamburger = document.getElementById('hamburger');
            menu.classList.toggle('open');
            hamburger.classList.toggle('active');
        }

        document.getElementById('mapImage').addEventListener('click', function() {
            const mapImage = document.getElementById('mapImage');
            const square = document.getElementById('square');
            const mapRect = mapImage.getBoundingClientRect();
            const squareWidth = 1100;
            const squareHeight = 900;

            const centerX = (mapRect.width / 2) - (squareWidth / 2);
            const centerY = (mapRect.height / 2) - (squareHeight / 2);

            square.style.left = `${centerX}px`;
            square.style.top = `${centerY}px`;
            square.style.display = 'block';
        });

        function hideSquare() {
            const square = document.getElementById('square');
            square.style.display = 'none';
        }
    </script>
