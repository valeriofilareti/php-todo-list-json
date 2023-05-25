<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Document</title>
  
</head>
<body id="app">
  <h1>todolist</h1>
  <div class="container">
  <h1 v-for="(item, index) in arrayItems">
    {{ item }}
  </h1>
  </div>
  <script src="main.js"></script>
</body>
</html>