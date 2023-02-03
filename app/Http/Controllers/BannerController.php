<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banners.banner')->with('banners', $banners);
    }

    public function store(Request $request)
    {
        $request->validate([
            'banner' => 'required|mimes:jpeg,jpg,gif|max:4096',
        ]);

        // Realiza o upload do arquivo
        $fileName = 'banner__' . time() . '.' . $request->file('banner')->extension();
        // $request->file('banner')->move(public_path('uploads'), $fileName);
        $request->file('banner')->storeAs('public/uploads', $fileName);

        // Salva o nome do banco de dados
        $banner = new Banner;
        $banner->name = $fileName;
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner Cadastrado com Sucesso.');
    }

    public function destroy(Banner $banner)
    {
        Storage::delete("./storage/uploads/$banner->name");

        $banner->delete();
        return redirect()->route('banners.index');
    }
}
