const { createApp } = Vue;

createApp({
    data(){
        return{
            arrayMusic: [],
        }
    },
    created(){
        axios
        .get("http://localhost/boolean/php-dischi-json/server.php")
        .then((resp) => {
            this.arrayMusic= resp.data.results
        })
    }
}).mount("#app");