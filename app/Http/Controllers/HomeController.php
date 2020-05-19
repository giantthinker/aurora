<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Meta;

class HomeController extends Controller
{
    public function index() 
    {

        Meta::set('title', 'Votre hébergeur premium au Cameroun et en Afrique.');
        Meta::set('description', "Votre solution d'hébergement Web n ° 1 au Cameroun et en Afrique avec une orientation unique sur les valeurs et les intérêts des clients. Hébergez vos sites Web avec un petit budget sur des infrastructures ultra rapides et évolutives. Nous proposons tous les noms de domaine de premier niveau comme .com, .cm, .net, .net et bien d'autres. Nous fournissons un support de haut niveau et donnons également des conseils pour que votre site Web soit au top. Nous hébergeons des sites Web de partout; Cameroun, Tchad, Gabon, Congo, Guinée équatoriale, Congo, Kenya, Côte d'Ivoire, Ghana et en Europe et Amériques. Nos services d'hébergement Web haut de gamme s'adressent à tout le monde, peu importe la taille de votre budget.");

        return view('pages.home');
    }
}
