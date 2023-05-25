const { createApp } = Vue;

  createApp({
    data() {
      return {
        apiUrl: 'server.php',
        arrayItems: [],
        newTask: ''
      }
    },
    methods: {
      readList(){
        axios.get(this.apiUrl)
        .then(result => {
          this.arrayItems = result.data
        })
      },
      addTask(){
        this.arrayItems.push(this.newTask);
        this.newTask = '';
      }
    },
    mounted(){
      this.readList();
      
    }
  }).mount('#app')