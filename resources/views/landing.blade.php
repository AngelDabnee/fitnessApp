@extends('layouts.main')
@section('title','ADEntrenamient')
@section('body')
<div class="" id = "segundaParte">
    <div id="carouselStar" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img id = "adLogoCarruseldos" src="./img/dontdaysof.jpg" class="img-fluid d-block w-100" alt="DONTDAYSOF">
          </div>
          <div class="carousel-item">
            <img id = "adLogoCarruseltres" src="./img/gymOne.jpg" class="img-fluid d-block w-100" alt="GYMONE">
          </div>
          <div class="carousel-item active">
            <img id = "adLogoCarrusel" src="https://i.pinimg.com/564x/a9/6e/c7/a96ec715a85e191354cb6aa268991a34.jpg" class="img-fluid d-block w-100" alt="ADENTRENAMIENTO">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselStar" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselStar" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<div class="slider mt-3" id = "segundaParte">
    <div class="container">
        <div class="row">
            <h1 class="title text-center">
                <i id = "title" class="fa-solid fa-dumbbell text-white">ADEntrenamientos</i>
                <hr class="hr-orange-lg">
            </h1>
        </div>
    </div>
</div>
<div class="container m-3">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div id = "cardTiposEntrenamiento" class="card">
                <img id = "imgEntrenamientoFuerza" src="https://i.pinimg.com/564x/d6/55/1e/d6551e0bc020c6831989e9cbf277d8fc.jpg" alt="EntrenamientoFuerza">
                <div class="card-body">
                    <h5 class="text-black text-center">Entrenamiento de Fuerza</h5>
                    <a class = "btn btn-danger" href="#">Conoce más</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div id = "cardTiposEntrenamiento" class="card">
                <img id = "imgEntrenamientoResistencia" class = "img-fluid" src="https://i.pinimg.com/564x/0c/17/eb/0c17ebc1ebb938b321dd67b13ee6a1c1.jpg" alt="EntrenamientoResistencia">
                <div class="card-body">
                    <h5 class="text-black text-center">Entrenamiento de Resistencia</h5>
                    <a class = "btn btn-danger" href="#">Conoce más</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div id = "cardTiposEntrenamiento" class="card">
                <img id = "imgEntrenamientoFlexibilidad" class = "img-fluid" src="https://i.pinimg.com/564x/c9/1e/96/c91e96619d86616a7469179e2d96ce9c.jpg" alt="EntrenamientoResistencia">
                <div class="card-body">
                    <h5 class="text-black text-center">Entrenamiento de Flexibilidad</h5>
                    <a class = "btn btn-danger" href="#">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
</div>
<h1 id = "title" class="text-center text-white">Planes Nutricionales Personalizados</h1>
<div id = "quienesSomosParte" class="container">
    <div class="row">
        <div class="col-lg-2 col-sm-12"></div>
        <div class="col-lg-4 col-sm-12">
            <div class="card ">
                <img class="" src="https://i.pinimg.com/564x/8e/b7/dc/8eb7dcc62d43dc897822b1fab6be83cf.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div id = "cardPlanesNutricionales" class="card">
                <h4 id = "title" class="text-center m-4">Nuestros Planes </h4>
                <hr class="hr-orange-lg">
                <p class="text-center">Se enfocan en cumplir tus metas, necesitas una dieta que potencie tu esfuerzo y te lance a tus objetivos, por eso contamos con el personal capacitado para brindarte toda la horientación de calidad que necesites.</p>
                <p>Nuestros servicios son: </p>
                <ul>
                    <li class="btn btn-outline-danger">Evaluación Personalizada</li>
                </ul>
                <ul>
                    <li class="btn btn-outline-danger">Plan Nutricional Personalizado</li>
                </ul>
                <ul>
                    <li class="btn btn-outline-danger">Evaluación Física</li>
                </ul>
                <ul>
                    <li class="btn btn-outline-danger">Entrenamientos Personalizados</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id = "containerFluidGymVirtual" class="container mt-4">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-white">Descrube todo lo que podemos hacer</h4>
            <h2 id = "title" class="text-center text-white">TENEMOS GYM VIRTUAL!!</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div id = "cardProgramasEntrenamiento" class="card">
                    <img id = "programasDigitales" src="https://i.pinimg.com/564x/bf/86/7f/bf867f516108fa4b84025be601154a5b.jpg" alt="">
                    <div class="card-body">
                        <h4>PROGRAMAS DIGITALES</h4>
                        <a class = "btn btn-danger" href="#">Accede Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div id = "cardProgramasEntrenamiento" class="card">
                    <img id = "gymVirtual" src="https://i.pinimg.com/564x/27/7f/a5/277fa5de4930866f6b8cae175b0653ff.jpg" alt="">
                    <div class="card-body">
                        <h4 class="text-warning">GYM VIRTUAL</h4>
                        <a class = "btn btn-danger" href="#">Accede Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div id = "cardProgramasEntrenamiento" class="card">
                    <img id = "enCasa" src="https://i.pinimg.com/564x/6d/73/28/6d732891ea2a0f0e26f372deecfef10b.jpg" alt="">
                    <div class="card-body">
                        <h4 class="text-primary">ACOMPAÑAMIENTO EN CASA</h4>
                        <a class = "btn btn-danger" href="#">Accede Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center m-3">
    <div class="col-lg-12 col-sm-12">
        <h1 id="title" class="text-white">Enterate</h1>
        <a  id= "btnCTA" class = "btn btn-outline-danger" href="#">Da Click</a>
    </div>
</div>
<h1 id= "title" class="mt-3 text-center text-white">Suplementación</h1>
<div id = "containerSuplementos" class="container mt-3 py-3">
    <div class="row">
        <div class="col-lg-1 col-sm-12"></div>
        <div id = "cardSuplementos" class="col-lg-5 col-sm-12 card mt-2">
            <h4 id = "title"  class="text-black text-center mt-3">Suplementos Proteicos</h4>
            <p class="text-black">Las proteínas son esenciales para la reparación y el crecimiento muscular, así como para otras funciones corporales. La proteína en polvo proporciona una fuente concentrada de proteínas, facilitando el cumplimiento de las necesidades diarias.</p>
            <a id = "textRigth" class = "btn btn-danger text-center" href="#">Conoce Más</a>
        </div>
        <div class="col-lg-5 col-sm-12">
            <img id = "imgSuplementos" class = "img-fluid" src="https://i.pinimg.com/564x/bb/0f/35/bb0f35212c2c0cd6daf503895f6c9648.jpg" alt="">
        </div>
        <div class="col-lg-1 col-sm-12"></div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-sm-12"></div>
        <div class="col-lg-5 col-sm-12">
            <img id = "imgSupHerbales" class="img-fluid" src="https://i.pinimg.com/564x/f6/cc/83/f6cc8337f3dbd59110a66f150ebe8fb2.jpg" alt="">
        </div>
        <div id = "cardSuplementos" class="col-lg-5 col-sm-12 card mt-2">
            <h4 id = "title"  class="text-black text-center mt-3">Suplementos Hérbales</h4>
            <p class="text-black">Contienen compuestos que pueden tener propiedades antioxidantes, antiinflamatorias y otras propiedades que contribuyen al bienestar general del cuerpo.<br>Algunas hierbas, como la valeriana, la manzanilla y la ashwagandha, se han utilizado tradicionalmente para ayudar a reducir los niveles de estrés y ansiedad, promoviendo la relajación.</p>
            <a id = "textRigth" class = "btn btn-danger text-center" href="#">Conoce Más</a>
        </div>
        <div class="col-lg-1 col-sm-12"></div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-sm-12"></div>
        <div id = "cardSuplementos" class="col-lg-5 col-sm-12 card mt-2">
            <h4 id = "title"  class="text-black text-center mt-3">Triglicéridos de Cadena Media</h4>
            <p class="text-black">Se absorben directamente en el hígado y se convierten rápidamente en energía, lo que los hace una fuente de energía rápida y eficiente..</p>
            <a id = "textRigth" class = "btn btn-danger text-center" href="#">Conoce Más</a>
        </div>
        <div class="col-lg-5 col-sm-12">
            <img id = "imgSuplementos" class = "img-fluid" src="https://www.masmusculo.com/blog/wp-content/uploads/2015/03/alimentos-ricos-en-trigliceridos.jpg" alt="">
        </div>
        <div class="col-lg-1 col-sm-12"></div>
    </div>
</div>
<hr class="hr-orange-lg">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <h1 id = "title" class="card-title text-center text-white">ELIGE TU COMPROMISO E INICIA CON UN NUEVO RETO</h1>
        </div>
        <div class="row">
            <div id = "retoUno" class="col-lg-4 col-sm-12 card">
                <div class="card-body">
                    <img class = "img-fluid" src="https://i.pinimg.com/564x/ca/61/2e/ca612e4246b67f149ebaea7ff83f7dfe.jpg" alt="">
                    <h3 class="text-center">CardioVascular</h3>
                    <p class="">Empieza con le mejor entrenamiento cardiovascular.</p>
                    <a href="#"></a>
                </div>
            </div>
            <div id = "retoDos" class="col-lg-4 col-sm-12 card">
                <div class="card-body">
                    <img class = "img-fluid" src="https://mundoentrenamiento.com/wp-content/uploads/2015/05/sentadilla-profunda.jpg" alt="">
                    <h3 class="text-center">Fuerza</h3>
                    <p class="">Empieza con le mejor entrenamiento de fuerza.</p>
                    <a href="#"></a>
                </div>
            </div>
            <div id = "retoTres" class="col-lg-4 col-sm-12 card ">
                <div class="card-body">
                    <img class = "img-fluid" src="https://i.blogs.es/0cbf72/full-shot-man-training-with-elastic-band-1-/450_1000.webp" alt="">
                    <h3 class="text-center">Resistencia</h3>
                    <p class="">Inicia tu plan de entrenamiento.</p>
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="hr-orange-lg">
<div class="container mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <h3 class="title text-white text-center">Entrenamientos</h3>
                <ul id = "listaEntrenamiento" class="list-unstyled text-white">
                    <li>Fuerza</li>
                    <li>Flexibilidad</li>
                    <li>Resistencia</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12 text-white">
                <h3 class="text-center">Contacto</h3>
                <h4>Correo:</h4><p>Ues.dabnee@gmail.com</p>
                <h4>Teléfono:</h4><p>+52 6622782034</p>
            </div>
        </div>
    </div>
</div>


@endsection
