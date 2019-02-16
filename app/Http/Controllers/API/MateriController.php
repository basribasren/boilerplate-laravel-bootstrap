<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Materi;
use App\Transformers\MateriTransformer;

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
        $materi = Materi::orderBy('created_at','desc')->paginate(10);

        if (!$materi) {
            return response()->json([
                'statusMessage' => 'Data not found',
                'statusType'=>'error',
                'statusCode'=> 404
            ]);
        }

        return $materi;

        // return fractal()
        //    ->collection($materi)
        //    ->transformWith(new MateriTransformer())
        //    ->includeCharacters()
        //    ->toArray();
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
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'duration' => 'string|max:255',
            'description' => 'string'
        ]);

        $materi = new Materi;
        $materi->title = $request->title;
        $materi->duration = $request->duration;
        $materi->description = $request->description;
        // $post->user_id = auth()->user()->id;
        // $materi->cover_image = $fileNameToStore;
        $materi->save();

        return response()->json([
            'statusMessage' => 'Create success',
            'statusType'=>'success',
            'statusCode'=> 201
        ]);
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

        if (!$materi) {
            return response()->json([
                'statusMessage' => 'Data not found',
                'statusType'=>'error',
                'statusCode'=> 404
            ]);
        }

        return fractal()
           ->item($materi)
           ->transformWith(new MateriTransformer())
           ->toArray();
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
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'duration' => 'string|max:255',
            'description' => 'string'
        ]);

        $materi = Materi::find($id);
        $materi->title = $request->title;
        $materi->duration = $request->duration;
        $materi->description = $request->description;
        $materi->save();

        return response()->json([
            'statusMessage' => 'Create success',
            'statusType'=>'success',
            'statusCode'=> 201
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi = Materi::find($id);

        if (!$materi) {
            return response()->json([
                'statusMessage' => 'Data not found',
                'statusType'=>'error',
                'statusCode'=> 404
            ]);
        }

        // Check for correct user
        // if(auth()->user()->id !==$materi->user_id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        $materi->delete();

        return response()->json([
            'statusMessage' => 'Delete success',
            'statusType'=>'success',
            'statusCode'=> 201
        ]); 
    }
}
