<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materi;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MateriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $client = new Client(['base_uri' => 'http://localhost:8000/']);  
        // $client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);  
        // $response = $client->request('GET', 'api/materi/1'); 
        // $response = $client->request('GET', 'todos/1'); 
        // $body = $response->getBody();
        // $content =$body->getContents();
        // $arr = json_decode($content,TRUE);
        // echo"<pre>";
        // print_r(get_class_methods($response));
        // print_r(get_class_methods($body));
        // print_r($arr);
        // echo"</pre>";
        //dd(json_decode($content,true));
        // return $arr;
        $materi = Materi::orderBy('created_at','desc')->paginate(10);
        return view('container.sevima.materi-index')->with('payload', $materi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materi = Materi::find($id);
        return view('container.sevima.materi-detail')->with('payload', $materi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
