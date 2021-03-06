<?php

namespace App\Http\Controllers;
use App\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return ExpenseReport::all();
       return view('ExpenseReport.index',[
           'expenseReports'=>ExpenseReport::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ExpenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validData= $request->validate([
            'title'=>'required|min:3'
        ]);
        $report= new ExpenseReport();
        $report->title=$request->get('title');
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $report =ExpenseReport::findOrFail($id);
        return view('ExpenseReport.show',['report'=>$report]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report =ExpenseReport::findOrFail($id);
        return view('ExpenseReport.edit',['report'=>$report]);
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
        $validData= $request->validate([
            'title'=>'required|min:3'
        ]);
        $report=ExpenseReport::find($id);
        $report->title=$request->get('title');
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report =ExpenseReport::findOrFail($id);
        $report->delete();
        return redirect('expense_reports');

    }
    public function confirmDelete($id)
    {
        $report =ExpenseReport::findOrFail($id);

        return view('expenseReport.confirmDelete', ['report'=>$report]);
    }
}
