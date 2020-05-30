<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TouristicPoint;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.home');
    }

    public function getPontosTuristicos(){
      $tp = DB::table('touristic_points')->where('homepage', '=', 1)->inRandomOrder()->get();

      $html = "<div class=\"row\">";
      foreach ($tp->toArray() as $key => $value) {
          $html .= "     <div class=\"col-md-4\">";
          $html .= "         <div class=\"card\">";
          $html .= "            <div class=\"card-image\">";
          $html .= "                 <img src=\"". url('storage').'/'.$value->imagem ."\">";
          $html .= "             </div>";
          $html .= "             <div class=\"card-title\">";
          $html .= "                 <h4><b>" . $value->local . "</b></h4>";
          $html .= "                 <p>" . $value->pais . "</p>";
          $html .= "             </div>";
          $html .= "             <div class=\"card-text\">";
          $html .= "                 <p>" . $value->descricao . "</p>";
          $html .= "             </div>";
          $html .= "            <div class=\"card-bottom\">";
          $html .= "                 <button type=\"button\" class=\"card-btn-bottom\" name=\"button\"><span>Visitar</span></button>";
          $html .= "             </div>";
          $html .= "         </div>";
          $html .= "     </div>";
      }
      $html .= "</div>";

      return $html;
    }
}
