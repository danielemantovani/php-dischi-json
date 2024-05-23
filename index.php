<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolfy</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- my style -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-6 col-lg-4" v-for="music in arrayMusic">
                    <div class="card" style="width: 18rem;">
                        <img :src="music.poster" class="card-img-top" :alt="`${music.title} di ${music.author}`">
                        <div class="card-body">
                            <h4 class="card-text text-center">{{music.title}}</h4>
                            <p class="card-text text-center">{{ music.author }}</p>
                            <h4 class="card-text text-center">{{music.year}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="./js/script.js"></script>
</body>

</html>