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
        $url = "Maxjournals" . "/" . "volumeArticles" . "/" . $journalID . "/" . $volumeID;
        $article_Data = $api->getData($url);
        $data = "<h2>Header 2</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel lacinia nulla.<p>";
        return view('AdminPages.Articles.viewVolumeArticles', ["data" => $data]);
        // return view('AdminPages.Articles.viewVolumeArticles', ["article_Data" => $article_Data]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $api = new APIModel();
        $url = "Maxjournals" . "/" . $id;
        $journal_Data = $api->getData($url);
        $volArray = array();
        if (isset($journal_Data)) {
            $volArray = $journal_Data->volumes;
        }
        $volCount = count($volArray);
        return view('AdminPages.Volume.addNewVolume', ["journal_ID" => $id, "volCount" => $volCount]);
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
        $volume->setVolumeYear($request->input('volumeYear'));
        $volume->setVolumeNumber($request->input('volCount'));
        $volume->setVolumeID($journalID, $volume->getVolumeNumber());

        $article = new ArticleModel();
        $article->setPageNo($request->input('pageNo'));
        $article->setArticleDOI($volume->getVolumeID(), $article->getPageNo());

        $article->setArticleID($request->input('articleID'));
        $article->setArticleType($request->input('articleType'));
        $article->setArticleTitle($request->input('articleTitle'));
        $article->setAffiliation($request->input('affiliation'));
        $article->setAbstract($request->input('abstract'));
        $article->setSubmittedDate($request->input('submittedDate'));
        $article->setAcceptedDate($request->input('acceptedDate'));
        $article->setPublishedDate($request->input('publishedDate'));

        $authors = array();
        $i = 0;
        foreach ($_POST['authors'] as $value) {
            $authors[$i] = new ArticleAuthorsListModel();
            $authors[$i]->setAuthorName($value);
            $i++;
        }

        $article->setAuthors($authors);

        $keyWords = array();
        $x = 0;
        foreach ($_POST['keyWords'] as $value) {
            $keyWords[$x] = new ArticleKeyWordsModel();
            $keyWords[$x]->setKeyWordBody($value);
            $x++;
        }
        $article->setKeyWords($keyWords);
        $volume->setArticles($article);
        $volume_content = json_encode($volume->jsonSerialize());
        print $volume_content;

        $api = new APIModel();
        $url = 'Maxjournals' . '/' . $journalID;
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
