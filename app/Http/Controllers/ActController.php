<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Activity;
use App\History;
use App\Detail;
use App\Staff;
use App\Member;
use App\Picture;

class ActController extends Controller
{
    public function index($id) {
        return $this->toView($id, "");
    }

    public function year($id, $year) {
        return $this->toView($id, $year);
    }

    private function toView($id, $year) {
        $activity = Activity::find($id);
        $history  = History::where('ActID', '=', $activity->ID)->orderBy('Year', 'DESC')->get();
           

        if($year == "")
            $select   = $history->first();
        else
            $select   = History::where('ActID', '=', $activity->ID)->where('Year', '=', $year)->first();
        
        $detail   = Detail::where('HID', '=', $select->ID)->first();
        $staff    = Staff::Join('member', 'staff.MID', '=', 'member.Code')
                    ->where('DID', '=', $detail->ID)->get();
        $picture  = Picture::where('HID', '=', $select->ID)->get();
        $count    = $picture->count();

        return view('activity.index', [
            'activity' => $activity,
            'history'  => $history,
            'select'   => $select->Year,
            'detail'   => $detail,
            'staff'    => $staff,
            'picture'  => $picture,
            'count'    => $count
            ]);
    }

    public function create($id) {
        $activity = Activity::find($id);

        return view('activity.create', [
            'activity' => $activity
            ]);
    }

    public function edit($id, $year) {
        dd($id, $year);
        //return view('activity.edit');
    }

    public function delete($id, $year) {
        dd($id, $year);
        //return view('activity.delete');
    }
}
