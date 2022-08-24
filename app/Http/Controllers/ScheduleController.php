<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $data = Event::all();
        if ($request->ajax()){
            return response()->json($data);
        }
        return view('pages.schedule-page.schedule');
//        return view('pages.fullcalendar', compact(['data']));
    }


    public function ajax(Request $request)
    {
//        return  $request;
        $event = null;

        if($request->type == 'add'){
            $event = Event::create([
                'employee_id' => 1,
                'title' => $request->title,
                'data'=>$request->title,
                'time'=>'20:14:42',
                'description'=>$request->title
            ]);
        }
        else if($request->type == 'update'){
            $event = Event::find($request->id)->update([
                'employee_id' => 1,
                'title' => $request->title,
                'data'=>$request->title,
                'time'=>'20:14:42',
                'description'=>$request->title
            ]);
        }else if($request->type == 'delete'){
            $event = Event::find($request->id)->delete();
        }

        return response()->json($event);

//        switch ($request->type) {
//
//            case 'add':
//                $event = Event::create([
//                    'title' => $request->title,
//                    'data'=>$request->data,
//                    'time'=>$request->time,
//                    'description'=>$request->description
//                ]);
//
//                return response()->json($event);
//                break;
//
//            case 'update':
//                $event = Event::find($request->id)->update([
//                    'title' => $request->title,
//                    'data'=>$request->data,
//                    'time'=>$request->time,
//                    'description'=>$request->description
//                ]);
//
//                return response()->json($event);
//                break;
//
//            case 'delete':
//                $event = Event::find($request->id)->delete();
//                return response()->json($event);
//                break;
//            default:
//                break;
//        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.schedule-page.createEvent');
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
