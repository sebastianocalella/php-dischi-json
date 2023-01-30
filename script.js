const { createApp } = Vue;

createApp({

    data() {
        return {
            apiAdress: './server.php',
            discList: [],
            displayInfo: true,
        }
    },
    methods: {
        getDiscList() {
            axios.get(this.apiAdress).then((response) => {
                console.log(response.data);
                this.discList = response.data;
            })
        },
        closeInfo(){
            console.log(this.displayInfo);
            this.displayInfo = false;
            console.log(this.displayInfo);
        },
        myLog(item){
            console.log(item);
        }
    },
    created() {
        this.getDiscList();
        this.myLog(this.displayInfo);
    },
}).mount('#app');