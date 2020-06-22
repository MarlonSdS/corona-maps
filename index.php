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
                coords: { lat: position.coords.latitude,lng: position.coords.longitude },     
                content: '<h3>Estou Aqui!</h3>',
                iconImage : '../corona-maps-master/view/imagens/ponto pessoa.png'
            });

            //Jaguaribe

            addMarca({
                coords: {
                    lat: -5.895499, 
                    lng: -38.623067
                },
                content: '<b><h3>Polícia Militar</h3></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto seguranca.png'
            }); 

            addMarca({
                coords: {
                    lat: -5.882458, 
                    lng: -38.617713
                },
                content: '<b><h3>Hospital Municipal</h3><br>Horário de Funcionamento<br>Atendimento 24:00 Horas<br></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto hospital.png'
            });

            addMarca({
                coords: {
                    lat: -5.903770,
                    lng: -38.622950
                },
                content: '<b><h3>Posto São Luiz</h3><br>Horário de Funcionamento<br>De 05:00 às 22:00 Horas<br>Fone: (88) 3522-2366</b>',
                iconImage : '../corona-maps-master/view/imagens/ponto gasolina.png'
            });

            addMarca({
                coords: {
                    lat: -5.902542,
                    lng: -38.627272
                },
                content: '<b><h3>UPA - Unidade de Pronto Atendimento</h3><br>Horário de Funcionamento<br>Atendimento 24 Horas<br>Fone: (88) 3522-2746</b>',
                iconImage : '../corona-maps-master/view/imagens/ponto hospital.png'
            });

            addMarca({
                coords: {
                    lat: -5.903300,
                    lng: -38.623822
                },
                content: '<b><h3>Restaurante do Galego</h3><br>Horário de Funcionamento<br>De 06:00 às 12:00 Horas<br></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto restaurante.png'
            });

            addMarca({
                coords: {
                    lat: -5.903217,
                    lng: -38.622340
                },
                content: '<b><h3>Churrascaria Ubiratan</h3><br>Fone: (83) 3531-2736 <br></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto restaurante.png'
            });

            //Cajazeiras

            addMarca({
                coords: {
                    lat: -6.883763, 
                    lng: -38.553551
                },
                content: '<b><h3>UPA - Unidade de Pronto Atendimento</h3><br>Horário de Funcionamento<br>Atendimento 2400 Horas<br></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto hospital.png'
            });

            addMarca({
                coords: {
                    lat: -6.893001, 
                    lng: -38.565916
                },
                content: '<b><h3>Farmácia Santa Maria Eireli</h3><br>Fone: (83) 3531-3848 <br></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto farmacia.png'
            });

            addMarca({
                coords: {
                    lat: -6.892233, 
                    lng: -38.559264
                },
                content: '<b><h3>Supermercado Brasil</h3><br>Horário de Funcionamento<br>De 08:00 às 20:00 Horas<br>Fone: (83) 3531-2455</b>',
                iconImage : '../corona-maps-master/view/imagens/ponto mercado.png'
            });

            addMarca({
                coords: {
                    lat: -6.892233, 
                    lng: -38.559264
                },
                content: '<b><h3>Polisaude</h3><br>Horário de Funcionamento<br>De 07:00 às 18:00 Horas<br>Fone: (83) 3531-1938<br>Site: polisaude.com.br </b>',
                iconImage : '../corona-maps-master/view/imagens/ponto hospital.png'
            });

            addMarca({
                coords: {
                    lat: -6.892233, 
                    lng: -38.559264
                },
                content: '<b><h3>Posto Petobras</h3><br>Fone: (83) 3531-4318<br></b>',
                iconImage : '../corona-maps-master/view/imagens/ponto gasolina.png'
            });
            
            addMarca({
                coords: {
                    lat: -6.888195, 
                    lng: -38.558242
                },
                content: '<b><h3>Caixa Econômica Federal</h3><br>Horário de Funcionamento<br>De 09:00 às 15:00 Horas<br>Fone: (83) 3531-4380</b>',
                iconImage : '../corona-maps-master/view/imagens/ponto banco.png'
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