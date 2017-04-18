<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use Illuminate\Support\Facades\Response;

class SongController extends Controller
{
    public function index ()
    {
      $songs = Song::all();
      return Response::json($songs);
    }

    public function show ($id)
    {
      $song = Song::find($id);
      return Response::json($song);
    }

    public function update (Request $request, $id)
    {
      $song = Song::find($id);
      $song->update($request-all());
      return Response::json(['updated' => true]);
    }

    public function create (Request $request)
    {
      $song = Song::create($request->all());
      return Response::json(['created' => true]);
    }

    public function destroy ($id)
    {
      $song = Song::find($id);
      $song->delete();
      return Response::json(['deleted' => true]);
    }
}
