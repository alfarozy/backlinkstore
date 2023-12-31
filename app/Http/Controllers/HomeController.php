<?php

namespace App\Http\Controllers;

use App\Models\Backlink;
use App\Models\BacklinkPremium;
use App\Models\Member;
use App\Models\MemberBacklink;
use App\Models\PremiumPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = PremiumPackage::get();
        $backlink = Backlink::count();
        $submitBacklink = BacklinkPremium::where('status', "SUCCESS")->count();
        $member = Member::count();
        return view('home.index', compact('packages', 'backlink', 'member', 'submitBacklink'));
    }
}
