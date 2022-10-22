<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href={{ asset('stylesheet/company_info.css') }} rel="stylesheet">
    <title>Acceuil</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nom de Société" />
                    </div>
                    <div class="input-group-outline d-flex align-items-center m-10">
                        <input type="file" id="member_img" hidden>
                        <label for="member_img" class="lbl_img_upload">Choisir Logo</label>
                        <span id="file-chosen">Aucun logo choisi</span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" placeholder="Numéro de Téléphone" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-map-pin"></i>
                        <input type="text" placeholder="Adresse" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-clock"></i>
                        <input type="time" placeholder="Heure D'ouverture" />
                    </div>
                    <div class="input-field">
                      <i class="fas fa-clock"></i>
                      <input type="time" placeholder="Heure D'ouverture" />
                  </div>
                    <input type="submit" value="Enregistrer" class="btn solid" />
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                  <h2 class="title">Entrez les informations de la société</h2>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
    <script src={{ asset('js/material-dashboard.js') }}></script>
</body>

</html>
