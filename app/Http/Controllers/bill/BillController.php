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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // dd(Bill::all());
        // dd(Bill::with('students')->with('users')->where('users.id', '=', Auth::user()->id));
        if ($request->ajax()) {
            $data = DB::table('bills')
                ->leftJoin('students', 'bills.students_id', '=', 'students.id_students')
                ->leftJoin('users', 'students.user_id', '=', 'users.id')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

            // return DataTables::of($data)->toJson();
            return DataTables::of($data)
                ->addColumn('email', function ($data) {
                    return $data->email . "<br>" . $data->no_hp_guardian;
                })
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('dob', function ($data) {
                    return $data->dob;
                })
                ->addColumn('total', function ($data) {
                    return "Rp. " . number_format($data->total, 2);
                })
                ->addColumn('check', function ($data) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input name="check[]" id="check" class="form-check-input widget-9-check"
                        type="checkbox" value="' . $data->total . '">
                        <input name="id_bill[]" id="bill" class="form-check-input widget-9-check"
                        type="hidden" value="' . $data->id_bill . '">
                </div>';
                })
                // ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id_bill . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editData">Edit</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id_bill . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteData">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action', 'email', 'check'])
                ->toJson();
            // $data = Student::with('bill')->with('user')->where('user_id', Auth::user()->id);
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
