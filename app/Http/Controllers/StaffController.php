<?php

namespace App\Http\Controllers;

use App\Models\TbStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use UxWeb\SweetAlert\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;


class StaffController extends Controller
{

    public function index()
    {

        $staffs = TbStaff::latest()->paginate(10);
        return view('staff', compact('staffs'));
        // return view('staff', [
        //     'staffs' => DB::table('tb_Staff')->paginate(5)
        // ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'id_staff'=>'required|unique:tb_staff',
            'name_staff'=>'required|unique:tb_staff',
            'surname_staff'=>'required|unique:tb_staff',
            'sex'=>'required',
            'position_staff'=>'required',
            'leader_department'=>'required',
            'office'=>'required',
            'tel'=>'required',
        ],[

        ]);

        // $data = array();
        // $data["id_staff"] = $request->id_staff;
        // $data["name_staff"] = $request->name_staff;
        // $data["surname_staff"] = $request->surname_staff;
        // $data["position_staff"] = $request->position_staff;
        // $data["leader_department"] = $request->leader_department;
        // $data["office"] = $request->office;
        // $data["tel"] = $request->tel;

        // DB::table('tb_staff')->insert($data);

        TbStaff::insert([
            'id_staff'=>$request->id_staff,
            'name_staff'=>$request->name_staff,
            'surname_staff'=>$request->surname_staff,
            'sex'=>$request->sex,
            'position_staff'=>$request->position_staff,
            'leader_department'=>$request->leader_department,
            'office'=>$request->office,
            'tel'=>$request->tel,

        ]);

        Alert::success('ບັນທຶກ', 'ສຳເລັດ');
        return Redirect()->back()->with('Success','Profile updated!');
    }

    public function edit($id){
        $staffEdit = TbStaff::find($id);
        return view('staff', compact('staffEdit'));
        // return Alert::alert('Title', 'Message', 'Type');
    }

}
