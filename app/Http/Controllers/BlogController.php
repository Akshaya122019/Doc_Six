<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $active='bloglist';
       return view('admin.blog.list')->with(compact('active')); 
    }
    public function data_all_blog(Request $request)
    {
       if ($request->ajax()) {
       $blogs = blog::select(['id', 'title', 'description','url']);
       return DataTables::of($blogs)
            ->addColumn('action', function ($blogs) {
        return '
         <a href="blog/' . $blogs->id . '" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit!"><i class="fa fa-edit"></i></a>&nbsp;
          <a href="' . route('blog.delete', $blogs->id) . '" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm(\'Are you sure you want to delete this items?\')">
            <i class="fa fa-trash"></i>
        </a>
        ';
    })
            ->rawColumns(['action'])
            ->make(true);
    }
       
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    $active='blogadd';
        return view('admin.blog.create')->with(compact('active')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
      'title'                 => 'required',
      'description'           => 'required',
      'url'                   => 'required|unique:blogs,url',
      'thumbnail'             => 'required|image|mimes:webp|max:2048',
      'author_name'           => 'required',
      'author_image'          => 'required|image|mimes:webp|max:2048',
      'meta_title'            => 'required',
      'meta_description'      => 'required',
      'content'               => 'required',
     ]);

    $blog                        = new Blog();
    $blog->title                 = $request->title;
    $blog->description           = $request->description;
    $blog->url                   = $request->url;
    $blog->author_name           = $request->author_name;
    $blog->meta_title            = $request->meta_title;
    $blog->meta_description      = $request->meta_description;
    $blog->content               = $request->content;
    

    // if ($request->hasFile('thumbnail')) {
    // $file = $request->file('thumbnail');
    // $filename = '1_' . time() . '.' . $file->getClientOriginalExtension();

    // $file->move(public_path('storage/uploads'), $filename);

    
    // $blog->thumbnail = 'storage/uploads/' . $filename;
    // }

    // if ($request->hasFile('author_image')) {
    // $file_2 = $request->file('author_image');
    // $filename_2 = '2_' . time() . '.' . $file_2->getClientOriginalExtension();

   
    // $file_2->move(public_path('storage/uploads'), $filename_2);

    // $blog->author_image = 'storage/uploads/' . $filename_2;
    // }
    if ($request->hasFile('thumbnail')) {
    // Delete old thumbnail if exists
    if ($blog->thumbnail && file_exists(base_path('public_html/' . $blog->thumbnail))) {
        unlink(base_path('public_html/' . $blog->thumbnail));
    }

    $file = $request->file('thumbnail');
    $filename = '1_' . time() . '.' . $file->getClientOriginalExtension();

    $destinationPath = base_path('public_html/storage/uploads');
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    $file->move($destinationPath, $filename);
    $blog->thumbnail = 'storage/uploads/' . $filename;
}

if ($request->hasFile('author_image')) {
    // Delete old author image if exists
    if ($blog->author_image && file_exists(base_path('public_html/' . $blog->author_image))) {
        unlink(base_path('public_html/' . $blog->author_image));
    }

    $file2 = $request->file('author_image');
    $filename2 = '2_' . time() . '.' . $file2->getClientOriginalExtension();

    $destinationPath = base_path('public_html/storage/uploads');
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    $file2->move($destinationPath, $filename2);
    $blog->author_image = 'storage/uploads/' . $filename2;
}

    if ($blog->save()) {
      return redirect()
        ->route('blogs.index')
        ->with('success', 'Blog Created Successfully');
    } else {
      return back()->with('failed', 'Blog Creation Failed');
    }
   }
   public function imageUpload(Request $request)
{
    try {
        Log::info('Image upload request received');

        $request->validate([
            'file' => 'required|image|mimes:webp|max:2048',
        ]);

        $file = $request->file('file');

        if (!$file->isValid()) {
            return response()->json(['error' => 'Invalid file uploaded.'], 400);
        }

        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // ✅ Use correct public_html path
        $uploadPath = base_path('public_html/uploads');

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $file->move($uploadPath, $filename);

        $fullPath = $uploadPath . '/' . $filename;

        // Resize if Intervention is available
        if (class_exists('Intervention\Image\Facades\Image')) {
            try {
                $image = Image::make($fullPath)
                    ->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                $image->save($fullPath, 85);
            } catch (\Exception $e) {
                Log::error('Image resize failed: ' . $e->getMessage());
            }
        }

        // ✅ Correct URL for uploaded file
        $url = asset('uploads/' . $filename);

        return response()->json(['location' => $url]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'error' => 'Validation failed: ' . implode(', ', $e->validator->errors()->all())
        ], 422);
    } catch (\Exception $e) {
        Log::error('Upload failed: ' . $e->getMessage());
        return response()->json(['error' => 'Upload failed: ' . $e->getMessage()], 500);
    }
}
    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     /**
     * Update the specified resource in storage.
     */
    public function edit(Blog $blog,$id)
    {
        $active='bloglist';
        $data = Blog::find($id);
        return view('admin.blog.edit')->with(compact('active','data'));
    }
    public function update(Request $request, $id)
    {
     $blog = Blog::find($id);

    $request->validate([
      'title'                 => 'required',
      'description'           => 'required',
      'author_name'           => 'required',
      'thumbnail'             => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
      'author_image'          => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
      'meta_title'            => 'required',
      'meta_description'      => 'required',
      'content'               => 'required',
    ]);

    $blog->title                 = $request->title;
    $blog->description           = $request->description;
    $blog->url                   = $request->url;
    $blog->author_name           = $request->author_name;
    $blog->meta_title            = $request->meta_title;
    $blog->meta_description      = $request->meta_description;
    $blog->content               = $request->content;
if ($request->hasFile('thumbnail')) {
    // Delete old thumbnail if exists
    if ($blog->thumbnail && file_exists(base_path('public_html/' . $blog->thumbnail))) {
        unlink(base_path('public_html/' . $blog->thumbnail));
    }

    $file = $request->file('thumbnail');
    $filename = '1_' . time() . '.' . $file->getClientOriginalExtension();

    $destinationPath = base_path('public_html/storage/uploads');
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    $file->move($destinationPath, $filename);
    $blog->thumbnail = 'storage/uploads/' . $filename;
}

if ($request->hasFile('author_image')) {
    // Delete old author image if exists
    if ($blog->author_image && file_exists(base_path('public_html/' . $blog->author_image))) {
        unlink(base_path('public_html/' . $blog->author_image));
    }

    $file2 = $request->file('author_image');
    $filename2 = '2_' . time() . '.' . $file2->getClientOriginalExtension();

    $destinationPath = base_path('public_html/storage/uploads');
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    $file2->move($destinationPath, $filename2);
    $blog->author_image = 'storage/uploads/' . $filename2;
}
//    if ($request->hasFile('thumbnail')) {
//     // remove old image if exists
//     if ($blog->thumbnail && file_exists(public_path($blog->thumbnail))) {
//         unlink(public_path($blog->thumbnail));
//     }

//     // upload new image directly into /public/storage/uploads
//     $file = $request->file('thumbnail');
//     $filename = '1_' . time() . '.' . $file->getClientOriginalExtension();
//     $file->move(public_path('storage/uploads'), $filename);

//     // save path relative to public
//     $blog->thumbnail = 'storage/uploads/' . $filename;
//      }

//     if ($request->hasFile('author_image')) {
//     // remove old author image if exists
//     if ($blog->author_image && file_exists(public_path($blog->author_image))) {
//         unlink(public_path($blog->author_image));
//     }

//     // upload new author image
//     $file_2 = $request->file('author_image');
//     $filename_2 = '2_' . time() . '.' . $file_2->getClientOriginalExtension();
//     $file_2->move(public_path('storage/uploads'), $filename_2);

//     // save path relative to public
//     $blog->author_image = 'storage/uploads/' . $filename_2;
//     }

    if ($blog->save()) {
      return redirect()
        ->route('blogs.index')
        ->with('success', 'Blog Updated Successfully');
    } else {
      return back()->with('failed', 'Blog Update Failed');
    }
    }
   
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog, $id)
    {
    $data = Blog::destroy($id);
    Session::flash('successmessage', "Blog Deleted Successfully");
    return redirect()->back();
    }
}
