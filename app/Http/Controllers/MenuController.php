<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // ======================
    // ADMIN INDEX
    // ======================
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('menu', 'public');
        }

        Menu::create($data);

        return redirect()->route('menus.index');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $data = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image'
        ]);

        if ($request->hasFile('foto')) {

            if ($menu->foto && Storage::disk('public')->exists($menu->foto)) {
                Storage::disk('public')->delete($menu->foto);
            }

            $data['foto'] = $request->file('foto')->store('menu', 'public');
        }

        $menu->update($data);

        return redirect()->route('menus.index');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        if ($menu->foto && Storage::disk('public')->exists($menu->foto)) {
            Storage::disk('public')->delete($menu->foto);
        }

        $menu->delete();

        return redirect()->route('menus.index');
    }

    // ======================
    // USER PRODUK
    // ======================
    public function userProduk()
    {
        $menus = Menu::all();
        return view('user.produk', compact('menus'));
    }

    public function userDetail($id)
    {
        $menu = Menu::findOrFail($id);
        return view('user.detail', compact('menu'));
    }

    // ======================
    // CHECKOUT
    // ======================
    public function checkoutForm($id)
    {
        $menu = Menu::findOrFail($id);
        return view('user.checkout', compact('menu'));
    }

    public function checkoutProcess(Request $request)
    {
        return redirect()->route('checkout.selesai');
    }

    // ======================
    // API AUTO REFRESH
    // ======================
    public function apiMenus()
    {
        $menus = Menu::orderBy('id', 'asc')->get();

        $menus->transform(function ($m) {
            $m->foto_url = $m->foto ? asset('storage/' . $m->foto) : null;
            return $m;
        });

        return response()->json($menus);
    }
}
