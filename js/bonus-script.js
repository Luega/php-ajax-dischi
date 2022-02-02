const App = new Vue(
    {
      el: '#app',
      data: {
        albums: [],
        key: "",
        query: "http://localhost/php-ajax-dischi/server/bonus-controller-api.php",
      },
      methods: {
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