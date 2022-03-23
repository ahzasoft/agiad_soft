<?php

namespace Modules\Assets\Http\Controllers;
use App\Category;
use App\User;
use App\Utils\ModuleUtil;
use App\Utils\TransactionUtil;
use Illuminate\Routing\Controller;
use Menu;
use Modules\Essentials\Entities\EssentialsTodoComment;
use Modules\Essentials\Entities\DocumentShare;
use Illuminate\Support\Facades\DB;
use Modules\Essentials\Entities\ToDo;
use Modules\Essentials\Entities\EssentialsHoliday;
use Modules\Essentials\Entities\EssentialsLeave;
use Modules\Essentials\Entities\Reminder;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
	 
	 public function superadmin_package()
    {
        return [
            [
                'name' => 'Assets_module',
                'label' =>   __('assets::lang.assets_module'),
                'default' => false
            ]
        ];
    }
	 
    public function index()
    {
        return view('Assets::index');
    }


    public function modifyAdminMenu()
    {


        $background_color = '#fff !important';

//dd(request()->segment(1));


        if(auth()->user()->can('assets.view')){
              Menu::modify('admin-sidebar-menu', function ($menu) use ($background_color) {
                $menu->url(
                    action('\Modules\Assets\Http\Controllers\AssetsController@index'),
                    __('assets::lang.assets'),
                    ['icon' => 'fa fas fa-user', 'active' => request()->segment(1) == 'Assets']
                )
                    ->order(6);
            });
        }






        }

    public function user_permissions()
    {
        return [
            [
                'value' => 'assets.view',
                'label' =>  __('assets::lang.assets_view'),
                'default' => false
            ],
            [
                'value' => 'assets.create',
                'label' =>  __('assets::lang.assets_create'),
                'default' => false
            ],
            [
                'value' => 'assets.delete',
                'label' =>  __('assets::lang.assets_delete'),
                'default' => false
            ],
            [
                'value' => 'assets.edit',
                'label' => __('assets::lang.assets_edit'),
                'default' => false
            ],

        ];
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('Assets::create');
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
        return view('Assets::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('Assets::edit');
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
