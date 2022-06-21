<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Acomertipico</title>
</head>

<body>
    
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="#" class="nav-link text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                <use xlink:href="#home"></use>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{route('LocalComercial.create')}}" class="nav-link text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                <use xlink:href="#grid"></use>
                            </svg>
                            Registrar
                        </a>
                    </li>
                    <li>
                        <a href="{{route('LocalComercial.edit')}}" class="nav-link text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                <use xlink:href="#grid"></use>
                            </svg>
                                Iniciar sesion
                        </a>
                    </li>
                    <li>
                        <a href="{{route('Producto.index')}}" class="nav-link text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                <use xlink:href="#grid"></use>
                            </svg>
                            Productos
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('LocalComercial.index') }}" class="nav-link text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-basket" viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                                <use xlink:href="#people-circle"></use>
                            </svg>
                            locales
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Acomertipico</font>
                            </font>
                        </h4>
                        <p class="text-muted">Popayán fue reconocida como ciudad creativa de la Gastronomía.
                            Sus principales platos típicos son la carantana, el aplanchado, los amasijos ,
                            las empanadas y los tamales que se acompañan con adobo de pipián, un guiso
                            típico preparado a base de papá y maní. Cada año se permite a los locales y viajeros
                            degustar todo tipo de comida tradicional en el Congreso Gastronómico de Popayán que se
                            realiza en septiembre
                    </div>
                    {{-- <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                  <li><a href="#" class="text-white">Follow on Twitter</a></li>
                  <li><a href="#" class="text-white">Like on Facebook</a></li>
                  <li><a href="#" class="text-white">Email me</a></li>
                </ul>
              </div> --}}
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                        class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                        </path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Álbum</font>
                        </font>
                    </strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Navegación de palanca">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>



        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">FOTO</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Josefina Muñoz de Bonilla era apenas una
                                            niña de 12 años cuando empezó a trabajar como empleada en la casa de las
                                            hermanas Constaín,
                                            que vivían en el Centro de Popayán. Las señoras preparaban y vendían
                                            'aplanchados',
                                            un dulce alargado y crocante que se deshace suave en el paladar. Josefina,
                                            curiosa,
                                            las observaba en su ejercicio diario de mezclar ingredientes y asar, hasta
                                            que un día una de las señoras enfermó y no pudo trabajar.</font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Esta es una tarjeta más amplia con texto
                                            de apoyo a continuación como una introducción natural a contenido adicional.
                                        </font>
                                        <font style="vertical-align: inherit;">Este contenido es un poco más largo.
                                        </font>
                                    </font>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Vista</font>
                                            </font>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Editar</font>
                                            </font>
                                        </button>
                                    </div>
                                    <small class="text-muted">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">9 minutos</font>
                                        </font>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
