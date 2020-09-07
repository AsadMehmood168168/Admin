<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JournalModel;
use App\APIModel;

class NewJournalController extends Controller
{
    public function index()
    {
    }
    public function showJournalVolumes($id)
    {
        $api = new APIModel();
        $url = 'journals' . '/' . 'Volumes' . '/' . $id;
        $volume_Data = $api->getData($url);
        return view('AdminPages.Volume.showJournalVolumes', ["volume_Data" => $volume_Data, "journal_ID" => $id]);
    }
    public function create()
    {
        return view('AdminPages.Journal.addNewJournal');
    }
    public function store(Request $request)
    {
        $journal = new JournalModel();
        $journal->setPeriodicalid($request->input('OISSN'));
        $journal->setJNAME($request->input('JNAME'));
        $journal->setJID($request->input('JID'));
        $journal->setIMGA($request->input('IMGA'));
        $journal->setJISSN($request->input('JISSN'));
        $journal->setOISSN($request->input('OISSN'));
        $journal->setISSUE($request->input('ISSUE'));
        $journal->setJABOUT($request->input('JABOUT'));
        $journal->setINFOJ($request->input('INFOJ'));
        $journal->setArch($request->input('Arch'));
        $journal->setCoverP($request->input('CoverP'));
        $journal->setEBML($request->input('EBML'));
        $journal->setJInfoPdf($request->input('JInfoPdf'));
        $journal_content = json_encode($journal->jsonSerialize());
        $api = new APIModel();
        $status = $api->insertData('journals', $journal_content);
        if ($status == '200') {
            return back();
        } else {
            return back();
        }
    }
    public function show($id)
    {
        $api = new APIModel();
        $journal_Data = $api->getData('journals');
        return view('AdminPages.Journal.showJournals', ["journal_Data" => $journal_Data]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
