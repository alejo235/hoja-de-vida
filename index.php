<?php
$projects = [
    [
        'name' => 'Formulario',
        'description' => 'Este proyecto consiste en crear una pagina web con los temas vistos en el primer semestre como proyecto final.',
        'technologie' => 'HTML,CSS,JAVA PHP',
        'img'=> 'Imagenes/formulario.jpg',
        'url'=> 'https://github.com/alejo235/Formulario'
    ],
    [
        'name' => 'aplicacion restaurante',
        'description' => 'Proyecto con la estructtura del modelo vista controlador vistos en el tercer semestre.',
        'technologie' => 'HTML,CSS,JAVASCRIPT',
        'img'=> 'Imagenes/restaurante.jpg',
        'url'=> 'https://github.com/alejo235/restaurante'
    ],
    [
        'name' => 'Aplicacion Heroes',
        'description' => 'Pagina Web con formulario de registro con los temas vistos en el cuarto semestre.',
        'technologie' => 'ANGULAR',
        'img'=> 'Imagenes/heroes.jpg',
        'url'=> 'https://github.com/alejo235/herores'
    ],
];

$skills = [
    [
        'language' => 'PHP'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&family=Sansita+Swashed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/main.css">
    <title>Edward Alejandro Galindo Rodriguez</title>
</head>

<body>

    <section class="container mt-5">
        <article class="row">
            <div class="col-3">
                <img class="img-fluid rounded-circle" src="Imagenes/foto1.jpg" alt="foto">
            </div>
            <div class="col-7">
                <h1 class="font1">Edward Alejandro Galindo Rodriguez</h1>
                <hr>
                <h6>Desarrolador Front end</h6>
                <h6>edwar.galindo@nuevaamerica.edu.co</h6>
                <h6>3005978500</h6>
                <h6><a href="#">https://co.linkedin.com/</a></h6>
                <h6>@alejandro235</h6>
            </div>
        </article>
    </section>

    <section class="container">
        <article class="row justify-content-center">
            <div class="">
                <h4 class="h5">Carrer summary</h4>
                <p>I am a systems technician, currently studying systems engineering,
                    I work with the secretary of health, my strength is the management of software and applications.</p>
            </div>
        </article>
    </section>

    <section class="container pt-5 pb-5">
        <h5>Projects</h5>
        <article class="card-columns">
            <?php
            $size = count($projects);
            for ($i = 0; $i < $size; $i++) {
                echo '<div class="card bg-dark text-white">';
                echo '    <div class="card-header text-center">';
                echo '        <h5 class="card-title font2">' . $projects[$i]['name'] . '</h5>';
                echo '    </div>';
                echo '    <div class="card-body">';
                echo '        <img class="img-fluid" src="' . $projects[$i]['img'] . '" alt="">';
                echo '    </div>';
                echo '    <div class="card-footer">';
                echo '        <p>' . $projects[$i]['description'] . '</p>';
                echo '        <span class="badge badge-pill badge-primary mb-2">' . $projects[$i]['technologie'] . '</span>';
                echo '        <a class="btn btn-outline-info btn-block" href="'. $projects[$i]['url'] .'">Ver proyecto</a>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </article>
    </section>
    <section class="container pt-5 pb-5">
        <h5>Skills and technologies</h5>
        <article class="row">
            <ul>
                <?php
                echo '<li>';
                echo '    <h5>' .$skills['language'].' </h5>';
                echo '    <h6>Six months</h6>';
                echo '    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque qui asperiores doloribus aperiam perspiciatis dignissimos. Veniam exercitationem provident explicabo. Omnis dicta molestiae velit? Voluptatum eveniet error voluptas quaerat adipisci?</p>';
                echo '</li>';
                ?>
            </ul>
        </article>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>