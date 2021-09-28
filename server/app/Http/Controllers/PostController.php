<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\Store as StoreValidate;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    private $service;

    /**
     * Undocumented function
     *
     * @param PostService $service
     */
    public function __construct(PostService $service)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');
        $this->service = $service;
    }

    /**
     * all post view action methods
     *
     * @return void
     */
    protected function index()
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        return view('post.index');
    }

    /**
     * create post view action methods
     *
     * @return void
     */
    protected function create()
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        return view('post.create');
    }

    /**
     * cerate post model action  methods
     *
     * @param StoreValidate $request
     * @return void
     */
    protected function store(StoreValidate $request)
    {
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        $this->service->createPost($request);

        return redirect()->route('post.index');
    }
}
