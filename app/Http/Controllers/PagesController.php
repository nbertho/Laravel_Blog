<?php
      namespace App\Http\Controllers;

      use Illuminate\Support\Facades\View;
      use App\Http\Models\Page as PagesMdl;

      class PagesController extends Controller {

        /**
         * Details de la page $id
         * @param  integer $id [id de la page à afficher]
         * @return view      [Vue pages/show.blade.php]
         */
          public function show($id = 1){
            $page =PagesMdl::find($id);
            return View::make('pages.show', compact('page'));
          }

        
      }
