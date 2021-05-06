function initVue() {

    new Vue ({

        el: '#app',
        data: {

            albums: [],
        },
        mounted() {

            axios.get('data.php')
            .then(data => {

                this.albums = data.data;
            })
            .catch(e => {

                console.log(e);
            })
        },
    })
};

document.addEventListener("DOMContentLoaded",initVue);
