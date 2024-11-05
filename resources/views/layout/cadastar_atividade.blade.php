<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/4bfe745599.js" crossorigin="anonymous"></script>
    <title>Minha agenda</title>
</head>

<body>

    <section>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>

    </section>

    <section>
        <div class="d-flex justify-content-center">
            <div class="activite-width d-flex justify-content-center m-3 text-center">
                <h5>Cadastar Atividades</h5>
                <form action="" class="text-start">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titulo">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titulo">
                    </div>
                    <div>
                        <label for="formGroupExampleInput" class="form-label">Prioridade</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Prioridade</option>
                            <option value="Alta">Alta</option>
                            <option value="Média">Média</option>
                            <option value="Baixa">Baixa</option>
                        </select>
                    </div>
                    <div>
                        <label for="formGroupExampleInput" class="form-label">Atividade</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Atividade</option>
                            <option value="Desenvolvedor web">Desenvolvedor web</option>
                            <option value="Musicoterapia">Musicoterapia</option>
                            <option value="Psicomotricidade">Psicomotricidade</option>
                            <option value="Taekwondo UFT">Taekwondo UFT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data</label>
                        <input type="datetime-local" class="form-control" id="formGroupExampleInput"
                            placeholder="Titulo">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>
                            Cadastar</button>
                    </div>
                </form>
            </div>
            <div class="activite-width d-flex justify-content-center m-3 text-center">
                <h5>Ultimas Atividades</h5>
                <div class="">
                    <div class="card" style="width:80vh">
                        <div class="card-body activites-list d-flex justify-content-between">
                            <p><i class="fa-solid fa-clipboard"></i></p>
                            <p>This is some text within a card body.</p>
                            <div>
                                <a href="#"><i class="fa-solid fa-pencil p-1"></i></a>
                                <a href="#"><i class="fa-solid fa-trash p-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
