<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

        <!-- Vue.js 2 -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>

        <!-- ? -->
        <link rel="shortcut icon" href="#">
        <!-- My files -->
        <link rel="stylesheet" href="style.css">
        <script src="app.js"></script>
    </head>

    <body>

        <div id="app">
            <header>
                <h2>i tuoi album</h2>
                <select v-model="selected" @change="onChange()">
                    <option selected value="">All</option>
                    <option v-for="genre in genreList" :value="genre">
                        {{ genre }}
                    </option>
                </select>
            </header>

            <div class="slideshow-container">
                <div class="album-container"
                    v-for="album in albums">
                    <figure>
                        <img :src="album.poster" alt="">
                        <div class="play-button">
                            <i class="far fa-play-circle"></i>
                        </div>
                    </figure>
                    <div class="album-text">
                        <h3>
                            <a href="#">{{ album.title }}</a>
                        </h3>
                        <h4>
                            <a href="#">{{ album.author }}</a>
                        </h4>
                        <p>
                            <a href="#">{{ album.genre }}</a>
                        </p>
                        <p>
                            <a href="#">{{ album.year }}</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

