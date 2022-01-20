<!--Header PHP Document-->
<?php include 'includes/header.php'; ?>

<div id="app" class="container-md">
    <div class="row ">
        <div class="col-md-12 p-2 text-center">
            <h2 class="m-0">¡Bienvenido a PokeVUE!</h2>
            <p class="m-0">El mejor lugar para consultas pokémon, aquí encontrarás</p>
        </div>
        <div class="col-md-12 p-2 text-left">
            <h3 class="m-0">Buscar Pokémon</h3>
            <input class="form-control bg-primary text-light" type="text" v-model="search" placeholder="Nombre">
        </div>
        <div v-for="pokemon in pokeList" class="col-md-3 p-1 text-center">
            <div class="card">
                <!--Card Content & Modal PHP Document-->
                <?php include 'includes/cardContent.php'; ?>
                <?php include 'includes/modal.php'; ?>
            </div>
        </div>
    </div>
</div>

<!--Scripts PHP Document-->
<?php include 'includes/scripts.php'; ?>

</body>

</html>