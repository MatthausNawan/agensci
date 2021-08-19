<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdversitmentStoreRequest;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\LocalAdvertisement;
use App\Models\Segment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdvertController extends Controller
{
    public function create(Request $request)
    {
        if (!$request->has('id')) {
            return redirect()->back();
        }

        $localAds = LocalAdvertisement::find($request->id);

        if ($localAds) {
            session()->put('local_ads', $localAds);
        }

        return view(
            'frontend.pages.advertise.index',
            [
            'locals' => LocalAdvertisement::all(),
            'states' => DB::table('states')->get(),
            'cities' => DB::table('cities')->get(),
            'categories' => Category::where('type', 'EVENT')->get(),
            'segments' => Segment::all()
            ]
        );
    }

    public function store(AdversitmentStoreRequest $request)
    {
        $data = $request->all();
        $data['status'] = Advert::STATUS_CREATED;

        if ($request->has('media_file')) {
            $ads_local = Session::get('local_ads');
            $local = LocalAdvertisement::find($ads_local->id);
            $path = Str::kebab($local->page) ."/".  Str::kebab($local->location);
            $fileName = Str::kebab(strtolower($request->social_name)) ."." . $request->file('media_file')->extension();

            $data['media_file'] = $request->media_file->storeAs(strtolower($path), $fileName);
        }
        $announcement = Advert::create($data);

        return redirect()->route('site.advertise.review', $announcement->id);
    }

    public function review($id)
    {
        $announcement = Advert::find($id);
        $total_price = $announcement->getEstimatedPrice();

        return view('frontend.pages.advertise.confirmation', compact('announcement', 'total_price'));
    }

    public function confirm($id)
    {
        $announcement = Advert::find($id);
        $announcement->status = Advert::STATUS_CONFIRMED;
        $announcement->enabled = false;
        $announcement->total_price = $announcement->getEstimatedPrice();
        $announcement->save();

        return view('frontend.pages.advertise.finish');
    }
}
