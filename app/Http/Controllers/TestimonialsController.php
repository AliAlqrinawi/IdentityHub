<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimonial::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('avatar', function ($row) {
                    $avatar = '<img src="' . asset('/') . $row->avatar . '" alt="avatar" width="50" height="50">';
                    return $avatar;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'ACTIVE') {
                        $status = '<button class="modal-effect btn btn-sm btn-success" style="margin: 5px" id="status" data-id="' . $row->id . '" ><i class=" icon-check"></i></button>';
                    } else {
                        $status = '<button class="modal-effect btn btn-sm btn-danger" style="margin: 5px" id="status" data-id="' . $row->id . '" ><i class=" icon-check"></i></button>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<button class="modal-effect btn btn-sm btn-info"  style="margin: 5px" id="showModalEditTestimonial" data-id="' . $row->id . '"><i class="las la-pen"></i></button>';
                    $btn = $btn . '<button class="modal-effect btn btn-sm btn-danger" id="showModalDeleteTestimonial" data-name="' . $row->name . '" data-id="' . $row->id . '"><i class="las la-trash"></i></button>';
                    return $btn;
                })
                ->rawColumns([
                    'avatar' => 'avatar',
                    'status' => 'status',
                    'action' => 'action',
                ])
                ->make(true);
        }
        return view('dashboard.views-dash.testimonial.index');
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
        $testimonialData = $request->all();
        $validator = Validator($testimonialData, [
            'name' => 'required|string|min:3|max:255',
            'job_title' => 'required|string|min:3|max:255',
            'message' => 'required|string|min:3|max:255',
            'avatar' => 'required|image',
            'status' => 'required|in:ACTIVE,NACTIVE',
        ]);
        if (!$validator->fails()) {
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarName = time() . '_' . '.' . $avatar->getClientOriginalExtension();
                $avatar->move(public_path('image'), $avatarName);
                $testimonialData['avatar'] = 'image/' . $avatarName;
            }
            $testimonial = Testimonial::create($testimonialData);
                $response = [
                    'message' => 'Added successfully',
                    'status' => 200,
                ];
                return ControllersService::responseSuccess($response);
        } else {
            $response = [
                'message' => $validator->getMessageBag()->first(),
                'status' => 400,
            ];
            return ControllersService::responseErorr($response);
        }
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
        $testimonial = Testimonial::find($id);
        if($testimonial){
            $response = [
                'message' => 'Found Data',
                'status' => 200,
                'data' => $testimonial
            ];
            return ControllersService::responseSuccess($response);
        }else{
            $response = [
                'message' => 'Not Found Data',
                'status' => 400,
            ];
            return ControllersService::responseErorr($response);
        }
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
        $testimonialData = $request->all();
        $validator = Validator($testimonialData, [
            'name' => 'required|string|min:3|max:255',
            'job_title' => 'required|string|min:3|max:255',
            'message' => 'required|string|min:3|max:255',
            'avatar' => 'nullable|image',
            'status' => 'required|in:ACTIVE,NACTIVE',
        ]);
        if (!$validator->fails()) {
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarName = time() . '_' . '.' . $avatar->getClientOriginalExtension();
                $avatar->move(public_path('image'), $avatarName);
                $testimonialData['avatar'] = 'image/' . $avatarName;
            }
            $testimonial = Testimonial::find($id)->update($testimonialData);
                $response = [
                    'message' => 'Added successfully',
                    'status' => 200,
                ];
                return ControllersService::responseSuccess($response);
        } else {
            $response = [
                'message' => $validator->getMessageBag()->first(),
                'status' => 400,
            ];
            return ControllersService::responseErorr($response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        if($testimonial){
            $testimonial->delete();
            $response = [
                'message' => 'Deleted successfully',
                'status' => 200,
            ];
            return ControllersService::responseSuccess($response);
        }else{
            $response = [
                'message' => 'Not Found Data',
                'status' => 400,
            ];
            return ControllersService::responseErorr($response);
        }
    }

    public function status($id)
    {
        $testimonial = Testimonial::find($id);
        if($testimonial){
            $testimonial->changeStatus();
            $response = [
                'message' => 'Updated successfully',
                'status' => 200,
            ];
            return ControllersService::responseSuccess($response);
        }else{
            $response = [
                'message' => 'Not Found Data',
                'status' => 400,
            ];
            return ControllersService::responseErorr($response);
        }
    }
}
