<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Detailing</title>
</head>
<body>
<header class="arriba">
    <div id="contenedor">
     <div id="logo">
     <div class="contenedorimg">
     <img id="imglogo" src="/img/porsche.jpg" alt="logo"> 
         </div>
         <div class="lineaHeader"></div>
        
     </div>
     
     <nav id="listaDeMenu">
       <ul class="idMenu">
         <li id="menu" class="meHome"> <a  class="tipografiaMenu" href="home"> Home </a>  </li>
         <li id="menu" class="meServ" > <a class="tipografiaMenu"> Servicios </a> </li>
         <li id="menu"> <a class="tipografiaMenu"> Trabajos Realizados       </a>  </li>
         <li id="menu"> <a class="tipografiaMenu"> Contacto                  </a>  </li>
       </ul>
     </nav>
    </div>
  </header>
                          <section>
                            @yield('home')
                          </section>
</body>
</html>