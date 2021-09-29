<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $person =[
        "name" => "Rossi Sébastien",
        "description" => "Developpeur web depuis quelques années, aujourd'hui dirigeant de la société ... .
        Pourquoi cette société? Lors de la naissance de mon fils j'ai été confronté à des difficultées sur
        son alimentation et j'ai réaliser le constat suivant .... ",
            "socialFacebook"=>"#" ,
            "socialTwitter"=>"#",
            "socialLinkden"=>"#",
            "socialGit"=>"#"
            ]
        ;
        return view("index",["person" => $person] );//compact = compact("person"))
        //dd($person);
    }
    public function whoWeAre(){
        return view("whoWeAre");
    }

    public function contact() {
        return view("contact");
    }

    public function pricing() {
        return view("pricing");
    }

}
