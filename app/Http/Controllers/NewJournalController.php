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
        $journal->setApiLink($request->input('apiLink'));
        $journalContent = json_encode($journal->jsonSerialize());
        $journalListContent = json_encode($journal->jsonSerializeJournalList());
        // print $journalListContent;
        $api = new APIModel();
        $api->setUrl("http://localhost:5000");
        $status = $api -> insertData("/journalList",$journalListContent);
        print $status;
        // $url = "http://localhost:5000/journalList";
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $journalListContent);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // # Return response instead of printing.
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // # Send request.
        // $result = curl_exec($ch);
        // curl_close($ch);
        // # Print response.
        // echo "<pre>$result</pre>";



        
        // $data = $api->getData("/journalList");

        // print json_encode($data);
        // if (isset($data)){
        //     foreach ($data as $journalData){
        //         print $journalData->apiLink;
        //     }
        // }
        //print $journalContent . "<br>" . $journalListContent;
        // $api = new APIModel();
        // $api->setUrl("http://localhost:3000");
        // $api->insertData('/journalList', $journalListContent);
        // print $status;
        // $api->insertData('/Maxjournals', $journalContent);
        // print $status;
        // if ($status == '200') {
        //     return back();
        // } else {
        //     return back();
        // }
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
