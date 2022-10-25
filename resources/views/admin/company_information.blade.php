<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href={{ asset('stylesheet/company_info.css') }} rel="stylesheet">
    <title>Acceuil</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('companies.store') }}" method="POST" class="sign-in-form" enctype="multipart/form-data">
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="company_name" placeholder="Nom de Société" />
                    </div>
                    <div class="input-group-outline d-flex align-items-center m-10">
                        <input type="file" name="image_url" id="logo" hidden onchange="changeTextContent(this, '')">
                        <label for="logo" class="lbl_img_upload">Choisir Logo</label>
                        <span id="file-chosen">Aucun logo choisi</span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" name="comapny_phone" placeholder="Numéro de Téléphone" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="company_email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-map-pin"></i>
                        <input type="text" name="company_adresse" placeholder="Adresse" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-clock"></i>
                        <input type="time" name="comapny_open_hour" placeholder="Heure d'ouverture" />
                    </div>
                    <div class="input-field">
                      <i class="fas fa-clock"></i>
                      <input type="time" name="company_close_hour" placeholder="Heure de fermeture" />
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
            </div>
        </div>
    </div>

    <script src={{ asset('js/material-dashboard.js') }}></script>
</body>

</html>
