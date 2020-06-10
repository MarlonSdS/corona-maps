<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Corona Maps</title>
    <link rel="stylesheet" href="view/styles/index.css">
</head>

<body>


    <header></header>

    <!-- Integra SUS -->
    <div class="sus">
        <iframe style="border: 0;"
            src="https://indicadores.integrasus.saude.ce.gov.br/indicadores/indicadores-coronavirus/coronavirus-ceara"
            width="600px" height="600px" frameborder="0" scrolling="16"></iframe>
    </div>

    <section class="principal">

        <h1>dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
        </h1>
    </section>

    <h2> <b>ATENDIMENTO ONLINE</b></h2>

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
            </ul>
        </nav>
    </div>

    <!-- Mapa -->
    <div id="map"></div>

    <script>

        if ('geolocation' in navigator) {
            navigator.geolocation.getCurrentPosition(initMap);
        }

        function initMap(position) {

            var options = {
                zoom: 15,
                center: { lat: position.coords.latitude, lng: position.coords.longitude }
            }

            var map = new google.maps.Map(document.getElementById('map'), options);

            var mark = new google.maps.Marker({
                position: { lat: position.coords.latitude, lng: position.coords.longitude },
                map: map
            });

            //Adicionar Marcas
            addMarca({
                coords: { lat: position.coords.latitude, lng: position.coords.longitude },
                //iconImage: 'imagens/icon.png',
                content: '<h3>Estou Aqui!</h3>'
            });

            addMarca({
                coords: { lat: -5.894116, lng: -38.623537 },
                content: '<h3>Queiroz</h3>'
            });

            addMarca({
                coords: { lat: -5.894586, lng: -38.622207 },
                content: '<h3>Fórum</h3>'
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

                mark.addListener('click', function () {
                    infoWindow.open(map, mark);
                });
                //Funções da Marcas 
            }

        }
    </script>

    <section class="fundo_mapa">

        <h1>dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
            dfgdfgfdgdfg
            dfgdfgdfgsd<br>
        </h1>
    </section>

    <h2 class="servico"> <b>MAPA DE SERVIÇOS</b></h2>
    <!-- ^Mapa^ -->

    <!-- Chave de Ativação do Mapa -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtzj-IWXelv6rAMJgi4SS7Pjk7MNqsiqU&callback=initMap"
        async defer></script>

    <footer></footer>

</body>

</html>