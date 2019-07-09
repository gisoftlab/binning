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
        $this->middleware('ajax', ['only' => 'update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @param  ComputeService $compute
     * @return Response
     */
    public function index()
    {
        $emojisId = ComputeService::T_PLUS;
        $emojis = ComputeService::$_emojis;
        $value = null;

        return view('compute.index', compact('emojisId', 'emojis', 'value'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Services\ComputeService $compute
     * @param  ComputeRequest $request
     * @return Response
     */
    public function store(
        ComputeService $compute,
        ComputeRequest $request)
    {
        $validated = $request->validated();
        var_dump($validated);
        exit;

        $emojisId = $validated['emojis'];
        $emojis = ComputeService::$_emojis;
        $value = $compute->run($validated);

        if($request->ajax()) // This is what i am needing.
        {
            return response()->json($value);
        }

        return view('compute.index', compact('emojisId', 'emojis', 'value'));
    }
}