<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');
    }

    public function cursos() {
        return view('site.cursos');
    }

    public function oportunidades() {
        return view('site.oportunidades');
    }

    public function vestibulinho() {
        return view('site.vestibulinho');
    }

    public function contato() {
        return view('site.contato');
    }
}
