const { createApp } = Vue;

  createApp({
    data() {
      return {
        apiUrl: 'server.php',
        arrayItems: []
      }
    },
    methods: {
      readList(){
        axios.get(this.apiUrl)
        .then(result => {
          this.arrayItems = result.data
        })
      }
    },
    mounted(){
      this.readList();
      
    }
  }).mount('#app')