<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {
   
 public function getIndex(){
     $posts =Post::latest('created_at', 'desc')->limit(4)->get();
       return view('pages.welcome')->withPosts($posts);
    }
    
public function getAbout(){
    $first="Adhar";
    $last="Bhattarai";
    $fullname= $first . " " . $last;
    $email='adharbhattarai@gmail.com';

    $data=[];
    $data['email']=$email;
    $data['fullname']=$fullname;
    return view('pages.about')->withData($data);
    }

public function getContact(){
     return view('pages.contact');
    }

    
}