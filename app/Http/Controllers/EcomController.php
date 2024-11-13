<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomController extends Controller
{
    //Index Page Load=====================>
    public function indexPageLoad(){
        return view('index');
    }
    
    //Library Page Load=====================>
    public function libraryPageLoad(){
        return view('library');
    }
    //Ournotes Page Load=====================>
    public function ourNotesPageLoad(){
        return view('ourNotes');
    }


}
