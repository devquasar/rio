<?php

namespace App\Http\Controllers\All;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Fact;
use App\Models\Work;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;

class BasePublicController extends Controller
{
    public function documentsDownload($id)
    {
        $document = Document::find($id);
        return Storage::download($document->href);
    }
    public function getTwoLastRecords()
    {
        $documents = Document::all();
        $last = Work::latest()->take(2)->get();
        $fact = Fact::inRandomOrder()->limit(1)->get();
        $news = News::take(5)->get();
        return view('home', ['last' => $last->all(), 'fact' => $fact->first(), 'documents' => $documents, 'news' => $news]);
    }
    public function allWorks()
    {
        $works = Work::all();
        return view('user.works', compact('works'));
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function publisher()
    {
        return view('user.publisher');
    }
    public function isbnForm()
    {
        return view('user.isbn');
    }
    public function isbnFormSubmit(Request $request)
    {
        $templateProcessor = new TemplateProcessor('word-template/isbn.docx');
        $templateProcessor->setValue('title', $request->input('title'));
        $templateProcessor->setValue('author', $request->input('author'));
        $templateProcessor->setValue('address', $request->input('address'));
        $templateProcessor->setValue('pages', $request->input('pages'));
        $templateProcessor->setValue('count', $request->input('count'));
        $templateProcessor->setValue('date', $request->input('date'));
        $fileName = $request->input('title');
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);

    }
}
