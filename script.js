const { createApp } = Vue;

createApp({

    data() {
        return {
            apiAdress: './server.php',
            discList: [],
        }
    },
    methods: {
        getDiscList() {
            axios.get(this.apiAdress).then((response) => {
                console.log(response.data);
                this.discList = response.data;
            })

        }
    },
    created() {
        this.getDiscList();
    },
}).mount('#app');