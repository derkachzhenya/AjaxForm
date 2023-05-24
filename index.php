<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="form.js"></script>
    <title>Форма відправки</title>
</head>

<body>
    <div class="d-flex flex-column justify-content-beetwen min-vh-100">

        <header class="border-bottom">
            <nav class="navbar bg-light">
                <div class="container-fluid col-9 justify-content-beetwen">
                    <span class="navbar-brand mb-0 h1">Логотип</span>
                    <span></span>
                </div>
            </nav>
        </header>

        <main class="flex-grow-1">
            <div class="container col-8 mt-3 align-self-center ">
                <form action="validation.php" method="POST">
                    <div class="mb-3" id="name-group" class="form-group">
                        <label for="name" class="form-label">Ім'я</label>
                        <input type="text" class="form-control" name="name" id="name" >
                    </div>
                    <div class="mb-3" id="surname-group" class="form-group">
                        <label for="surname" class="form-label">Прізвище</label>
                        <input type="text" class="form-control" name="surname" id="surname">
                    </div>
                    <div class="mb-3" id="email-group" class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="mail@example.com">
                    </div>
                    <div class="mb-3" id="password-group" class="form-group">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3" id="passAgain-group" class="form-group">
                        <label for="passAgain" class="form-label">Повторення пароля</label>
                        <input type="password" class="form-control" name="passAgain" id="passAgain">
                    </div>
                    <button type="submit" class="btn btn-primary">Відправити</button>
                </form>
            </div>
        </main>


        <footer class="py-3 border">


        </footer>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>