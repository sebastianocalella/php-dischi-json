const { createApp } = Vue;

createApp({

    data() {
        return {
            apiAdress: './server.php',
            discList: [],
            displayInfo: false,
            discIndex: 0,
        }
    },
    methods: {
        getDiscList() {
            axios.get(this.apiAdress).then((response) => {
                this.discList = response.data;
            })
        },
        discInfo(indexValue){
            this.discIndex = indexValue;
            this.displayInfo = true;
        },
        closeInfo(){
            this.displayInfo = false;
        }
    },
    created() {
        this.getDiscList();
    },
}).mount('#app');