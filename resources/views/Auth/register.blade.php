<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Sondage Application</title>
</head>
<body>
<div class="card mt-50 mb-50">
    <div class="card-title mx-auto">
        Créer Votre Compte
    </div>

    <form>
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Nom : </span>
            </div>
            <div class="row row-2">
                <input type="text" >
            </div>
        </div>
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Prenom : </span>
            </div>
            <div class="row row-2">
                <input type="text" >
            </div>
        </div>
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Email : </span>
            </div>
            <div class="row row-2">
                <input type="email" >
            </div>
        </div>
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Telephone : </span>
            </div>
            <div class="row row-2">
                <input type="number" >
            </div>
        </div>
        <!-- Checks Of Sexe -->
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Sexe : </span>
            </div>
            <div class="row row-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Homme</label>
                    <div class="form-check form-check-inline" style="position: relative; left: 80px;">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Femme</label>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Checks Of Sexe -->
        <!-- Select Of Region -->
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Region : </span>
            </div>
            <div class="row row-2" style="position: relative;top: 0.7px;">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    @foreach($data as $row)
                        <option value="{{$row->id}}">{{$row->libelle}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- End Select Of Region -->
        <!-- Select Of situation -->
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Votre Situation : </span>
            </div>
            <div class="row row-2" style="position: relative;top: 0.7px;">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="1" selected> J'exerce une activité professionnelle</option>
                    <option value="2"> Je suis chômeur ayant déjà travaillé</option>
                    <option value="3"> Je suis retraité ou préretraité</option>
                    <option value="4"> Je suis à la recherche d'un premier emploi</option>
                    <option value="5"> Je suis élève, étudiant</option>
                    <option value="6">  Je suis une personne au foyer</option>
                    <option value="7">  Je suis sans profession</option>
                </select>
            </div>
        </div>
        <!-- End Select Of situation -->


        <button class="btn d-flex mx-auto"><b>Add card</b></button>
    </form>
</div>
</body>
</html>
