<?php

namespace Netweb\Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {
    public function getSupplierCountry(Request $request) {
        $supplier_id = $request->get('supplier_id');
        $supplier = DB::table('suppliers')->find($supplier_id);
        $supCountryId = $supplier->country_id;
        $supOprCountries = $supplier->opr_countries;
        $supOprCountries = json_decode($supOprCountries);
        $supcountries = DB::table('countries')->whereIn('id', $supOprCountries)->get();
        return response(['status' => true, 'countries' => $supcountries], 200);

    }
    public function getCountryCities(Request $request) {
        $country_id = $request->get('country_id');
        $states_ids = DB::table('states')->where('country_id', $country_id)->pluck('id');
        $cities     = DB::table('cities')->whereIn('state_id', $states_ids)
                    ->whereNull('deleted_at')
                    ->orderBy('name', 'asc')->get();
        return response(['status' => true, 'cities' => $cities], 200);

    }
}
