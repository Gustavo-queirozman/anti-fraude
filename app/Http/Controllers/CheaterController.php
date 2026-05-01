<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cheater;

class CheaterController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->input('search', ''));
        $cheaters = Cheater::query()
            ->when($search !== '', function ($query) use ($search) {
                $digits = preg_replace('/[^0-9]/', '', $search);

                $query->where('name', 'like', "%{$search}%");

                if ($digits !== '') {
                    $query->orWhere('cpf', 'like', "%{$digits}%")
                          ->orWhere('zipcode', 'like', "%{$digits}%");
                }
            })
            ->orderBy('id', 'desc')
            ->paginate(5)
            ->withQueryString();

        return view('cheaters.index', compact('cheaters', 'search'));
    }

    public function create()
    {
        return view('cheaters.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'cpf' => 'required|string',
            'zipcode' => 'required|string',
        ]);

        Cheater::create($data);

        return redirect()
            ->route('cheaters.index')
            ->with('success', 'Registro criado com sucesso!');
    }

    public function show($id)
    {
        $cheater = Cheater::findOrFail($id);
        return view('cheaters.show', compact('cheater'));
    }

    public function edit($id)
    {
        $cheater = Cheater::findOrFail($id);
        return view('cheaters.edit', compact('cheater'));
    }

    public function update(Request $request, $id)
    {
        $cheater = Cheater::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string',
            'cpf' => 'required|string',
            'zipcode' => 'required|string',
        ]);

        $cheater->update($data);

        return redirect()
            ->route('cheaters.index')
            ->with('success', 'Registro atualizado!');
    }

    public function destroy($id)
    {
        $cheater = Cheater::findOrFail($id);
        $cheater->delete();

        return redirect()
            ->route('cheaters.index')
            ->with('success', 'Registro deletado!');
    }
}