<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $galeries = News::paginate(10);
        if ($request->wantsJson()) {
            return view('dashboard.news.pagination', compact('galeries'))->render();
        }
        return view('dashboard.news.index', compact('galeries'));
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
        try {
            $photo = $this->uploadImageAction->uploadAndGetFileName($request->photo, News::FILE_PATH);
            $galery = News::create([
                'photo' => $photo,
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return response()->json([
                'status' => true,
                'message' => [
                    'head' => 'Berhasil',
                    'body' => "Berita $galery->title berhasil dibuat!"
                ]
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => [
                    'head' => 'Gagal',
                    'body' =>
                    dd($th)
                ]
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galery = News::find($id);
        if (!$galery) return response()->json([], 404);
        return response()->json($galery);
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
        $galery = News::find($id);
        $photo = "";

        if (!$galery) return response()->json([], 404);
        if ($request->photo) {
            $this->deleteImageAction->deleteImageOnly(News::FILE_PATH . '/' . $galery->photo);
            $photo = $this->uploadImageAction->uploadAndGetFileName($request->photo, News::FILE_PATH);
        } else {
            $photo = $galery->photo;
        }
        $data = $request->all();
        $data['photo'] = $photo;
        $galery->update($data);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galery = News::find($id);
        if (!$galery) return response()->json([], 404);
        $this->deleteImageAction->destroy(News::FILE_PATH, $galery);
        return response()->json();
    }
}
