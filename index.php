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
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;" v-for="music in arrayMusic">
                        <img :src="music.poster" class="card-img-top" alt="...">
                        <div class="card-body"  >
                            <p class="card-text">{{ music.year }}</p>
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