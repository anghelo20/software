<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6433b517fa.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
        .algo {
            background-color: royalblue;
            border-radius: 10px;
            text-align:center;
            border:solid 1px black;
            width:85px;
            margin:10px auto;
            transition: color .5s;
            }
        .algo:hover {
            color: white;
            }
            .title {
    font-size: 12px;
    font-weight: bold;
}
.for {
    margin-left: 5.5px;
}

.data{
    width:1000px;
    height:35px
}

.new_data{
    width:1200px;
    height:35px
}
.datos{
    background-image: url('https://pbs.twimg.com/media/EKYxaXWWoAAaP3Y.jpg:large');
    background-size:cover;
    position:relative;
    z-index:-10;
    
}
.datos::before{
    content:'';
    position:absolute;
    top:0;
    right:0;
    left:0;
    bottom:0;
    background-color:black;
    z-index:-5;
    opacity:0.5
}
.content{
    height:100vh
    
}
.margen{
    margin:0 80px;
    z-index:1
    
}
.contenedor{
    width:100vw
}
.type{
    text-align:center;
    margin:0;
    font-size:20px;
    font-weight:bold;
    color:white;
    letter-spacing: 2px;
}
.div-margen{
    margin:20px 0
}
.word{
    margin:0;
    font-size:20px;
    font-weight:400;
    color:white;
    letter-spacing: 1.5px;
    font-family: 'Roboto', sans-serif;
}

/*Apartir de aqui son los nuevos estilos esto no aparece en los anteriores blades solo en este blade*/ 

.new_margen{
    margin: 0 auto;
    margin-top:55px;
}
.new_parrafo{
    text-align:justify;
    margin:0;
    font-size:24px;
    font-weight:400;
    color:black;
    letter-spacing: 1.3px;
    font-family: 'Roboto', sans-serif;
}

.new_word{
    margin:0;
    font-size:24px;
    font-weight:400;
    color:black;
    letter-spacing: 1.3px;
    font-family: 'Roboto', sans-serif;
    text-align:center;
}

.new_title{
    font-size:28px;
    font-weight:400;
    color:black;
    letter-spacing: 1.3px;
    font-family: 'Roboto', sans-serif;
}
.marg_botton{
    float:right
}

        </style>


</head>

<body>

<div class="contenedor">
        @include('partials.nav')
        <div class="row content" >
        @include('partials.aside')

        <div class="new_margen new_data ">
        <div>
        <h5 class="new_title">Eleccion de Cursos</h5>
        <p class=" new_parrafo">
        A continuacion se encuentra listados los cursos a los que califica y tendra que llevar este semestre
        academico.
        Si tuviera algun curso pendiente de un ciclo anterior tendra que llevarlo de forma obligatoria
        este semestre
        
        </p>
        </div>
        <form action="" method="post">
        <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th class="new_word"  scope="col">#Codigo</th>
                        <th class="new_word" scope="col">Nombre Curso</th>
                        <th class="new_word" scope="col">Creditos</th>
                        <th class="new_word" scope="col">Hora Practica</th>
                        <th class="new_word" scope="col">Hora Teoria</th>
                        <th class="new_word" scope="col">Ciclo</th>
                        <th class="new_word" scope="col">Tipo</th>
                        <th class="new_word" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                        <tr>
                        <th scope="row">{{$value->idCurso}}</th>
                        <td class="new_word">{{$value->nombre_curso}}</td>
                        <td class="new_word">{{$value->creditos}}</td>
                        <td class="new_word">{{$value->h_teoria}}</td>
                        <td class="new_word">{{$value->h_practica}}</td>
                        <td class="new_word">{{$value->ciclo}}</td>
                        <td class="new_word">{{$value->tipo}}</td>
                        <td><input type="checkbox" value="{{$value->idCurso}}"></td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="new_word marg_botton btn btn-secondary">Enviar <i class="fas fa-arrow-right"></i></button>
        </form>
                    


        </div>
        </div>

</div>


</body>

</html>