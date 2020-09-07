<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VolumeModel;
use App\ArticleAuthorsListModel;
use App\ArticleKeyWordsModel;
use App\ArticleModel;
use App\APIModel;

class NewVolumeController extends Controller
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

    public function showVolumeArticles($journalID, $volumeID)
    {
        $api = new APIModel();
        $url = "journals" . "/" . "VolumeArticles" . "/" . $journalID . "/" . $volumeID;
        $article_Data = $api->getData($url);
        return view('AdminPages.Articles.viewVolumeArticles', ["article_Data" => $article_Data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('AdminPages.Volume.addNewVolume', ["journal_ID" => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journalID = $request->input('journalID');


        $volume = new VolumeModel();
        $volume->setIssueYear($request->input('IssueYear'));
        $volume->setIssueID('32645');

        $volume->setIssueNumber('1');

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
        //print $article;
        $volume->setArticles($article);

        $volume_content = json_encode($volume->jsonSerialize());
        $api = new APIModel();
        $url = 'journals' . '/' . $journalID;
        $status = $api->insertData($url, $volume_content);
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
