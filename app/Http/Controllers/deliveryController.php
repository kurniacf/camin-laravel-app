<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Delivery;

class deliveryController extends Controller
{
    public function index()
    {
        $delivery = Delivery::all();
        return view ('delivery.index')->with('delivery', $delivery);
    }

    public function create()
    {
        return view('delivery.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Delivery::create($input);
        return redirect('delivery')->with('flash_message', 'Delivery telah ditambahkan');
    }

    public function show($id)
    {
        $delivery = Delivery::find($id);
        return view('delivery.show')->with('delivery', $delivery);
    }

    public function edit($id)
    {
        $delivery = Delivery::find($id);
        return view('delivery.edit')->with('delivery', $delivery);
    }

    public function update(Request $request, $id)
    {
        $delivery = Delivery::find($id);
        $input = $request->all();
        $delivery->update($input);
        return redirect('delivery')->with('flash_message', 'delivery telah diupdate');
    }

    public function destroy($id)
    {
        Delivery::destroy($id);
        return redirect('delivery')->with('flash_message', 'Delivery dihapus');
    }
}
