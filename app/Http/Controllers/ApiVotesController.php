<?php

namespace App\Http\Controllers;

use App\Models\division;
use Illuminate\Http\Request;
use App\Models\votes;
use Illuminate\Support\Facades\DB;

class ApiVotesController extends Controller
{
    public function GetVotes()
    {
      return votes::select('votes.id as vid','divisions.id as divisi_id','divisions.nama','polls.id as polls_id','polls.title','polls.deskripsi','polls.deadline')
      ->join("divisions","votes.id_divisi","=","divisions.id")
      ->join("polls","votes.id_polls","=","polls.id")
      ->get();
    }

    public function PostVotes()
    {
        request()->validate([
            "id_user"=>"required",
            "id_polls"=>"required",
            "id_divisi"=>"required"
        ]);

        return votes::create([
            "id_user"=>request("id_user"),
            "id_polls"=>request("id_polls"),
            "id_divisi"=>request("id_divisi")
        ]);
    }
    public function deleteVotes(votes $p)
    {
        $succes = $p->delete();
        return[
            "succes"=>$succes,
            "status"=>200
        ];
    }
}
