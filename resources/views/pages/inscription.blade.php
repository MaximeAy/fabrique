<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/connexion.css">
    <link rel="stylesheet"  href="/css/bootstrap.min.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5  bas">
                <img src="img/img.png" width="500px" height="550px" alt="">
            </div>
            <div class="col-7">
                
                    <div class="row main-content ml-5 text-center">
                        <div class="col-md-4 text-center company__info">
                            <div class="mb-5"><img src="img/simplon.png" width="100px" height="100px" alt=""></div>
                            <h4 class="text-uppercase">Simplon</h4>
                        </div>
                        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="">
                                    <h2 class="mt-2 text-uppercase">Inscription</h2>
                                </div>
                                <div class="">
                                    <form control="" class="form-group" action="/inscription" method="post">
                                    {{@csrf_field()}}
                                        <div class="">
                                            <input type="text" name="nom" id="username" class="form__input" placeholder="nom">
                                        </div>
                                        <div class="">
                                            <input type="text" name="prenom" id="username" class="form__input" placeholder="Prenom">
                                        </div>
                                        <div class="">
                                            <input type="text" name="role" id="username" class="form__input" placeholder="role">
                                        </div>
                                        <div class="">
                                            <input type="text" name="email" id="username" class="form__input" placeholder="Email">
                                        </div>
                                        <div class="">
                                            <!-- <span class="fa fa-lock"></span> -->
                                            <input type="password" name="password" id="password" class="form__input" placeholder="Mot de passe">
                                        </div>
                                        <div class="">
                                            <!-- <span class="fa fa-lock"></span> -->
                                            <input type="password" name="confirm_password" id="password" class="form__input" placeholder=" Confirmer Mot de passe">
                                        </div>
                                        <div class=" ">
                                            <button class="btn btn-outline-danger my-2 my-sm-0 font-weight-bold" type="submit">S'inscrire</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="">
                                    <p>Don't have an account? <a href="#">Register Here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid pied_fond">
            <p class="text-center text-white text-uppercase py-2">Simplon 2021</p>
        </div>
    </footer>
</body>
</html>