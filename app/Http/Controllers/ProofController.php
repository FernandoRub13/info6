<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProofRequest;
use App\Models\Proof;


class ProofController extends Controller
{

    public function index()
    {
        $proofs = Proof::paginate(10);
        return view('proofs.index', compact('proofs'));
    }

    public function show(Request $request, Proof $proof)
    {
        return view('proofs.show', compact('proof'));
    }

    public function create()
    {
        return view('proofs.create');
    }

    public function store(ProofRequest $request)
    {
        $data = $request->validated();
        $proof = Proof::create($data);
        return redirect()->route('proofs.index')->with('status', 'Proof created!');
    }

    public function edit(Request $request, Proof $proof)
    {
        return view('proofs.edit', compact('proof'));
    }

    public function update(ProofRequest $request, Proof $proof)
    {
        $data = $request->validated();
        $proof->fill($data);
        $proof->save();
        return redirect()->route('proofs.index')->with('status', 'Proof updated!');
    }

    public function destroy(Request $request, Proof $proof)
    {
        $proof->delete();
        return redirect()->route('proofs.index')->with('status', 'Proof destroyed!');
    }
}
