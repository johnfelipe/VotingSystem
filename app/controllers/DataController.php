<?php
class DataController extends BaseController {

    public function getConstituencies()
	{
        $constituencies = DB::table('constituencies')->orderBy('constituency')->get();
        return Response::json($constituencies);
	}

    public function getParties()
	{
        $politicalparties = DB::table('political_parties')->orderBy('name')->get();
        return Response::json($politicalparties);
	}

    public function getVoter()
	{
        $voter = DB::table('voters')->get();
        return Response::json($voter);
	}
    
    public function getElectionresultsbyparty() {
    // no error checking here - add if there's time
       return Response::json( DB::table('voters')
            ->select(DB::raw('political_parties.name as party_name, count(voters.id) as no_of_votes'))
            ->join('political_parties', 'voters.party_id', '=', 'political_parties.id')    
            ->groupBy('political_parties.name')
            ->orderBy('no_of_votes', 'desc')
            ->get());
    }
    
    public function getElectionresultsbyconstituency() {
    // no error checking here - add if there's time
    
        $results = DB::table('voters')
        ->select(
            DB::raw('political_parties.name as party_name, constituency, count(voters.id) as no_of_votes')
        )->join('political_parties', 'voters.party_id', '=', 'political_parties.id')
        ->join('constituencies', 'voters.constituency_id', '=', 'constituencies.id', 'RIGHT')
        ->groupBy('party_name')
        ->groupBy('constituency')
        ->orderBy('no_of_votes', 'desc')
        ->get();
        
        $return_array = array();
        
        foreach($results as $row_obj) {
            if(!array_key_exists($row_obj->constituency, $return_array)) {
                $return_array[$row_obj->constituency] = array();
            }
            
            $return_array[$row_obj->constituency][] = array(
                'party'=>$row_obj->party_name,
                'votes'=>$row_obj->no_of_votes
            );
        }
        
        // sort the above into a nicer format for backbone to play with
        $response = array();
        foreach($return_array as $key => $val) {
            $response[] = array('constituency' => $key, 'parties' => $val);
        }
        
        return Response::json($response);
    }
    
    public function postVoter()
	{
        $voter_info = Input::all();
        $clean_voter = array();
        // Add in proper validation if there's time
        $validation_count = 0;
        foreach($voter_info as $key => $val) {
            switch($key) {
                case 'name':
                    if(preg_match("/[\w- ]/i", $val)) {
                        $validation_count++;
                        $clean_voter[$key] = $val;
                    }
                break;
                case 'party_id':
                    if(count(
                        DB::table('political_parties')
                            ->select('id')
                            ->where('id', '=', $val)
                            ->get()
                    ) == 1) {
                        $validation_count++;
                        $clean_voter[$key] = $val;
                    }
                break;
                case 'constituency_id':
                    if(count(
                        DB::table('constituencies')
                            ->select('id')
                            ->where('id', '=', $val)
                            ->get()
                    ) == 1) {
                        $validation_count++;
                        $clean_voter[$key] = $val;
                    }
                break;
                case 'voting':
                    if($val === 1) {
                        $validation_count++;
                        $clean_voter[$key] = true;
                    }
                break;
            }
        }
        
        if($validation_count == 4) {
            try {
                DB::table('voters')->insert($clean_voter);
            } catch(Exception $e) {
                //echo($e->getMessage()); // uncomment to debug
            }
        }
    }
}