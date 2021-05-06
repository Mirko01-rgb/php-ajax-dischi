<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="js/script.js" charset="utf-8"></script>

    <title>PHP</title>
    <style media="screen">
      body{
        background-color: coral;
      }

      .container-card{
        display: flex;
        flex-wrap: wrap;
        padding: 30px 0px;
        justify-content: center;
      }

      .card{
        min-height: 350px;
        width: 250px;
        margin: 15px;

      }

      h1{
        text-align: center;
        font-size: 25px;
        padding: 20px 0px;
      }

      img{
        width: 200px;
        padding-bottom: 20px;
        margin: 0 auto;
      }

      p{
        font-size: 20px;
        text-align: center;
      }
    </style>



  </head>


  <body>
    <div id="app">
      <div class="container-card">
        <div v-for= "item in arrDischi"  class="card">
         <h1>{{item.title}}</h1>
         <img :src="item.poster" alt="">
         <p>{{item.author}}</p>
         <p>{{item.year}}</p>
        </div>
      </div>
    </div>
 </body>
</html>