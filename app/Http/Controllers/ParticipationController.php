<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participation;


class ParticipationController extends Controller
{
    public function createForm()
    {
        return view('participation.inscription');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:participations,email',
        ]);

        $lot = $this->tirageAuSort();

        Participation::create([
            'email' => $validatedData['email'],
            'lot' => $lot,
        ]);

        return redirect()->back()->with('success', 'Votre participation a été enregistrée avec succès.');
    }

    private function tirageAuSort()
    {
        $randomNumber = mt_rand(1, 100);

        if ($randomNumber === 1) {
            return 'Tesla';
        } elseif ($randomNumber <= 10) {
            return 'Weekend à la montagne';
        } elseif ($randomNumber <= 20) {
            return 'PS5';
        } elseif ($randomNumber <= 50) {
            return 'PC Gamer';
        } else {
            return 'Jeu de cartes';
        }
    }


}
