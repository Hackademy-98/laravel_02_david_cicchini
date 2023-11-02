<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function ShowContactDetails ($name) {
        $contacts = [
        [
            "name" => "Cane",
            "number" => 123456789,
            "address" => "Via Cane, 20",
        ],
        [
            "name" => "Gatto",
            "number" => 987654321,
            "address" => "Via Gatto, 40",
        ],
        [
            "name" => "Criceto",
            "number" => 246879135,
            "address" => "Via Criceto, 60",
        ],
        [
            "name" => "Caciocavallo",
            "number" => 135792648,
            "address" => "Via CavalCacio, 80",
        ]
        ];
        foreach($contacts as $contact){
            if($name == $contact["name"]){
                
                return view('details', ["contact"=>$contact]);
            }
        }
    }
}
