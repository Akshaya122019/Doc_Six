<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\View\View;
use App\Mail\FormSubmittedMail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $active='form';
       return view('admin.form.list')->with(compact('active')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


   public function store(Request $request)
    {
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|max:255',
        'phone'    => 'required|string|max:20',
        'topic'     => 'nullable|string|max:255',
        'page'     => 'nullable|string|max:255',
        'file'     => 'nullable|file|mimes:pdf|max:2048',
        'file2'     => 'nullable|file|mimes:pdf|max:2048',
        'message'  => 'nullable|string|max:1000',
    ]);

    try {
        $phone = $request->country_code . $request->phone;

        $form = new Form();
        $form->name  = $request->name;
        $form->mail  = $request->email;
        $form->phone = $phone;
        $form->topic = $request->topic;

        $filePath = null;
        $filename = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/uploads/forms'), $filename);
            $form->file = 'storage/uploads/forms/' . $filename;
        }
        $filename2 = null;

        if ($request->hasFile('file2')) {
            $file2 = $request->file('file2');
            $filename2 = time() . '_file2_' . $file2->getClientOriginalName();
            $file2->move(public_path('storage/uploads/forms'), $filename2);
            $form->file2 = 'storage/uploads/forms/' . $filename2;
        }

        $form->message = $request->message;
        $form->page    = $request->page;
        $form->save();

        // $formData = array_map(function ($value) {
        //     return is_string($value) ? $value : ($value ?? '');
        // }, $formData);

        // Prepare data for email
        $formData = [
            'name'    => $request->name,
            'mail'    => $request->email,
            'phone'   => $phone,
            'file'    => $form->file ?? null,
            'file2'   => $form->file2 ?? null,
            'message' => $request->message,
            'page'    => $request->page,
        ];

        if (!empty($request->topic)) {
            $formData['topic'] = $request->topic;
        }

        $attachments = [];

        if ($filename) {
            $attachments[] = public_path('storage/uploads/forms/' . $filename);
        }

        if ($filename2) {
            $attachments[] = public_path('storage/uploads/forms/' . $filename2);
        }

        $formData = array_map(function ($value) {
            return is_string($value) ? $value : ($value ?? '');
        }, $formData);

        Mail::to('support@doc-six.com')->send(new FormSubmittedMail($formData, $attachments));
        return redirect()->back()->with('success', 'Form submitted successfully');
    } catch (\Exception $e) {
        \Log::error('Form submission failed: ' . $e->getMessage());

        return redirect()->back()->with('error', $e->getMessage());
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }
    public function data_all_form(Request $request)
   {
    if ($request->ajax()) {
        $form = Form::select(['id', 'name', 'mail', 'phone', 'message', 'page', 'file']); 

        return DataTables::of($form)
          ->addColumn('download', function ($form) {
    if ($form->file) {
        $url = asset($form->file); 
        return '<a href="'.$url.'" class="btn btn-sm btn-success" target="_blank">
                    <i class="fa fa-download"></i> PDF
                </a>';
    }
    return '<span class="badge bg-secondary">No File</span>';
})


            ->addColumn('action', function ($form) {
                return '
                    <a href="' . route('form.delete', $form->id) . '" 
                       class="btn btn-sm btn-danger" 
                       title="Delete" 
                       onclick="return confirm(\'Are you sure you want to delete this item?\')">
                        <i class="fa fa-trash"></i>
                    </a>
                ';
            })
            ->rawColumns(['download','action'])
            ->make(true);
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form,$id)
    {
      $data = Form::destroy($id);
      Session::flash('successmessage', "Form Deleted Successfully");
      return redirect()->back();
    }
}
