window.addEventListener('load', () => {
    const app = Vue.createApp({
        data() {
            return {
                pokemons: [],
                tipos: [],
                comentarios: [],
                search: '',
                comment: ''
            }
        },
        created() {
            this.listPokemons();
            this.listTipos();
            
        },
        methods: {
            //Listado de Pokémons - JSON
            listPokemons: async function () {
                const res = await fetch('https://itsjavi.com/pokemon-assets/assets/data/pokemon.json');
                const data = await res.json();
                this.pokemons = data;
                this.updateLocalStorage();
            },
            //Listado de Tipos de Pokémons - JSON
            listTipos: async function () {
                const res = await fetch('https://itsjavi.com/pokemon-assets/assets/data/types.json');
                const data = await res.json();
                this.tipos = data;
                this.updateLocalStorage();
            },
            updateLocalStorage: function () {
                localStorage.setItem('vue3.pokemons', JSON.stringify(this.pokemons));
                localStorage.setItem('vue3.tipos', JSON.stringify(this.tipos));
                if(!localStorage.getItem('vue3.comentarios')){
                    localStorage.setItem('vue3.comentarios', JSON.stringify(this.comentarios));
                }
            },
            saveComment: function () {
                if (this.comment !== null && this.comment !== '') {
                    var newComment = JSON.parse(localStorage.getItem('vue3.comentarios'));
                    newComment.push(this.comment);
                    localStorage.setItem('vue3.comentarios', JSON.stringify(newComment));
                }
                this.comment = '';
            }
        },
        computed: {
            pokeList: function () {
                return Object.values(this.pokemons).filter((pokemon) => {
                    return pokemon.name.toUpperCase().match(this.search.toUpperCase());
                });
            },
        }
    });

    app.mount('#app');
});
