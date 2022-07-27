<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use domain\Facades\ListingFacade;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        return ListingFacade::index();
    }

    public function show(Listing $listing){
        return ListingFacade::show($listing);
    }

    //show create form
    public function create(){
        return ListingFacade::create();
    }

    public function store(Request $request){
        return ListingFacade::store($request);
    }

    //show edit form
    public function edit(Listing $listing){
        return ListingFacade::edit($listing);
    }

    public function update(Request $request, Listing $listing){
        return ListingFacade::update($request,$listing);
    }

    public function destroy(Listing $listing){
        return ListingFacade::destroy($listing);
    }

    public function manage(){
        return ListingFacade::manage();
    }
}
