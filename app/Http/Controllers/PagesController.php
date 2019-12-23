<?php
      namespace App\Http\Controllers;

      use Illuminate\Support\Facades\View;
      use App\Http\Models\Page as PagesMdl;
      use App\Http\Models\Post as PostsMdl;

      class PagesController extends Controller {

        /**
         * Details de la page $id
         * @param  integer $id [id de la page à afficher]
         * @return view      [Vue pages/show.blade.php]
         */
          public function show($id = 1){
            $page =PagesMdl::find($id);
            if ($page->id === 1):
              $posts = PostsMdl::orderby('datePublication', 'desc')->take(10)->get();
              return View::make('pages.show', compact('page', 'posts'));
            endif;
            return View::make('pages.show', compact('page'));
          }


      }
