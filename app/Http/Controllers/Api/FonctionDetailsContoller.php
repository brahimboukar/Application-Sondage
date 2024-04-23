<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FoctionDetails;
use App\Models\FonctionDetaile;
use Illuminate\Http\Request;

class FonctionDetailsContoller extends Controller
{
    public function add (FoctionDetails $request)
    {
        $request->validated();

        $fonctionDetailsData = [
            'libelle' => $request->libelle,
            'fonction_id' => $request->fonction_id,
        ];

        $fonctionDetails = FonctionDetaile::create($fonctionDetailsData);

        return response([
            'msg' => 'fonctionDetails Create Succefully',
            'data' => $fonctionDetails
        ],201);
    }
}
