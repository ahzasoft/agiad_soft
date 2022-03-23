<?php

namespace Modules\Assets\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Assets\Entities\partner;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        if (!auth()->user()->can('Assets.view') && !auth()->user()->can('Assets.create')) {
            abort(403, 'Unauthorized action.');
        }

      $business_id = request()->session()->get('user.business_id');
        //$Assets=partner::where('business_id', $business_id)->get();

        $Assets=partner::select('Assets.id','Assets.address','Assets.mobile','Assets.share','Assets.name','Assets.capital'
            ,DB::raw('sum(partner_payments.value) as value'))
            ->leftjoin('partner_payments','Assets.id','=','partner_payments.partner_id')
            ->groupBy('Assets.id','Assets.address','Assets.mobile','Assets.name'
            )
            ->where('Assets.business_id', $business_id)->get();

        $totalshare=partner::where('business_id', $business_id)->sum('share');
        $totalcapital=partner::where('business_id', $business_id)->sum('capital');
        $business_data=Business::where('id','=',$business_id)->first();


       return view('Assets::Assets.index',['Assets'=>$Assets,'totalshare'=>$totalshare,'totalcapital'=>$totalcapital,'business_data'=>$business_data]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
      return view('Assets::Assets.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $business_id = request()->session()->get('user.business_id');

        /*if (!(auth()->user()->can('superadmin'))) {
            abort(403, 'Unauthorized action.');
        }*/


        try {
            $data=partner::create([
                'name'    =>$request->name,
                'address' =>$request->address,
                'mobile'  =>$request->mobile,
                'share'   =>$request->share,
                'capital'   =>$request->capital,
                'status'  =>0,
                'business_id'   => $business_id,


            ]);

            $output = [
                'success' => true,
                'msg' => __('lang_v1.success')
            ];
        } catch (Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => __('messages.something_went_wrong')
            ];
        }

        return redirect()->action('\Modules\Assets\Http\Controllers\AssetsController@index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('Assets::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

        if (!auth()->user()->can('assets.view') && !auth()->user()->can('assets.create')) {
            abort(403, 'Unauthorized action.');
        }
        $partner= partner::find($id);
        //dd($asset);
        return view('Assets::Assets.edit',['partner'=>$partner]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = partner::findOrFail($id);

            $data->name=$request->name;
            $data->address=$request->address;
            $data->mobile=$request->mobile;
            $data->share=$request->share;
            $data->capital=$request->capital;
            $data->save();


            $output = [
                'success' => true,
                'msg' => __('lang_v1.success')
            ];
        } catch (Exception $e) {

            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => __('messages.something_went_wrong')
            ];
        }
        return redirect()->action('\Modules\Assets\Http\Controllers\AssetsController@index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {

        $partnr= partner::where('id',$id)->delete();
        $output = ['success' => true,
            'msg' => 'تم حذف الأصل'
        ];

        return $output;
    }
    public function Assets(){
        return view('Assets::Assets');
    }

    public function Assets_pay(){
        return view('Assets::Assets_pay');
    }
    public function Assets_set(){
        return view('Assets::Assets_set');
    }
}
