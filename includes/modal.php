<div class="modal fade" v-bind:id="'poke-'+pokemon.alias" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pokémon Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img loading="lazy" class="card-img-top pkm" alt="NOT FOUND"
                    v-bind:src="'img/pokemon/'+pokemon.sprite+'.png'" v-bind:style="'background-color:'+pokemon.color">
                <div v-if="pokemon.color === 'Yellow' || pokemon.color === 'White'" class="card-body"
                    v-bind:style="'background-color:'+pokemon.color">
                    <h5 class="text-primary">{{pokemon.name}}</h5>
                    <p class="text-primary m-0">ID Pokémon: {{pokemon.num}} </p>
                    <p class="text-primary m-0">Tipo Pokémon: {{pokemon.types[0]}}
                        {{pokemon.types[1]}}</p>
                    <p class="text-primary m-0">Peso: {{pokemon.weightkg}}kg </p>
                    <p class="text-primary m-0">Altura: {{pokemon.heightm}}m </p>
                    <p class="text-primary m-0">Habilidad Principal: {{pokemon.abilities[0]}}</p>
                </div>
                <div v-else class="card-body" v-bind:style="'background-color:'+pokemon.color">
                    <h5 class="text-light m-0">{{pokemon.name}}</h5>
                    <p class="text-light m-0">ID Pokémon: {{pokemon.num}} </p>
                    <p class="text-light m-0">Tipo Pokémon: {{pokemon.types[0]}}
                        {{pokemon.types[1]}}</p>
                    <p class="text-light m-0">Peso: {{pokemon.weightkg}}kg </p>
                    <p class="text-light m-0">Altura: {{pokemon.heightm}}m </p>
                    <p class="text-light m-0">Habilidad Principal: {{pokemon.abilities[0]}}</p>
                </div>
            </div>
            <div class="modal-footer">
                <input class="form-control border border-1 border-dark rounded-pill" type="text" v-model="comment"
                    placeholder="Comentar...">
                <button type="button" class="btn btn-success rounded-pill" v-on:click="saveComment">Comentar</button>
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>