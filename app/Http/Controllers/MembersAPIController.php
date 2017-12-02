<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Members API endpoint class
 * @extends Controller
 */
class MembersAPIController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * List of members
     * @return {Response} JSON response
     */
    public function list() {
      $results = DB::table('member')->get();

      return response()
        ->json(['results' => $results]);
    }

    /**
     * Create a Member instance
     * @param  {Request} Request Request object
     * @return {Response}        JSON response
     */
    public function create(Request $request) {
      $params = ['username', 'email', 'firstName', 'lastName', 'role'];
      $insertValues = $request->only($params);

      $id = DB::table('member')->insertGetId($insertValues);

      $savedUser = DB::table('member')
        ->where('id', $id)
        ->first();

      return response()
        ->json($savedUser);
    }

    /**
     * Update a Member instance
     * @param  {Request} Request Request object
     * @param  {String}  id      ID of the updating user
     * @return {Response}        JSON response
     */
    public function update(Request $request, $id) {
      $params = ['username', 'email', 'firstName', 'lastName', 'role'];
      $updateValues = $request->only($params);

      $insertId = DB::table('member')
        ->where('id', $id)
        ->update($updateValues);

      $updatedUser = DB::table('member')->where('id', $id)->first();

      return response()
        ->json($updatedUser);
    }

    /**
     * Destroy a Member instance
     * @param  {Request} Request Request object
     * @param  {String}  id      ID of the deleting user
     * @return {Response}        JSON response
     */
    public function delete(Request $request, $id) {
      DB::table('member')
        ->where('id', $id)
        ->delete();

      return response()
        ->json(['result' => 'ok']);
    }
}
