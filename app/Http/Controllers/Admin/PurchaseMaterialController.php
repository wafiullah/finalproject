<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PurchaseMaterial;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase_materials = PurchaseMaterial::with('supplier')->latest()->get();
        return view('admin.purchase_materials.index', compact('purchase_materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('admin.purchase_materials.create', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($materialId)
    {
        $suppliers = Supplier::all();

        $material = PurchaseMaterial::find($materialId);

        return view('admin.purchase_materials.edit', compact('suppliers', 'material'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required',
            'unit_price' => 'required',
            'supplier_id' => 'required',
            'total_amount' => 'required',
            'unit' => 'required',
            'purchase_date' => 'required',
            'description' => 'nullable',
            'quantity' => 'nullable',
        ]);

        PurchaseMaterial::create($validated);

return redirect()->route('admin.purchase-materials.index')->with('success', 'Purchase Material successfully added.');


    }

    public function update(Request $request, $materialId)
    {
        //
        $validated = $request->validate([
            'title' => 'required',
            'unit_price' => 'required',
            'supplier_id' => 'required',
            'total_amount' => 'required',
            'unit' => 'required',
            'purchase_date' => 'required',
            'description' => 'nullable',
            'quantity' => 'nullable',
        ]);

        $material = PurchaseMaterial::find($materialId);
        $material->update($validated);
return redirect()->route('admin.purchase-materials.index')->with('success', 'Purchase Material successfully updated.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($materialId)
    {
        PurchaseMaterial::find($materialId)->delete();
return redirect()->route('admin.purchase-materials.index')->with('success', 'Material successfully deleted.');

    }
}
