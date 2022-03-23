<?php

namespace Modules\Assets\Http\Controllers;

use App\Account;
use App\BusinessLocation;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Assets\Entities\Asset;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('assets.view') || !auth()->user()->can('assets.create') || !auth()->user()->can('assets.edit')) {
            abort(403, 'Unauthorized action.');
        }
     $status=array(__('assets::lang.asset_Existing'),__('assets::lang.asset_consumed'),__('assets::lang.asset_sold'),__('assets::lang.asset_missing'));
     $business_id = request()->session()->get('user.business_id');
            $currentyear=Carbon::now()->year;
               if(request()->ajax()){

                   $assets=DB::table('assets')->select('assets.*',
                       DB::raw('assets.curentprice+assets.type*(YEAR(CURDATE())- YEAR(assets.changedate))*assets.consume_rate/100*assets.curentprice
                            as currentvalue'),'business_locations.name')
                       ->join('business_locations','assets.location_id','=','business_locations.id')
                       ->where('assets.business_id', $business_id)
                       ->where(function($query) use($request){
                           if($request->location_id)
                               $query->where('assets.location_id','=',request()->location_id);
                         })
                       ->where(function($query) use($request){
                           if($request->status>-1)
                               $query->where('assets.status','=',request()->status);
                       })
                       ->where(function($query) use($request){
                           if($request->search !=='')
                               $query->where('assets.description','like','%'.request()->search.'%');
                               $query->where('assets.assetcode','like','%'.request()->search.'%');
                       })
                      
                       ->get();

                    $total=0;
                    $out='';
                        foreach($assets as $asset){
                              if($asset->status==0 && $asset->currentvalue>0)
                               $total+=$asset->currentvalue ;
                          $out .='<tr id="'.$asset->id.'">
                                  <td>'.$asset->assetcode.'</td>
                                  <td>'.$asset->name.'</td>
                                  <td>'.$asset->quantity.'</td>
                                  <td>'.$asset->description.'</td>
                                  <td>'.$asset->purchasedate.'</td>
                                  <td>';
                                   if($asset->type==1)
                                       $out .=  __('assets::lang.asset_type_up');
                                    else
                                        $out .=  __('assets::lang.asset_type_consumed');

                            $out .= ' </td>
                                     <td>'.$asset->consume_rate.'%</td>
                                     <td>'.number_format($asset->curentprice,2).'</td>
                                     <td>'.$asset->changedate.'</td>
                                     <td>';
                                   if($asset->status==0) {
                                       if ($asset->currentvalue > 0)
                                           $out .= number_format($asset->currentvalue, 2);
                                       else
                                           $out .= '00.00';
                                        }
                            $out .='</td>
                                   <td>'.$status[$asset->status].'</td>
                                   <td>'.$asset->notes.'</td>
                                   <td>';
                                    if ( auth()->user()->can('assets.edit') ){
                                          $out .=' <button onclick="assetedit('.$asset->id.')"  class="btn btn-xs btn-primary btn-modal"><i class="glyphicon glyphicon-edit"></i>'. __('messages.edit').'</button>
                                              <button onclick="deleteasset('.$asset->id.')" class="btn btn-xs btn-danger delete_asset_button"><i class="glyphicon glyphicon-trash"></i>'.__('messages.delete').'</button>';
                                         }
                            $out .='</td>
                                    </tr>';

                       }

                       return $out;

            }

            $price=Asset::where('business_id', $business_id)->where('status','<',3)->sum('price');
            $curentprice=Asset::where('business_id', $business_id)->where('status','<',3)->sum('curentprice');

        $business_locations = BusinessLocation::forDropdown($business_id,true);

       return view('assets::assets.index',['business_locations'=>$business_locations,'price'=>$price,'curentprice'=>$curentprice]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        if ( !auth()->user()->can('assets.create') ) {
            abort(403, 'Unauthorized action.');
        }
        $business_id = request()->session()->get('user.business_id');
        $business_locations = BusinessLocation::forDropdown($business_id);
        $accounts =Account::forDropdown($business_id, true, false, true);
        return view('assets::assets.create',['business_locations'=>$business_locations,'accounts'=>$accounts]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ( !auth()->user()->can('assets.create') ) {
            abort(403, 'Unauthorized action.');
        }
        $business_id = request()->session()->get('user.business_id');

        /*if (!(auth()->user()->can('superadmin'))) {
            abort(403, 'Unauthorized action.');
        }*/


        try {
            $data=Asset::create([
                'assetcode'     =>$request->assetcode,
                'description'   =>$request->description,
                'purchasedate'  =>$request->purchasedate,
                'price'         =>$request->price,
                'curentprice'   =>$request->curentprice,
                'changedate'    =>$request->changedate,
                'status'    =>$request->status,
                'business_id'   => $business_id,
                'quantity'=>$request->quantity,
                'location_id'=>$request->location_id,
                'type'=>$request->type,
                'consume_rate'=>$request->consume_rate,

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
        if ( !auth()->user()->can('assets.edit') ) {
            abort(403, 'Unauthorized action.');
        }
        if (!auth()->user()->can('assets.view') && !auth()->user()->can('assets.create')) {
            abort(403, 'Unauthorized action.');
        }
        $business_id = request()->session()->get('user.business_id');
        $business_locations = BusinessLocation::forDropdown($business_id);
        $accounts =Account::forDropdown($business_id, true, false, true);
        if(!empty($id))
        $asset= Asset::find($id);
        else
            $asset=new Asset();
        //dd($asset);
      return view('assets::assets.edit',['asset'=>$asset,'business_locations'=>$business_locations,'accounts'=>$accounts,'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if ( !auth()->user()->can('assets.edit') ) {
            abort(403, 'Unauthorized action.');
        }
        try {
            $data = Asset::findOrFail($id);

                $data->assetcode=$request->assetcode;
                $data->description=$request->description;
                $data->purchasedate=$request->purchasedate;
                $data->price=$request->price;
                $data->curentprice=$request->curentprice;
                $data->changedate=$request->changedate;
                $data->status=$request->status;
                $data->quantity=$request->quantity;
                $data->location_id=$request->location_id;
                $data->type=$request->type;
                $data->notes=$request->notes;
                $data->consume_rate=$request->consume_rate;
$data->save();

// save data in archive



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
        if ( !auth()->user()->can('assets.edit') ) {
            abort(403, 'Unauthorized action.');
        }
        $asset= Asset::where('id',$id)->delete();
        $output = ['success' => true,
            'msg' => 'تم حذف الأصل'
        ];

        return $output;
    }

    public function consumed(){

    }
}
