function initVue() {

    new Vue ({

        el: '#app',
        data: {

            albums: [],
            genreList: [],
            selected: '',
        },
        mounted() {

            axios.get('data.php', {params: {
                genre: this.selected,
                callNum: 1
            }})
            .then(data => {

                this.albums = data.data[0];
                this.genreList = data.data[1];
            })
            .catch(e => {

                console.log(e);
            })
        },
        methods: {

            onChange: function() {

                axios.get('data.php', {params: {
                    genre: this.selected,
                    callNum: 2 
                }})
                .then(data => {
    
                    this.albums = data.data;
                })
                .catch(e => {
    
                    console.log(e);
                })
            },
        },
    })
};

document.addEventListener("DOMContentLoaded",initVue);
