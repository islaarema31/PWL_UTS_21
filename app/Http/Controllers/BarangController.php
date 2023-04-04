<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barang = Barang::where([
            ['Nama_barang', '!=', null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('Nama_barang', 'LIKE', '%' . $search . '%')
                    ->get();
                }
            }]
        ])->paginate(6);
        $posts = Barang::orderBy('Kode_barang', 'desc');
        return view('barang.index', compact('barang'));
    }

    //     public function index()
    // {
    //     $barang = Barang::all();
    //     $posts = Barang::orderBy('nim', 'desc')->paginate(6);
    //     return view('barang.index', compact('barang'))
    //     ->with('i', (request()->input('page', 1) - 1) *5);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
        ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_barang)
    {
        $Barang = Barang::find($kode_barang);
        return view('barang.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_barang)
    {
        $Barang = Barang::find($kode_barang);
        return view('barang.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Barang::find($kode_barang)->update($request->all());

        return redirect()->route('barang.index')
        ->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_barang)
    {
        Barang::find($kode_barang)->delete();

        return redirect()->route('barang.index')
        ->with('success', 'Barang Berhasil Dihapus');
    }
}
