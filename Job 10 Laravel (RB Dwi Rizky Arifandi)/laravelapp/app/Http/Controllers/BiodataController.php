<?php    
namespace App\Http\Controllers;    
use Illuminate\Http\Request; 
 
   class BiodataController extends Controller    
   {        
       public function index() 
       {          
           $nama = 'Ernold Mochammad Can Setya'; //ubah dengan nama kalian 
           $materi = ["Web Design", "Web Programming", "Digital Marketing","Graphic Design"];             
           return view('biodata' , ['nama' => $nama, 'materi' => $materi]);         
        }    
    } 