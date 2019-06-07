<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lusuau</title>

        <style>
            #descuento
            {
                width:80px; 
                position:relative; 
                background-color:#F0718E; 
                color:white; 
                text-align:center; 
                border-radius:40px;
            }
            #tarjeta
            {
                width: 15rem; 
                margin:3% 3%; 
                box-shadow:4px 4px 4px #E9E9E9;
            }

        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="container" style="margin-top:5%">
            <!-- Logo -->
            <img src="{{ asset('storage/imgHome/logo.png') }}" class="float-left" width="80px">
             <!-- menu -->
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product') }}">Products</a>
                </li lass="nav-item">
                <li>
                    <a class="nav-link" href="#">Features</a>
                </li>
            </ul>

            <img src="{{ asset('storage/imgHome/image.jpg') }}" class="img-fluid" style="margin-top:2%">

            <li style="color:#F0718E; font-size:30px; margin-top:2%" >Products </li>

            <!-- se valida si entro en el link de productos y se recorren los productos de la base de datos -->
            @if (!empty($productos))
                <div style="display: flex;">
                    @foreach ($productos as $producto)
                
                        <div class="card" id="tarjeta">
                            <div style="width:50%; position:absolute; z-index:3; margin:3% 3%">
                                <h4 style="color:#96E6C7">${{ $producto['precio'] }}</h4>
                                <div id="descuento" style="">{{ $producto['descuento'] }}%</div>
                                <h4>{{ $producto['nombre'] }}</h4>
                                <p>{{ $producto['descripcion'] }}</p>
                            </div>
                            <img src="{{ asset('storage/imgHome/'.$producto['imagenAux']) }}" class="card-img-top" style="position:relative;">
                            <!--<div class="card-body"> 
                                <a href="#" class="link">ver</a>
                            </div>-->
                        </div>

                    @endforeach 
                </div>  
            @endif  
        </div>
        
    </body>
</html>
