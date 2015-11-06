<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\LengthAwarePaginator;

class PagesController extends Controller
{
    //
    public function index()
    {
        //$result = DB::table('opravilo')->get();
        $result = DB::table('opravilo')->where('STATUS',0)->paginate(3);
        return view('ToDo')->with('data',$result);
    }

    public function save()
    {
        $validation=array('Opis'=> 'required',
        'Naziv'=>'required',
        'Oseba'=>'required');
        $post_task= Input::all();
        \Session::flash('SOpis',$post_task['Opis']);
        \Session::flash('SNaziv',$post_task['Naziv']);
        \Session::flash('SOseba',$post_task['Oseba']);

        $vl=Validator::make(Input::all(),$validation);
        if($vl->fails()){
            return Redirect::to('/')->withErrors($vl);
        }else{

            $post_task= Input::all();
            $datum="";
            if($post_task['Datum_S']==""){
                $datum=date("Y-m-d");
            }else{
                $datum=date("Y-m-d", strtotime($post_task['Datum_S']));;
            }

            $data=array(
                'OSEBA'=>$post_task['Oseba'],
                'NAZIV'=>$post_task['Naziv'],
                'OPIS'=>$post_task['Opis'],
                'DATUM_START'=>$datum,
                'STATUS'=>0
            );

            $check=0;
            $check=DB::table('opravilo')->insert($data);
            if($check>0){
                \Session::flash('SOpis','');
                \Session::flash('SNaziv','');
                \Session::flash('SOseba','');
                return Redirect::to('/');
            }
            echo $check;


        }
    }

    public function update()
    {
        $validation=array('Opis'=> 'required',
            'Naziv'=>'required',
            'Oseba'=>'required');

        $vl=Validator::make(Input::all(),$validation);
        if($vl->fails()){
            $post_task= Input::all();
            return Redirect::to('/EditTask/'.$post_task['id'])->withErrors($vl);
        }else{

            $post_task= Input::all();
            $data=array(
                'OSEBA'=>$post_task['Oseba'],
                'NAZIV'=>$post_task['Naziv'],
                'OPIS'=>$post_task['Opis'],
                'STATUS'=>0
            );

            $check=0;
            $check=DB::table('opravilo')->where('ID_OPRAVILA',$post_task['id'])->update($data);
            if($check>0){
                return Redirect::to('/');
            }
            //echo $check;

        }
    }

    public function EditTask($id){
        $row=DB::table('opravilo')->where('ID_OPRAVILA',$id)->first();
        return View('Edit')->with('data',$row);

    }

    public function AcceptTask($id){
        $datum=date("Y-m-d");
        $data=array(
            'DATUM_END'=>$datum,
            'STATUS'=>1
        );

        $check=0;
        $check=DB::table('opravilo')->where('ID_OPRAVILA',$id)->update($data);
        if($check>0){
            return Redirect::to('/');
        }
    }
    public function DeleteTask($id){
        $row=DB::table('opravilo')->where('ID_OPRAVILA',$id)->delete();
        return Redirect::to('/');

    }
    public function DeleteDoneTask($id){
        $row=DB::table('opravilo')->where('ID_OPRAVILA',$id)->delete();
        return Redirect::to('/DoneTask');

    }


    public function DoneTask(){
        $result = DB::table('opravilo')->where('STATUS',1)->paginate(5);
        $result->setPath('DoneTask');
        return view('DoneTask')->with('data',$result);
    }
}
