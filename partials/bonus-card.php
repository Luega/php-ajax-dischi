<!-- card -->
<!-- non useró piú php come in card.php, ma useró js rendendo la pagina dinamica. -->
<div class="card pt-4 m-3 d-flex my_flex-basis-5" v-for="album in albums">
    <img class="w-75 m-auto card-img-top" :src='album.poster' :alt='album.title'>
    <div class="card-body">
        <h5 class="card-title text-white text-center">{{ album.title }}</h5>
        <h6 class="card-title text-white-50 text-center">{{ album.author }}</h6>
        <h6 class="card-title text-white-50 text-center">{{ album.firstRelease }}</h6>
    </div>
</div>            