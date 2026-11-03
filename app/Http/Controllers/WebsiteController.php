<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class WebsiteController extends Controller
{
    public function Home()
    {
        return view('web.home');
    }
    public function thesisWriting()
    {
        return view('web.thesis-writing');
    }
     public function researchProposal()
    {
        return view('web.research-proposal');
    }
     public function literatureReview()
    {
        return view('web.literature-review');
    }
     public function synopsisWriting()
    {
        return view('web.synopsis-writing');
    }
    public function researchMethodology()
    {
        return view('web.research-methodology');
    }
    public function researchPaperWriting()
    {
        return view('web.research-paper');
    }
    public function reviewPaperWriting()
    {
        return view('web.review-paper');
    }
    public function conferencePaperWriting()
    {
        return view('web.conference-paper');
    }
     public function proofreading()
    {
        return view('web.proofreading');
    }
     public function plagiarismReport()
    {
        return view('web.plagiarism');
    }
     public function grammarCheck()
    {
        return view('web.grammar');
    }
     public function languagePolishing()
    {
        return view('web.language');
    }
    public function plagiarismChecking()
    {
        return view('web.plagiarism-checking');
    }
    public function plagiarismRemoval() 
    {
        return view('web.plagiarism-removal-service');
    }
    public function dataAnalysis()
    {
        return view('web.data-analysis');
    }
     public function researchImplementation()
    {
        return view('web.research-implementation');
    }
     public function matlab()
    {
        return view('web.matlab');
    }
     public function javaSupport()
    {
        return view('web.java-support');
    }
    public function nsSupport()
    {
        return view('web.ns2-support');
    }
    public function pythonSupport()
    {
        return view('web.python-support');
    }
     public function topicSelection()
    {
        return view('web.topic-selection');
    }
     public function universityInformation()
    {
        return view('web.university-information');
    }
     public function researchGuide()
    {
        return view('web.research-guide');
    }
     public function phdDissertation()
    {
        return view('web.dissertation-writing-services');
    }
    public function phdDissertationPart()
    {
        return view('web.dissertation-writing-services');
    }
    public function dissertationWriting()
    {
        return view('web.dissertation-writing-services');
    }
    public function thesisDissertationWriting()
    {
        return view('web.thesis-dissertation-writing');
    }
    public function ConceptualFramework()
    {
        return view('web.conceptual-framework');
    }
    public function theoreticalFramework()
    {
        return view('web.theoretical-framework');
    }
    public function annotatedBibliography()
    {
        return view('web.annotated-bibliography');
    }
     public function gapIdentification()
    {
        return view('web.gap-identification');
    }
     public function scopusJournal()
    {
        return view('web.scopus-journal-publication');
    }
     public function sciEsciJournal()
    {
        return view('web.sci-esci-journal');
    }
     public function ugcAssistance()
    {
        return view('web.ugc-care');
    }
    public function manuscriptFormatting()
    {
       return view('web.manuscript-formatting');
    }
    public function annexureSupport()
    {
       return view('web.annexure-journal');
    }
     public function webScience()
    {
       return view('web.web-of-science');
    }
     public function blog()
    {
      $blogs = Blog::orderBy('id', 'desc')->get();
       return view('web.blog')->with(compact('blogs'));
    }
     public function viewBlog($url)
    {
    if (empty($url)) {
      return redirect()->route('blog');
    }
    //if (Auth::check()) {
      $blog = Blog::where('url', $url)->first();
      return view('web.blog-view')->with(compact('blog'));
   // }
 }
     public function faqs()
    {
       return view('web.faqs');
    }
     public function researchGuidance()
    {
       return view('web.research-guidance');
    }
    public function academicGlossary()
    {
       return view('web.academic-glossary');
    }
     public function phdCoursework()
    {
       return view('web.phd-coursework-assistance');
    }
    public function assignments()
    {
       return view('web.assignments');
    }
    public function synopsisPreparation()
    {
       return view('web.synopsis-preparation');
    }
     public function about()
    {
       return view('web.about');
    }
     public function contact()
    {
       return view('web.contact');
    }
    public function notFound()
    {
       return view('web.404');
    }
    public function journalPaperPublication()
    {
       return view('web.under-construction');
    }
    public function q1Journal()
    {
       return view('web.under-construction');
    }
    public function underConstruction() {
        return view('web.under-construction');
    }
}

