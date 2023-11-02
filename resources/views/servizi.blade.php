<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- ! LINK BOOTSTRAP --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    {{-- ! NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.servizi')}}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.chisiamo')}}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.contatti')}}">Contatti</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <h1 class="m-5 ">Servizi</h1>
    <h4 class="m-5">I nostri servizi</h4>
    <p class="m-5 text-">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nostrum laudantium minima vero natus! Impedit, ducimus cum officiis nihil neque velit corporis deserunt, modi esse et, ipsam in laboriosam veniam?
    Doloribus laborum voluptate ad quia sunt nesciunt debitis modi quos nobis in tenetur laboriosam porro error recusandae, sit, reiciendis, enim est. Velit ex sed quod alias cupiditate inventore minus reiciendis.
    Dolorem, error iusto. Repellat perspiciatis, non voluptates esse necessitatibus porro debitis, optio vel cum perferendis voluptas sit impedit, minima aspernatur unde maxime. Minus, facilis! Modi earum ex eos quasi repellendus!
    Possimus, ullam quae. Iste, nisi adipisci sint maiores rerum deserunt autem eos quo, facere minus eaque corrupti quibusdam aut ut dignissimos sed incidunt error optio inventore unde consequatur laudantium placeat.
    Voluptate perferendis vel repellendus praesentium quia eum mollitia? Cupiditate repellendus, laboriosam delectus atque aspernatur quidem eaque labore eos repellat nostrum non aperiam porro sit. Quisquam expedita commodi qui consequuntur tempora.s</p>
    <p class="m-5 text-">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nostrum laudantium minima vero natus! Impedit, ducimus cum officiis nihil neque velit corporis deserunt, modi esse et, ipsam in laboriosam veniam?
    Doloribus laborum voluptate ad quia sunt nesciunt debitis modi quos nobis in tenetur laboriosam porro error recusandae, sit, reiciendis, enim est. Velit ex sed quod alias cupiditate inventore minus reiciendis.
    Dolorem, error iusto. Repellat perspiciatis, non voluptates esse necessitatibus porro debitis, optio vel cum perferendis voluptas sit impedit, minima aspernatur unde maxime. Minus, facilis! Modi earum ex eos quasi repellendus!
    Possimus, ullam quae. Iste, nisi adipisci sint maiores rerum deserunt autem eos quo, facere minus eaque corrupti quibusdam aut ut dignissimos sed incidunt error optio inventore unde consequatur laudantium placeat.
    Voluptate perferendis vel repellendus praesentium quia eum mollitia? Cupiditate repellendus, laboriosam delectus atque aspernatur quidem eaque labore eos repellat nostrum non aperiam porro sit. Quisquam expedita commodi qui consequuntur tempora.s</p>

    {{-- ! SCRIPT BOOTSTRAP --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
</body>
</html>