const root = new Vue(
    {
        el: '#root',
        data: {
            albums: [],
        },

        methods:{
            getAlbum(){
                // Make a request for a user with a given ID
                axios.get('https://flynn.boolean.careers/exercises/api/array/music')
                .then((response) => {
                    // handle success
                    this.albums = response.data.response;
                    console.log(this.albums);
                    
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