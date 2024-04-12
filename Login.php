<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Piece</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div class="page">
        <nav>
            <?php include "./include/Sidebar.php" ?>
        </nav>
        <main>
            <div class="justify-content-center align-items-center vh-100 sample">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email :</label>
                        <input type="email" class="form-control" placeholder="Entrez votre E-mail" name="email">
                        <small class="form-text text-sm text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </main>
        <aside>
            <h2>aside</h2>
        </aside>
    </div>
</body>

</html>