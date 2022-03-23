<?php

namespace Modules\Inventory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\BusinessLocation;
use App\Transaction;
use App\Utils\ModuleUtil;

use App\Utils\ProductUtil;
use App\Utils\TransactionUtil;
use Datatables;
use App\StocktackingLine;
use DB;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __construct(ProductUtil $productUtil, TransactionUtil $transactionUtil, ModuleUtil $moduleUtil)
    {
        $this->productUtil = $productUtil;
        $this->transactionUtil = $transactionUtil;
        $this->moduleUtil = $moduleUtil;
    }

    public function index()
    {
        $business_id = request()->session()->get('user.business_id');
        if (!auth()->user()->can('stocktacking.view') ) {
            abort(403, 'Unauthorized action.');
        }
       // close any open transaction
          $transactions=\DB::table('transactions')->join('business_locations','business_locations.id','transactions.location_id')
            ->where('transactions.type','stocktacking')
            ->where('transactions.business_id',$business_id)
            ->select(
                'transactions.*',
                'business_locations.name as location_name'
            )
            ->get();


        return view('inventory::index',['transactions'=>$transactions]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        if (!auth()->user()->can('stocktacking.create') ) {
            abort(403, 'Unauthorized action.');
        }
        $business_id = request()->session()->get('user.business_id');
        $business_locations = BusinessLocation::forDropdown($business_id);

        return view('inventory::create',compact('business_locations'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('stocktacking.create') ) {
            abort(403, 'Unauthorized action.');
        }
        $business_id = request()->session()->get('user.business_id');
        $transactions=\DB::table('transactions')->where('type','stocktacking')->where('business_id',$business_id)->whereBetween('transaction_date',[$request->start_date,$request->end_date])->orWhereBetween('end_date',[$request->start_date,$request->end_date])->where('location_id',$request->location_id)->get();
        if(sizeof($transactions )> 0 ){
            $output = ['success' => 0,
                'msg' =>'تتعارض فترة الجرد مع عملية جرد اخري لهذا الفرع      '
            ];
            return redirect()->back()->with('status', $output);

        }
        try{
            \DB::table('transactions')->insert([
                'business_id'=>$business_id,
                'location_id'=>$request->location_id,
                'type'=>'stocktacking',
                'status'=>$request->status,
                'transaction_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'created_by'=>\Auth::user()->id
            ]);
            $output = ['success' => 1,
                'msg' =>'تم اضافة الجرد بنجاح'
            ];

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());

            $output = ['success' => 0,
                'msg' => __('messages.something_went_wrong')
            ];
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('inventory::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('inventory::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
