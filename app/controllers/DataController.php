<?php

class DataController extends BaseController {

    public function getIndex()
	{
        $constituencies = DB::table('constituencies')->orderBy('constituency')->get();
        return Response::json($constituencies);
	}

    public function getVoter()
	{
        $voter = DB::table('voters')->get();
        return Response::json($voter);
	}

}