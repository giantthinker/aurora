<?php

namespace App\Http\Controllers\Hosting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Meta;

class WordpressHosting extends Controller
{
    public function index()
    {
        Meta::set('title', 'Hébergement WordPress, outils WordPress, etc.');
        Meta::set('description', "Hébergez vos sites Web WordPress sur la plateforme qui évolue. Avec nos outils WordPress, vous pouvez créer un site de mise en scène WordPress et gérer les utilisateurs, les thèmes et les plugins à partir d'un panneau de contrôle. Gratuit avec l'hébergement Aurora Web.");        
        return view('pages.hosting.wordpress');
    }
}
