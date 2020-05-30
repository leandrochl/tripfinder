<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TouristicPoint;

class PageHomepageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.paginas.homepage.homepage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function novoPontoTuristico()
    {
        return view('admin.paginas.homepage.homepage-salvar',[
          'action' => 'store'
        ]);
    }

    public function salvarPontoTuristico(Request $request)
    {
        $pt = new TouristicPoint();

        $file = $request->file('imagem');
        $pt->pais = $request->input('pais');
        $pt->local = $request->input('local');
        $pt->descricao = $request->input('descricao');
        $pt->imagem = $file->store('pontos');
        $pt->homepage = false;
        $pt->save();

        return redirect()->route('admin.paginas.homepage');
    }


    public function getPontosTuristicos(){
      $pt = TouristicPoint::all();
      $html = "";
      foreach ($pt->toArray() as $key => $value) {
        $html .= '<tr>';
        $html .= '     <td>' . $value['pais'] . '</td>';
        $html .= '     <td>' . $value['local'] . '</td>';
        $html .= '     <td>' . $value['descricao'] . '</td>';
        $html .= '     <td><img src="' . url('storage').'/'.$value['imagem'] . '" style="width:115px;"/></td>';
        $html .= '     <td>';
        if($value['homepage']){
          $html .= '         <button type="button" class="btn btn-success remove-homepage" id="remove-' . $value['id'] . '"><i class="fas fa-home"></i></button>';
        } else{
          $html .= '         <button type="button" class="btn btn-default set-homepage" id="set-' . $value['id'] . '"><i class="fas fa-home"></i></button>';
        }
        $html .= '         <a href="' . route("editar.pontoTuristico", ['id' => $value['id']]) . '" class="btn btn-info" id=""><i class="fas fa-pencil-alt"></i></a>';
        $html .= '         <a href="' . route("delete.pontoTuristico", ['id' => $value['id']]) . '" class="btn btn-danger" id=""><i class="far fa-trash-alt"></i></a>';
        $html .= '     </td>';
        $html .= ' </tr>';
      }
      return $html;
    }

    public function setPontosTuristicos(){
      $op = $_POST['operacao'];
      $id = $_POST['id'];

      if($op === 'add') {
        $pontos = DB::table('touristic_points')->where('homepage', '=', 1)->get();
        if(sizeof($pontos) === 3){
          return 'error';
        } else {
          $tp = TouristicPoint::find($id);
          if (isset($tp)) {
              $tp->homepage = 1;
              $tp->save();
          }
        }
      } else {
        $tp = TouristicPoint::find($id);
        if (isset($tp)) {
            $tp->homepage = 0;
            $tp->save();
        }
      }

    }

    public function editarPontoTuristico($id){
      $pt = TouristicPoint::find($id);
      return view('admin.paginas.homepage.homepage-salvar', [
        'action' => 'update',
        'pt' => $pt
        ]);
    }

    public function updatePontoTuristico(Request $request, $id){

        $pt = TouristicPoint::find($id);
        if(isset($pt)){
          $file = $request->file('imagem');
          $pt->pais = $request->input('pais');
          $pt->local = $request->input('local');
          $pt->descricao = $request->input('descricao');
          $pt->imagem = $file->store('pontos');
          $pt->homepage = false;
          $pt->save();
        }

        return redirect()->route('admin.paginas.homepage');
    }

    public function deletePontoTuristico($id){
      $pt = TouristicPoint::find($id);
      if(isset($pt)){
        $pt->delete();
      }
      return redirect()->route('admin.paginas.homepage');
    }

}
