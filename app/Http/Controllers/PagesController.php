<?php 

namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;

class PagesController extends Controller {
 
 
  public function index() {
    return view('index');
  }
  
  public function about() {
    return view('about', ['name' => 'Megumi Fushiguro']);
  }
  
}