<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\equipmentCategorie;
use App\Models\equipments;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipmentController extends Controller
{
    //


    public function equipments(Request $request)
    {

        // $get_all_equipments = equipments::with('equipment_categories')->get();
        $abc = equipments::with(['val_fun', 'ven_name'])->latest()->get();
        // dd($abc);      

        return view('admin.equipment.list', ['abc' => $abc]);
    }


    public function add_equipment(Request $request)
    {

        $equipments_categories = equipmentCategorie::all();
        $vendors = Vendor::all();


        return view('admin.equipment.add', ['equipments_categories' => $equipments_categories, 'vendors' => $vendors]);
    }



    // function for save equipment 
    public function save_equipment(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'equipment_name' => 'required|unique:equipments,equipment_name',
            'equipment_categories' => 'required',
            'equipment_description' => 'required',
            'equipment_quantity' => 'required',
            'equipment_purchase_date' => 'required',
            'equipment_expire_date' => 'required',
            'vendor' => 'required',
            'equipment_piece_cost' => 'required',
        ]);

        // If validation passes, create the application
        equipments::create([
            'equipment_name' => $validatedData['equipment_name'],
            'equipment_categories' => $validatedData['equipment_categories'],
            'equipment_description' => $validatedData['equipment_description'],
            'equipment_quantity' => $validatedData['equipment_quantity'],
            'equipment_purchase_date' => $validatedData['equipment_purchase_date'],
            'equipment_expire_date' => $validatedData['equipment_expire_date'],
            'vendor' => $validatedData['vendor'],
            'equipment_piece_cost' => $validatedData['equipment_piece_cost'],
        ]);

        return redirect()->back()->with('success-message', 'Equipment added Successfully..!');
    }




    public function edit_equipment(Request $request, $id)
    {

        $equipments_categories = equipmentCategorie::all();
        $vendors = Vendor::all();
        $equipment = equipments::find($id)->with(['val_fun', 'ven_name'])->first();
        // dd($equipment); 
        // $abc = equipments::with(['val_fun', 'ven_name'])->latest()->get();

        if ($equipment) {

            return view('admin.equipment.edit', ['equipment' => $equipment,'equipments_categories'=>$equipments_categories,'vendors'=>$vendors]);
        } else {

            return redirect()->back()->with('success-message', 'Equipment not found');
        }
        
    }


public function update_equipment(Request $request, $id){
// dd($request); 
    $validatedData = $request->validate([
        'equipment_name' => 'required|unique:equipments,equipment_name,' . $id,
    ]);

    $equipment = equipments::find($id);

    if ($equipment) { 
        $equipment->update($validatedData);
        return redirect()->back()->with('success-message', 'Equipment updated successfully');
    } else {
        return redirect()->back()->with('success-message', 'Equipment not found');
    }
} 




    public function delete_equipment(Request $request, $id)
    {
        // dd($id); 
        
        $equipment = equipments::find($id);

        if ($equipment) {

            $equipment->delete();
            return redirect()->back()->with('success-message', 'Equipment deleted successfully');
        } else {

            return redirect()->back()->with('success-message', 'Equipment not found');
        }
    }







    // equipmtnts categorie 
    public function equipments_categorie_list(Request $request)
    {

        $get_all_equipment_categories = equipmentCategorie::all();

        return view('admin.Equipment_Categorie.list', ['get_all_equipment_categories' => $get_all_equipment_categories]);
    }



    public function equipment_categorie_add(Request $request)
    {
        return view('admin.Equipment_Categorie.add');
    }



    public function equipment_categorie_save(Request $request)
    {

        $validatedData = $request->validate([
            'equipment_categorie_name' => 'required|unique:equipment_categories',

        ]);

        $existingRecord = equipmentCategorie::where('equipment_categorie_name', $validatedData['equipment_categorie_name'])->first();

        if ($existingRecord) {

            return redirect()->back()->with('success-message', 'Categorie already exists');
        } else {

            equipmentCategorie::create($validatedData);
            return redirect()->back()->with('success-message', 'Categorie created successfully');
        }
    }



    public function equipment_categorie_edit(Request $request, $id)
    {

        $category = equipmentCategorie::find($id);

        if ($category) {

            return view('admin.Equipment_Categorie.edit', ['category' => $category]);
        } else {

            return redirect()->back()->with('success-message', 'Categorie not found');
        }
    }



    public function equipment_categorie_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'equipment_categorie_name' => 'required|unique:equipment_categories,equipment_categorie_name,' . $id,
        ]);

        $category = equipmentCategorie::find($id);

        if ($category) {
            $category->update($validatedData);
            return redirect()->back()->with('success-message', 'Category updated successfully');
        } else {
            return redirect()->back()->with('success-message', 'Category not found');
        }
    }


    public function equipment_categorie_delete(Request $request, $id)
    {
        // dd($id); 


        $category = equipmentCategorie::find($id);

        if ($category) {

            $category->delete();
            return redirect()->back()->with('success-message', 'Category deleted successfully');
        } else {

            return redirect()->back()->with('success-message', 'Category not found');
        }
    }

    // equipment categorie 
}
