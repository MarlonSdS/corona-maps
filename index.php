<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Corona Maps</title>
    <link rel="stylesheet" href="view/styles/index.css">
</head>

<body>

    <header>

    </header>

    <!-- Menu -->
    <div class="Menu">
        <input type="checkbox" id="chec">
        <label for="chec">
            <img src="view/imagens/menu.png">
        </label>

        <nav>
            <ul>
                <li><b><a href="index.html">Inicio</a></b></li>
                <li><b><a href="">Regional</a></b></li>
                <li><b><a href="view/login.php">Entrar</a></b></li>
            </ul>
        </nav>
    </div>

    <!-- Integra SUS -->
    <div class="sus">
        <iframe style="border: 0;" src="https://indicadores.integrasus.saude.ce.gov.br/indicadores/indicadores-coronavirus/coronavirus-ceara" width="600px" height="600px" frameborder="0" scrolling="16"></iframe>
    </div>

    <section class="principal">

        <h1>
        </h1>
    </section>

    <h2> <b>ATENDIMENTO ONLINE</b></h2>

    <!-- Mapa -->
    <div id="map"></div>

    <script>
        if ('geolocation' in navigator) {
            navigator.geolocation.getCurrentPosition(initMap);
        }

        function initMap(position) {

            var options = {
                zoom: 15,
                center: {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                }
            }

            var map = new google.maps.Map(document.getElementById('map'), options);

            var mark = new google.maps.Marker({
                position: {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                },
                map: map
            });

            //Adicionar Marcas

            addMarca({
                coords: {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                },
                //iconImage: 'imagens/icon.png',
                content: '<h3>Estou Aqui!</h3>'
            });

            //Jaguaribe

            addMarca({
                coords: {
                    lat: -5.894116,
                    lng: -38.623537
                },
                content: '<h3>Queiroz</h3>'
            });

            addMarca({
                coords: {
                    lat: -5.894586,
                    lng: -38.622207
                },
                content: '<h3>Fórum</h3>'
            });

            addMarca({
                coords: {
                    lat: -5.904624,
                    lng: -38.624227
                },
                content: '<h3>Posto Petobras</h3>'
            });

            addMarca({
                coords: {
                    lat: -5.903770,
                    lng: -38.622950
                },
                content: '<h3>Posto São Luiz</h3>'
            });

            addMarca({
                coords: {
                    lat: -5.902105,
                    lng: -38.624473
                },
                content: '<h3>RT Petróleo</h3>'
            });

            addMarca({
                coords: {
                    lat: -5.904490,
                    lng: -38.624428
                },
                content: '<h3>BR Auto Posto Rio Grandense</h3>'
            });

            addMarca({
                coords: {
                    lat: -5.903300,
                    lng: -38.623822
                },
                content: '<h3>Restaurante do Galego</h3>',

            });

            addMarca({
                coords: {
                    lat: -5.903217,
                    lng: -38.622340
                },
                content: '<b><h3>Churrascaria Ubiratan</h3><br>Horário de Funcionamento<br>De 06:00 às 20:00 Horas<br>Fone: (88) 9999-9999</b>',


            });

            //Cajazeiras

            addMarca({
                coords: {
                    lat: -6.890288,
                    lng: -38.556037
                },
                content: '<h3>Posto Petobras</h3>'
            });

            //Adicionar Marcas

            //Funções da Marcas    
            function addMarca(props) {
                var mark = new google.maps.Marker({
                    position: props.coords,
                    map: map,
                    icon: props.iconImage,
                    content: props.content
                });

                var infoWindow = new google.maps.InfoWindow({
                    content: props.content
                });

                mark.addListener('click', function() {
                    infoWindow.open(map, mark);
                });
                //Funções da Marcas 
            }

        }
    </script>

    <section class="fundo_mapa">

        <h1>
        </h1>
    </section>

    <h2 class="servico"> <b>MAPA DE SERVIÇOS</b></h2>
    <!-- ^Mapa^ -->

    <!-- Chave de Ativação do Mapa -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtzj-IWXelv6rAMJgi4SS7Pjk7MNqsiqU&callback=initMap" async defer></script>

    <footer></footer>

</body>

</html>