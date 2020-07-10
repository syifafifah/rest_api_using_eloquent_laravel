<?php

namespace App\Http\Controllers;

use App\Menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Menus::all();

        if (count($data)>0) {
            $res['message'] = 'Success';
            $res['data'] = $data;

            return response($res);
        } else {
            $res['message'] = 'Empty';

            return response($res);
        }
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
        $category = $request->input('category');
        $name = $request->input('name');
        $desc = $request->input('desc');
        $prize = $request->input('prize');

        $data = new \App\Menus();
            $data->category = $category;
            $data->name = $name;
            $data->desc = $desc;
            $data->prize = $prize;

        if ($data->save()) {
            $res['message'] = 'Success';
            $res['data'] = $data;

            return response($res);
        } else {
            $res['message'] = 'Failed';

            return response($res);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Menus::where('id', $id)->get();

        if (count($data)>0) {
            $res['message'] = 'Success';
            $res['data'] = $data;

            return response($res);
        } else {
            $res['message'] = 'Failed';

            return response($res);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function edit(Menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = $request->input('category');
        $name = $request->input('name');
        $desc = $request->input('desc');
        $prize = $request->input('prize');

        $data = \App\Menus::where('id', $id)->first();
            $data->category = $category;
            $data->name = $name;
            $data->desc = $desc;
            $data->prize = $prize;

        if ($data->save()) {
            $res['message'] = 'Menu updated';
            $res['data'] = $data;

            return response($res);
        } else {
            $res['message'] = 'Failed';

            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Menus::where('id', $id)->first();

        if ($data->delete()) {
            $res['message'] = 'Menu deleted';
            $res['data'] = $data;

            return response($res);
        } else {
            $res['message'] = 'Failed';

            return response($res);
        }
    }
}
