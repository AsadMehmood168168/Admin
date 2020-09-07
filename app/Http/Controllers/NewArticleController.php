<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\ArticleAuthorsListModel;
use App\ArticleKeyWordsModel;
use App\APIModel;

class NewArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($journalID, $volumeID)
    {
        return view('AdminPages.Articles.addArticle', ["journal_ID" => $journalID, "volume_ID" => $volumeID]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new ArticleModel();
        $article->setPageNo($request->input('PageNo'));
        $article->setArticleDOI($request->input('ArticleDOI'));
        $article->setArticleType($request->input('ArticleType'));
        $article->setArticleTitle($request->input('ArticleTitle'));
        $article->setAuthors($request->input('Authors'));
        $article->setAffiliation($request->input('Affiliation'));
        $article->setAbstract($request->input('Abstract'));
        $article->setSubmittedDate($request->input('SubmittedDate'));
        $article->setPublishedDate($request->input('PublishedDate'));
        $article->setAcceptedDate($request->input('AcceptedDate'));
        $article->setArticleID($request->input('ArticleDOI'));
        $article->setPDFPath($request->input('PDFPath'));
        $article->setHTMLLink($request->input('HTMLLink'));

        $metaAuthors = array();
        $i = 0;
        foreach ($_POST['MetaAuthors'] as $value) {
            $metaAuthors[$i] = new ArticleAuthorsListModel();
            $metaAuthors[$i]->setAuthorName($value);
            $i++;
        }
        $article->setMetaAuthors($metaAuthors);
        $keyWords = array();
        $x = 0;
        foreach ($_POST['KeyWords'] as $value) {
            $keyWords[$x] = new ArticleKeyWordsModel();
            $keyWords[$x]->setKeyWordBody($value);
            $x++;
        }
        $article->setKeyWords($keyWords);

        $article_content = json_encode($article->jsonSerialize());
        $journalID = $request->input('journalID');
        $volumeID  = $request->input('volumeID');

        print $article_content . "<br>";

        $api = new APIModel();
        $url = 'journals' . '/' . $journalID . '/' . $volumeID;

        $status = $api->insertData($url, $article_content);

        if ($status == '200') {
            return back();
        } else if ($status == '400') {
            return back();
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
        $article_ID = $id;
        $view = 'HTMLFiles' . '.' . $article_ID;
        return view($view);
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
