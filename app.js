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
                genre: this.selected
            }})
            .then(data => {

                this.albums = data.data[0];
                this.genreList = data.data[1];
                console.log(data);
            })
            .catch(e => {

                console.log(e);
            })
        },
        methods: {

            onChange: function() {

                console.log(this.selected);

                axios.get('data.php', {params: {
                    genre: this.selected
                }})
                .then(data => {
    
                    this.albums = data.data[2];
                })
                .catch(e => {
    
                    console.log(e);
                })
            },
        },
    })
};

document.addEventListener("DOMContentLoaded",initVue);
