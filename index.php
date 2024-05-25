<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolfy</title>
    <!-- my style -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body class="ms_bg">
    <div id="app">
        <header class="mb-5 img-fluid container-fluid">
            <img class="ms_spotify-logo p-2" src="./img/Spotify-logo.png" alt="Spotify logo">
        </header>
        <main>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center g-4">
                    <div class="col" v-for="music in arrayMusic">
                        <div class="ms_card_container d-flex justify-content-center p-3">
                            <div class="text-white" style="width: 18rem;">
                                <img :src="music.poster" class="card-img-top mb-2 img-fluid" :alt="`${music.title} di ${music.author}`">
                                <div class="card-body">
                                    <h6 class="card-text text-center">{{music.title}}</h4>
                                        <p class="card-text text-center">{{ music.author }}</p>
                                        <p class="card-text text-center">{{music.year}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<!-- js -->
<script src="./js/script.js"></script>
</body>

</html>