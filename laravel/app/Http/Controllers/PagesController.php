<?php

namespace App\Http\Controllers;

use App\post;

class PagesController extends Controller{

public function getIndex(){
	$posts = post::orderBy('created_at' , 'desc')->limit('4')->get();
return view('pages/welcome')->withPosts($posts);
}
public function getAbout(){
	$first = 'sid';
	$last = 'sigdel';
	$full = $first. " ". $last;
	$email = 'siddharthasigdel@gmail.com';
	$data = [];
	$data['email']=$email;
	$data['fullname']=$full;
return view('pages/about')->withData($data);
}
public function getContact(){
return view('pages/contact');
}
}