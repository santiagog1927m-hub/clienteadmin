<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
   
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);

        return $response->json();
    }

    
    public function create()
    {
        return view('computer.create');
    }

    
    public function index()
    {
        $url = env('URL_SERVER_API');

        $computers = $this->fetchDataFromApi(
            $url . '/computer/list'
        );

        return view('computer.index', compact('computers'));
    }

    
   
public function store(Request $request)
{
    $request->validate([
        'number' => 'required',
        'brand' => 'required|string|max:100',
        'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
    ]);

    $url = env('URL_SERVER_API');

    $file = $request->file('imagen');

    $response = Http::attach(
        'imagen',
        file_get_contents($file->getRealPath()),
        $file->getClientOriginalName()
    )->post($url . '/computer/store', [
        'number' => $request->number,
        'brand' => $request->brand,
    ]);

    return redirect()->route('computer.index');
}

    
    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $computer = $this->fetchDataFromApi(
            $url . '/computer/show/' . $id
        );

        return view('computer.show', compact('computer'));
    }

    
    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $computer = $this->fetchDataFromApi(
            $url . '/computer/show/' . $id
        );

        return view('computer.edit', compact('computer'));
    }

    
    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put(
            $url . '/computer/' . $id,
            $request->all()
        );

        return redirect()->route('computer.index');
    }

    
    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete(
            $url . '/computer/' . $id
        );

        return redirect()->route('computer.index');
    }
}
