const App = new Vue(
    {
      el: '#app',
      data: {
        // array da popolare
        albums: [],
        // valore del v-model
        key: "",
        // link base della chiamata
        query: "http://localhost/php-ajax-dischi/server/bonus-controller-api.php",
      },
      methods: {
        // creo una funzione che chiami il controller ogni volta che nella select di index-ajax.php cambia il valore del v-model.
        onChange(event) {
            console.log(event.target.value);
            const parameters = {
                genre: this.key,                                                     
            }; 
            axios.get(`${this.query}`, { params: parameters})
            .then((result) => {
            this.albums = result.data.results;
            console.log(`${this.query}`, { params: parameters});
            }) 
            .catch((error) => { console.log(error); 
            });
        }
    },
    // scrivo nel created una chiamata con genere 'all', in modo tale da popolare il main di dischi dall´inizio.
      created() {
        axios.get('http://localhost/php-ajax-dischi/server/bonus-controller-api.php?genre=all')
        .then((result) => {
            this.albums = result.data.results;
        }) 
        .catch((error) => { console.log(error); 
        });
      }
    }
  );