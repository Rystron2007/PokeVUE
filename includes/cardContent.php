<a data-bs-toggle="modal" v-bind:data-bs-target="'#poke-'+pokemon.alias">
    <img loading="lazy" class="card-img-top pkm" alt="NOT FOUND" v-bind:src="'img/pokemon/'+pokemon.sprite+'.png'"
        v-bind:style="'background-color:'+pokemon.color">
</a>
<div v-if="pokemon.color === 'Yellow' || pokemon.color === 'White'" class="card-body"
    v-bind:style="'background-color:'+pokemon.color">
    <h5 class="card-title text-primary">{{pokemon.name}}</h5>
    <p class="card-text text-primary">Tipo Pokémon: {{pokemon.types[0]}} {{pokemon.types[1]}}</p>
</div>
<div v-else class="card-body" v-bind:style="'background-color:'+pokemon.color">
    <h5 class="card-title text-light">{{pokemon.name}}</h5>
    <p class="card-text text-light">Tipo Pokémon: {{pokemon.types[0]}} {{pokemon.types[1]}}</p>
</div>