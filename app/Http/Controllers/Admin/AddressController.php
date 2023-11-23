<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\Admin\AddressService;
use App\Models\Address;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    protected $addressService;
    public function __construct(AddressService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function index()
    {
        $Addresss = $this->addressService->all();
        return view('admin.pages.address.index', compact('Addresss'));
    }

    public function create()
    {
        return view('admin.pages.address.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'map' => 'nullable'
        ]);

        $this->addressService->save($validatedData);

        return redirect()->route('admin.address.index')
            ->with('success', 'Tạo địa chỉ thành công!');
    }

    public function edit($id)
    {
        logger(`id = $id`);
        $address = $this->addressService->find($id);
        return view('admin.pages.address.edit', compact('address'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'map' => 'nullable'
        ]);
        
        $this->addressService->update($validatedData, $id);

        return redirect()->route('admin.address.index')
            ->with('success', 'Cập nhật địa chỉ thành công!');
    }

    public function destroy($id)
    {
        $this->addressService->delete($id);
        return redirect()->route('admin.address.index')
            ->with('success', 'Xoá địa chỉ thành công!');
    }

}
