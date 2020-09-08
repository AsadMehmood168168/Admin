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
        $url = 'Maxjournals' . '/' . 'volumes' . '/' . $id;
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
        $journal->setJName($request->input('jName'));
        $journal->setJid($request->input('jid'));
        $journal->setJIssn($request->input('jIssn'));
        $journal->setOIssn($request->input('oIssn'));
        $journal->setMaxVolume($request->input('maxVolume'));
        $journal->setJAbout($request->input('jAbout'));
        $journal->setIndexInfo($request->input('indexInfo'));
        $journal_content = json_encode($journal->jsonSerialize());
        $api = new APIModel();
        $status = $api->insertData('Maxjournals', $journal_content);
        if ($status == '200') {
            $api = new APIModel();
            $journal_Data = $api->getData('Maxjournals');
            return view('AdminPages.Journal.showJournals', ["journal_Data" => $journal_Data]);
        } else {
            $api = new APIModel();
            $journal_Data = $api->getData('Maxjournals');
            return view('AdminPages.Journal.showJournals', ["journal_Data" => $journal_Data]);
        }
    }
    public function show($id)
    {
        $api = new APIModel();
        $journal_Data = $api->getData('Maxjournals');
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
