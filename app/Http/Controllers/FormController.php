<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormSiteRequest;
use App\Mail\contattiForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form(){
        return view('contatti');
    }

    public function send(FormSiteRequest $request)
    {       
     
      $data = [
        'email' => $request->input('email'),
        'message' => $request->input('message'),
      ] ;
     
      Mail::to($data['email'])->send(new contattiForm($data));
      return redirect()->back()->with('status','Email inviata con successo!!!!');
    }
}
