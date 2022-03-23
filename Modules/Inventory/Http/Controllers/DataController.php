<?php

namespace Modules\Inventory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Utils\ModuleUtil;
use Menu;
class DataController extends Controller
{

    public function superadmin_package()
    {
        return [
            [
                'name' => 'inventory_module',
                'label' => "inventory_Label",
                'default' => false
            ]
        ];
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public function modifyAdminMenu()
    {

        $business_id = session()->get('user.business_id');
        $module_util = new ModuleUtil();
        $background_color = '#fff !important';
        $is_mfg_enabled = (boolean)$module_util->hasThePermissionInSubscription($business_id, 'inventory_module');
        if ($is_mfg_enabled){
            if(auth()->user()->can('inventory_view')){
                Menu::modify('admin-sidebar-menu', function ($menu) use ($background_color) {
                   $menu->dropdown(
                       __('inventory::lang.inventory'),
                       function ($sub) {
                           if (auth()->user()->can('stocktacking.view')) {
                               $sub->url(
                                   action('\Modules\Inventory\Http\Controllers\InventoryController@index'),
                                   __('inventory::lang.inventory'),
                                   ['icon' => 'fa fas fa-user', 'active' => request()->segment(1) == 'inventory']
                               );
                           }

                           if (auth()->user()->can('stocktacking.create')) {
                               $sub->url(
                                   action('\Modules\Inventory\Http\Controllers\InventoryController@create'),
                                   __('inventory::lang.Inventory_add'),
                                   ['icon' => 'fa fas fa-plus-circle', 'active' => request()->segment(1) == 'stocktacking' && request()->segment(2) == 'create']
                               );
                           }
                       },

                       ['icon' => 'fa fas fa-users-cog', 'style' => 'background-color: #fdfdfd !important;']
                   )->order(35);

                });
            }
        }

    }

    public function index()
    {
        return view('inventory::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('inventory::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
