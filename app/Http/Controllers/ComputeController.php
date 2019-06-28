<?php


namespace App\Http\Controllers;

use App\Services\ComputeService;
use Illuminate\Http\Request;
use App\Http\Requests\ComputeRequest;

/**
 * Class ComputeController
 * @package App\Http\Controllers
 */
class ComputeController extends Controller {
    /**
     * Create a new ContactController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('admin', ['except' => ['create', 'store']]);
        //$this->middleware('ajax', ['only' => 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  ComputeService $compute
     * @return Response
     */
    public function index(ComputeService $compute)
    {

        //$messages = $compute->index();
        //return view('back.messages.index', compact('messages'));

        $emojisId = 0;
        $emojis = [
            0 => 'Alien',
            1 => 'Skull',
            2 => 'Ghost',
            3 => 'Ghost',
        ];


        return view('compute.index', compact('emojisId', 'emojis'));
    }
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return Response
//     */
//    public function create()
//    {
//        return view('compute.compute');
//    }
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  App\Services\ComputeService $compute
//     * @param  ComputeRequest $request
//     * @return Response
//     */
//    public function store(
//        ComputeService $compute,
//        ComputeRequest $request)
//    {
//        //$compute->store($request->all());
//        return redirect('/')->with('ok', trans('front/contact.ok'));
//    }
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  App\Services\ComputeService $compute
//     * @param  Illuminate\Http\Request $request
//     * @param  int  $id
//     * @return Response
//     */
//    public function update(
//        ComputeService $compute,
//        Request $request,
//        $id)
//    {
//        //$compute->update($request->input('seen'), $id);
//        return response()->json(['statut' => 'ok']);
//    }
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  App\Services\ComputeService $compute
//     * @param  int  $id
//     * @return Response
//     */
//    public function destroy(
//        ComputeService $compute,
//        $id)
//    {
//        //$compute->destroy($id);
//
//        return redirect('compute');
//    }
}