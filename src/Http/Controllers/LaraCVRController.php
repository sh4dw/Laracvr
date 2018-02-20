<?php
namespace Lhartmann\LaraCVR\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Lhartmann\LaraCVR\CVRClient as CVR;

class LaraCVRController extends Controller
{
    public function show(int $cvr)
    {
        $data = CVR::request(
            [
                'term' => [
                    'cvrNummer' =>  $cvr
                ]
            ],
            'POST', //request type
            0, //from
            1 //size
        );
        return $data;
    }
}
