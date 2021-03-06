<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Single_class;

class Single_classController extends Controller
{
     public function index(){

        $single_class=Single_class::all();
        return view('application.single');
    }

     public function store(Request $request){

        $single_class = new Single_class;

        $single_class -> term = $request -> term;
        $single_class -> way = $request -> way;
        $single_class -> name = $request -> name;
        $single_class -> field = $request -> field;
        $single_class -> other_field = $request -> other_field;
        $single_class -> location = $request -> location;
        $single_class -> date = $request -> date;
        $single_class -> start = $request -> start;
        $single_class -> end = $request -> end;
        $single_class -> limit = $request -> limit;
        $single_class -> teacher = $request -> teacher;
        $single_class -> email = $request -> email;
        $single_class -> teacher_intro = $request -> teacher_intro;
        $single_class -> class_hr = $request -> class_hr;
        $single_class -> auth_hr = $request -> auth_hr;
        $single_class -> class_intro = $request -> class_intro;
        $single_class -> keyword = $request -> keyword;
        $single_class -> video = $request -> video;
        $single_class -> weekday = date('N',strtotime($request->date));
        $single_class -> account = $request->session()->get('account');

        $single_class->save();


        return redirect('/application/finish');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }

    public function view($id){
      $single_class = Single_class::find($id);
      return view('application.view_single',["single_class"=>$single_class]);
    }

    public function edit($id){
      $single_class = Single_class::find($id);
      return view('application.edit_single',["single_class"=>$single_class]);
    }

    public function edit_fin($id,Request $request){
      $single_class = Single_class::find($id);

      $single_class -> term = $request -> term;
      $single_class -> way = $request -> way;
      $single_class -> name = $request -> name;
      $single_class -> field = $request -> field;
      $single_class -> other_field = $request -> other_field;
      $single_class -> location = $request -> location;
      $single_class -> date = $request -> date;
      $single_class -> start = $request -> start;
      $single_class -> end = $request -> end;
      $single_class -> limit = $request -> limit;
      $single_class -> teacher = $request -> teacher;
      $single_class -> email = $request -> email;
      $single_class -> teacher_intro = $request -> teacher_intro;
      $single_class -> class_hr = $request -> class_hr;
      $single_class -> auth_hr = $request -> auth_hr;
      $single_class -> class_intro = $request -> class_intro;
      $single_class -> keyword = $request -> keyword;
      $single_class -> video = $request -> video;
      $single_class -> weekday = date('N',strtotime($request->date));


      $single_class -> account = $request->session()->get('account');

      $single_class->save();
      return redirect('/application');
    }
    public function delete($id){
      $single_class = Single_class::find($id);
      $single_class->delete();

      return redirect('/application');
    }



}
