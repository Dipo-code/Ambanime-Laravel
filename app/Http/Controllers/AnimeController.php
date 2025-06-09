<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Genre;

class AnimeController extends Controller
{
    //Homepage : TopAnime, On-Going, Rekomendasi
    public function index(){
            $topAnime = Anime::where('is_top', true)->get();
            $ongoingAnime = Anime::where('status','ongoing')->get();
            $rekomendasiAnime = Anime::where('is_rekomendasi', true)->get();

            return view('user.home', compact('topAnime','ongoingAnime','rekomendasi'));
    }
    //Daftar anime dengan filter genre dan status
    public function list(Request $request){

        $query = Anime::query();

        if($request->filled('search')){
            $query->where('judul','like','%'.$request->search . '%');
        }

        if($request->has('genre')){
            $query->whereHas('genres',function ($q) use ($request){
                $q->where('id_genre',$request->genre);
            });
        
        }

        if($request->has('status')){
            $query->where('id_genre',$request->genre);
        }

        $animes = $query->paginate(12);
        $genres = Genre::all();

        return view('user.anime-list',compact('animes','genres'));    
    }
    
    //Jadwal Rilis Anime berdasarkan hari
    public function jadwal(Request $request){
        $query = Anime::query();

        if($request->has('hari')){
            $request->where('jadwal_tayang', $request->hari);
        }

        $animes = $query->get();

        return view('user.jadwal',compact('animes'));
    }

    //Detail anime: info lengkap,episoed,kualitasvidio, link
    public function show($id){
        $anime = Anime::with(['genres','episode.kualitas'])->findOrFail($id);

        return view('user.detail',compact('anime'));
    }

}
