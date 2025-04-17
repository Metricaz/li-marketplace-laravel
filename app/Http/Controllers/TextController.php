<?php

namespace App\Http\Controllers;

use App\Models\CategoryTexts;
use App\Repositories\TextRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class TextController extends BaseController
{
    public function index(): View
    {
        $texts = CategoryTexts::orderbyDesc('id')->get();

        return view('text/home', ['texts' => $texts]);
    }

    public function store(Request $request): RedirectResponse
    {
        // $this->textRepository->create($request->all());

        return redirect('/text');
    }

    public function show($id)
    {
        $text = CategoryTexts::find($id);

        return view('text/show', ['text' => $text]);
    }
}
