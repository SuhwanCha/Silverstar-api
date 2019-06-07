<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller {

 /**
  * Return Search results by query.
  *
  * @param  string  $query
  * @return Json
  */
 public function show(Request $r) {
  $format = 'https://dapi.kakao.com/v2/local/search/keyword.json?y=%f&x=%f&query=%s&sort=%s';
  $url = sprintf($format, $r->input('x'), $r->input('y'), urlencode($r->input('query')), $r->input('sort') ? "accuracy" : "distance");
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

  $headers = array();
  $headers[] = 'Authorization: KakaoAK ' . env('KAKAO_KEY');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if (curl_errno($ch)) {
   echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
  $rawData = json_decode($result);
  $data = array();
  foreach ($rawData->documents as $value) {
   $temp = array(
    'x' => $value->x,
    'y' => $value->y,
    'name' => $value->place_name,
    'addr' => $value->road_address_name,
   );
   array_push($data, $temp);
  }
  return response()->json($data, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);

  //   return response()->json($data, JSON_UNESCAPED_UNICODE);
 }

 /**
  * Return list of Search History by user.
  *
  * @param  string  UID
  * @return Json
  */
 public function showHistory($uid) {
  //
 }

 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index() {
  //
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request) {
  //
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id) {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy($id) {
  //
 }
}
