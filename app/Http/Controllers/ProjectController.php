<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function MongoDB\BSON\toJSON;


class ProjectController extends Controller
{
   public function getroutes(){
       $routeCollection =Route ::getRoutes();


       $output="<table class=' myGridClass' style='text-align: right;margin: auto'>
                    <tr>
                        <th width='10%'>HTTP Method</th>
                        <th width='10%'>Route</th>
                        <th width='10%'>Name</th>
                        <th width='70%'>Corresponding Action</th>
                      </tr>";
       foreach ($routeCollection as $value) {
           $output .="<tr>";
           $output .="<td>" . $value->methods()[0] . "</td>";
           $output .= "<td>" . $value->uri() . "</td>";
           $output .="<td>" . $value->getName() . "</td>";
           $output .="<td>" . $value->getActionName() . "</td>";
           $output .= "</tr>";
       }
       $output .= "</table>";



       return view('projectwork.routes',['output'=>$output]);
   }
}
