<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Skin;
use App\Models\Cart;
use App\Models\CartSkin;


use Illuminate\Http\Request;

class SkinsController extends BaseController
{
    public function index(Request $request) {
        $itemsPerPage = 50;
        $isAuth = true;
        $pageNumber = (int)$request->get("page");
        $userCartId = Cart::select("id")->where("iduser", "=", $request->input("userId"))->first();
        $skinId = collect(CartSkin::select("idkskin")->where("idcart", "=", $userCart["id"]))->toArray();
        
        $sk = array();
        for($i = 0; $i < sizeof($skinId); $i++){
            $skins = Skin::where("id", "=", $skinId[$i]["id"])->first();
            $sk[] = $skins;
        }
        $maxPages = (int)(sizeof($skins) / $itemsPerPage) + (sizeof($skins) % $itemsPerPage > 0 ? 1 : 0);
        $halfPages = $maxPages / 2;

        if ($pageNumber > 0 && ($pageNumber - 1) * $itemsPerPage < sizeof($skins)) {
            $possibleEnd = $pageNumber * $itemsPerPage;
            if ($possibleEnd > sizeof($skins)) {
                $itemsPerPage = $possibleEnd - sizeof($skins);
            }
            $skins = array_slice($skins, ($pageNumber - 1) * $itemsPerPage, $itemsPerPage);
        } else {
            $skins = array_slice($skins, 0, $itemsPerPage);
            $pageNumber = 1;
        }

        return view("index", [
            "title" => "Skins",
            "subview" => "skins",
            "isAuthenticated" => $isAuth,
            "maxPages" => $maxPages,
            "halfPages" => $halfPages,
            "currentPage" => $pageNumber,
            "skins" => $skins
        ]);
    }
}