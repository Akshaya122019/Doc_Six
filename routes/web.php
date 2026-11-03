<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/clear-cache', function () {
  $exitCode = Artisan::call('optimize');
  // return what you want
});
// Home
Route::get('/', [WebsiteController::class,'Home'])->name('home');
Route::get('/home', [WebsiteController::class,'Home'])->name('home');
//! Services
// Research Services
Route::get('/thesis-writing-services', [WebsiteController::class,'thesisWriting'])->name('thesis-writing');
Route::get('/thesis-writing', function() {
    return redirect("/thesis-writing-services", 301);
});
Route::get('/research-proposal-writing', [WebsiteController::class,'researchProposal'])->name('research-proposal-writing');
Route::get('/research-proposal', function() {
    return redirect("/research-proposal-writing", 301);
});
Route::get('/topic-selection', [WebsiteController::class, 'topicSelection'])->name('topic-selection');
Route::get('/dissertation-writing-services', [WebsiteController::class, 'dissertationWriting'])->name('dissertation-writing');
Route::get('/dissertation-writing', function () {
    return redirect('/dissertation-writing-services', 301);
});
Route::get('/phd-dissertation-full', function () {
    return redirect('/dissertation-writing', 301);
});
Route::get('/phd-dissertation-part', function () {
    return redirect('/dissertation-writing', 301);
});
Route::get('/research-methodology', [WebsiteController::class,'researchMethodology'])->name('research-methodology');
Route::get('/literature-review-writing', [WebsiteController::class,'literatureReview'])->name('literature-review-writing');
Route::get('/literature-review', function () {
    return redirect('/literature-review-writing', 301);
});
Route::get('/synopsis-writing', [WebsiteController::class,'synopsisWriting'])->name('synopsis-writing');
Route::get('/review-paper-writing', [WebsiteController::class,'reviewPaperWriting'])->name('review-paper-writing');
Route::get('/research-paper-writing', [WebsiteController::class,'researchPaperWriting'])->name('research-paper-writing');
Route::get('/conference-paper-writing', [WebsiteController::class,'conferencePaperWriting'])->name('conference-paper-writing');
Route::get('/research-implementation', [WebsiteController::class,'researchImplementation'])->name('research-implementation');

// Academic Help
Route::get('/proofreading-and-editing', [WebsiteController::class,'proofreading'])->name('proofreading-and-editing');
Route::get('/plagiarism-removal-service', [WebsiteController::class,'plagiarismRemoval'])->name('plagiarism-removal-service');
Route::get('/grammar-check', [WebsiteController::class,'grammarCheck'])->name('grammar-check');
Route::get('/data-analysis-assignment', [WebsiteController::class,'dataAnalysis'])->name('data-analysis-assignment');
Route::get('/data-analysis', function () {
    return redirect('/data-analysis-assignment', 301);
});

// Journal Support
Route::get('/journal-paper-publication', [WebsiteController::class,'journalPaperPublication'])->name('journal-paper-publication');
Route::get('/scopus-journal', [WebsiteController::class, 'scopusJournal'])->name('scopus-journal');
Route::get('/scopus-journal-publication', function () {
    return redirect('/scopus-journal', 301);
});
Route::get('/sci-indexed-journal', [WebsiteController::class, 'sciEsciJournal'])->name('sci-indexed-journal');
Route::get('/sci-esci-journal-support', function () {
    return redirect('/sci-indexed-journal', 301);
});
Route::get('/ugc-journal', [WebsiteController::class, 'ugcAssistance'])->name('ugc-journal');
Route::get('/ugc-care-journal-assistance', function () {
    return redirect('/ugc-journal', 301);
});
Route::get('/web-of-science-indexed-journals', [WebsiteController::class, 'webScience'])->name('web-of-science-indexed-journals');
Route::get('/web-of-science', function () {
    return redirect('/web-of-science-indexed-journals', 301);
});
Route::get('/q1-journal', [WebsiteController::class,'q1Journal'])->name('q1-journal');

// Resources
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/blog/{url}', [WebsiteController::class,'viewBlog'])->name('website-show-blog');
Route::get('/faqs', [WebsiteController::class, 'faqs'])->name('faqs');
Route::get('/faq', function () {
    return redirect('/faqs', 301);
});

// Coursework Assistance
Route::get('/coursework-assistance', [WebsiteController::class, 'phdCoursework'])->name('coursework-assistance');
Route::get('/phd-coursework-assistance', function () {
    return redirect('/coursework-assistance', 301);
});

// About
Route::get('/about', [WebsiteController::class, 'about'])->name('about');

// Contact
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

//! 404 Redirects
Route::get('/not-found', [WebsiteController::class,'notFound'])->name('notFound');
Route::get('/plagiarism-report', function () { return redirect('/not-found', 301); });
Route::get('/language-polishing', function () { return redirect('/not-found', 301); });
Route::get('/plagiarism-checking', function () { return redirect('/not-found', 301); });
Route::get('/matlab-and-simulink-support', function () { return redirect('/not-found', 301); });
Route::get('/java-support', function () { return redirect('/not-found', 301); });
Route::get('/ns2-and-ns3-support', function () { return redirect('/not-found', 301); });
Route::get('/python-support', function () { return redirect('/not-found', 301); });

Route::get('/university-information', function () { return redirect('/not-found', 301); });
Route::get('/research-guide', function () { return redirect('/not-found', 301); });

Route::get('/thesis-and-dissertation-writing', function () { return redirect('/not-found', 301); });
Route::get('/conceptual-framework', function () { return redirect('/not-found', 301); });
Route::get('/theoretical-framework', function () { return redirect('/not-found', 301); });
Route::get('/annotated-bibliography', function () { return redirect('/not-found', 301); });
Route::get('/gap-identification', function () { return redirect('/not-found', 301); });

//journal support
Route::get('/manuscript-formatting', function () { return redirect('/not-found', 301); });
Route::get('/annexure-journal-publication-support', function () { return redirect('/not-found', 301); });

//resources
Route::get('/research-guidance-tips', function () { return redirect('/not-found', 301); });
Route::get('/academic-glossary', function () { return redirect('/not-found', 301); });

//coursework
Route::get('/assignments', function () { return redirect('/not-found', 301); });
Route::get('/synopsis-preparation', function () { return redirect('/not-found', 301); });
Route::post('/form-store', [FormController::class, 'store'])->name('form.store');


//login
Route::group(['prefix' => 'admin', 'name' => 'admin'], function () {
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::middleware(['auth', 'is-active'])->group(function () {
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
Route::get('adduser', [AuthController::class, 'adduser'])->name('adduser');
Route::post('/post-registration', [AuthController::class, 'userCreate'])->name('user.add');
Route::get('/all_user', [LoginController::class, 'all_user'])->name('all_user');
 
// User AJAX Data
Route::get('/data-all-user', [LoginController::class, 'data_all_user'])->name('data_all_user');
Route::get('user/{id}', [LoginController::class, 'destroy'])->name('user.delete');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('blogs', BlogController::class);
Route::post('/image-upload', [BlogController::class, 'imageUpload'])->name('image-upload');
// blog AJAX Data
Route::get('/data-all-blog', [BlogController::class, 'data_all_blog'])->name('data_all_blog');
Route::get('blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('update-blog/{id}', [Blogcontroller::class, 'update'])->name('update-blog');
Route::get('blog_delete/{id}', [Blogcontroller::class, 'destroy'])->name('blog.delete');
Route::resource('form', FormController::class);
// form AJAX Data
Route::get('/data-all-form', [FormController::class, 'data_all_form'])->name('data_all_form');
Route::get('form_delete/{id}', [FormController::class, 'destroy'])->name('form.delete');

});
});

Route::any('index.php/{any?}', function (Request $request, $any = null) {
    $path = $any ? '/'.ltrim($any, '/') : '/';

    // keep query string if present
    $qs = $request->getQueryString();
    $target = $qs ? $path.'?'.$qs : $path;

    return redirect($target, 301);
})->where('any', '.*');
Route::fallback(function () {
    return redirect('/');
});