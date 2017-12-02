<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersAppController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * List the members
     * @return {View}
     */
    public function list() {
      $members = DB::table('member')->get();

      return view('members.list', ['members' => $members]);
    }

    /**
     * Create a member
     * @return {View}
     */
    public function create() {
      return view('members.create');
    }

    /**
     * Edit a member
     * @return {View}
     */
    public function edit(Request $request, $id) {
      $member = DB::table('member')->where('id', $id)->first();

      return view('members.edit', ['member' => $member]);
    }
}
