<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/practica.js')}}"></script>
    <title>Document</title>
</head>
<body>
    
    

    <button onclick="prueba()">Boton</button>
    <input type="text" id="pruebaId">

    <br><br>
    <button onclick="sobreescribir()">Sobreescribir</button>

    <input id="input" type="text" onkeyup="digitador()">
    <input id="input2" type="text">

    <a>
        <div class="modulo" onmouseover="mouse(true,1)" onmouseout="mouse(false,1)">
            <div class="circulo circulo1 " style="background-color: transparent; border: 3px solid rgb(59, 68, 128);">
                <img class="icono1 img validacion" src="http://192.168.200.30/audisoft/public/img/validacioness.png" alt="" style="width: 7em; filter: grayscale(0%);">
            </div>
            <h5 class="texto1" style="color: rgb(59, 68, 128);">VALIDACIONES </h5>
        </div>
    </a>

    <a>
        <div class="modulo" onmouseover="mouse(true,2)" onmouseout="mouse(false,2)">
            <div class="circulo circulo2 " style="background-color: transparent; border: 3px solid rgb(80, 152, 211);">
                <img class="icono2 img validacion" src="http://192.168.200.30/audisoft/public/img/user-circle.png" alt="" style="width: 7em; filter: grayscale(0%);">
            </div>
            <h5 class="texto2" style="color: rgb(80, 152, 211);">USUARIO</h5>
        </div>
    </a>

    <button onclick="practica()">practica</button>
    <input type="text" id="practicaId">

    <button id="button-nuevo" onclick="creacion('{{  url('/creacion')}}')">Enviar</button>
    

    <table class="table" id="tabla">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($nueva as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
              <td>6546+546</td>
            </tr>
                
            @empty
                <tr>
                    <td colspan="3">vacio</td>
                </tr>
            @endforelse
           
          </tbody>
      </table>

      @csrf

    
</body>
</html>