const App = new Vue(
    {
      el: '#app',
      data: {
        albums: [],
      },
      created() {
        //   scrivo la chiamata al controller, posso ottenere una risposta oppure un errore.
        axios.get('http://localhost/php-ajax-dischi/server/controller-api.php')
        // se ottengo una risposta: mi dará un result al cui interno avró un data, all´interno avró un results. results nel controller (server) ha il valore che gli ho assegnato (i dati che avevo nel DB).
        .then((result) => {
            console.log(result);
            this.albums = result.data.results;
        }) 
        // se non ottengo risposta mi segnalerá un errore.
        .catch((error) => { console.log(error); 
        });
      }
    }
  );