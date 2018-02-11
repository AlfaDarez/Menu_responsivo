<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/header.css">
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <header>
      <div class="Menu">
          <h4 class="titulo" id="ver"> <i class="fas fa-align-justify " style="float:left; width=40px;"  ></i> Menu <i class="fas fa-anchor ">  </i></h4>
      </div>

      <nav class="nav nav-bar ocultar" id="nav">

        <ul>
        <li> <i class="fas fa-home " ></i> Inicio</li>
        <li> <i class="fab fa-whmcs"></i> Quienes Somos</li>

        <li><i class="fas fa-book"></i> Portafoleo</li>
        <li> <i class="fas fa-street-view"></i> Donde Encontrarnos</li>
        <li><i class="far fa-comments"></i> Contactanos</li>

        </ul>
      </nav>
    </header>



    <!-- Optional JavaScript -->
    <script type="text/javascript">
   document.getElementById('ver').onclick=function (){

      vermenu();

   }
   function vermenu() {
     document.getElementById('nav').classList.toggle("ocultar");

   }


    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>




<style media="screen">

h4{
  visibility: hidden;
}

i{
  margin-left: 3px;
}
nav{
  background-color: #CC5A14;
  margin-top: 30px;
  padding: inherit;

}
 li:hover{
  background-color: #DEC962;
  color: #CC5A14;
  border-radius: 8px;
  cursor: pointer;


}
li{
  height: 100%;
  margin: 1px;
  padding: 10px;
}
ul li{
  text-decoration: none;
  list-style: none;

  box-sizing: border-box;
  float: left;
  margin-left: 25px;
  color:white;
  margin: auto auto auto auto;
  padding-top: 10px;

  font-size: 20px;
  text-shadow:  1px 1px 1px  white;
}
ul{
  padding: 5px;
  margin: auto;
}
@media only screen and (max-width: 800px) {
  nav{
margin-top: inherit;
  }

    ul li{

    float: none;
    padding-top: 15px;
    width: 100%;


    }
     nav ul{

    float: none;

    padding: 10px;
    width: 100%;
    }
    h4{
      visibility: visible;
      color:white;
      margin: auto auto auto auto;
      padding-top: 10px;
      cursor: pointer;


    }
  .Menu  h4 {

      background-color: #CC5A14;

    }
     .titulo {
      padding: 10px;

      text-align: center;
    }
    i{
      color:red;
    }
    .ocultar{
      visibility: hidden;
    }


}








</style>
