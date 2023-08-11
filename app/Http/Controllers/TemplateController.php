<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function index () {
        $templates = template::all() ; 
        return view("Template" , ["templates" => $templates]) ; 
    }
}
