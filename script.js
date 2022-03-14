const root = new Vue(
    {
        el: '#root',
        data: {
            albums: [],
            listaGeneri: [],
            selectedGenre: '',
        },

        computed:{
            filteredAlbum(){
                if(this.selectedGenre == ''){
                    return this.albums;
                }else{
                    return this.albums.filter(element =>{
                    return element.genre == this.selectedGenre;
                    }); 
                } 
            }
        },

        methods:{
            getAlbum(){
                // Make a request for a user with a given ID
                axios.get('http://localhost/Ercizi%20Boolean%20PHP/php-ajax-dischi/server.php')
                .then((response) => {
                    // handle success
                    this.albums = response.data.albums;
                    console.log(this.albums);
                    
                    for (let i = 0; i < this.albums.length; i++) {
                        if(!this.listaGeneri.includes(response.data.albums[i].genre)){
                            this.listaGeneri.push(response.data.albums[i].genre);    
                        } 
                    }
                    console.log(this.listaGeneri);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });
            }
        },

        created(){
            this.getAlbum();
        }
    }
);