<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.index', compact('books'));
    }

    public function add()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|unique:books|max:10',
            'name' => 'required',
            'stock' => 'required|min:1',
            'price' => 'required',
            'category' => 'required',
        ]);

        Book::create([
            'id' => $request->id,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'category' => $request->category,
            'status' => 'packing',
        ]);

        return redirect()->route('admin.index')->with('message', 'Buku Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'stock' => 'required|min:1',
            'price' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $book->update([
            'id' => $request->id,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'category' => $request->category,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.index')->with('message', 'Buku Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.index')->with('message', 'Buku Berhasil Dihapus');
    }
}
