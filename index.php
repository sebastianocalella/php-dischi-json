<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php dischi json</title>

        <!-- Bootstrap 5.2.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- CSS custom -->
        <link rel="stylesheet" href="./styles/custom.css">

        <!-- Vue 3 -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </head>

    <body>
        <div id="app">
            <div class="container">
                <div id="discs-container" class="row justify-content-between mt-5">
                    <div v-for="disc in discList" class="card col-3 mx-1 mb-5">
                        <img class="card-img-top my-3" :src="disc.poster" :alt="disc.title">
                        <h5 class="card-title">{{disc.title}}</h5>
                        <p class="card-text">{{disc.author}}</p>
                        <h6>{{disc.year}}</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ajax axios library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <!-- JS custom script -->
        <script src="script.js"></script>
    </body>
</html>