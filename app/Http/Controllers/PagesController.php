<?php
      namespace App\Http\Controllers;

      use Illuminate\Support\Facades\View;
      use App\Http\Models\Page as PagesMdl;

      class PagesController extends Controller {
        public function show($id = 1){
          $page =PagesMdl::find($id);
          return View::make('pages.show', compact('page'));
        }
      }
