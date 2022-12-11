<?php

namespace App\Http\Controllers\bill;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Student;
use App\Models\User;
// use DataTables;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $data =  Student::with('user');
            // dd($data);
            return DataTables::of($data)
                ->addColumn('email', function (Student $student) {
                    return $student->user->email;
                })
                ->addColumn('name', function (Student $student) {
                    return $student->user->name;
                })
                ->addColumn('dob', function (Student $student) {
                    return $student->dob;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->ItemId . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editData">Edit</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->ItemId . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteData">Delete</a>';

                    return $btn;
                })
                ->toJson();
            // return DataTables::eloquent($data)
            //     ->addColumn('bill', function (Student $student) {
            //         return $student->bill->month_bill;
            //     })
            //     // ->addColumn('bill', function (Student $student) {
            //     //     return $student->bill->total;
            //     // })
            //     ->addColumn('user', function (Student $student) {
            //         return $student->user->email;
            //     })
            //     ->addColumn('action', function ($row) {

            //         $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->ItemId . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editData">Edit</a>';

            //         $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->ItemId . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteData">Delete</a>';

            //         return $btn;
            //     })
            //     ->toJson();
        }
        return view('pages.bill.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
