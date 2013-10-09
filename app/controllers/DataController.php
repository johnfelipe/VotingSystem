<?php

class DataController extends BaseController {

    public function index()
	{
        $constituencies = DB::table('constituencies')->get();
        return Response::json($constituencies);
	}

}