<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Link;

class HomeController extends Controller
{
    /**
     * Show the aplication start page
     * 
     * @return \Illuminate\Http\Response 
     * 
     */    
    public function index(){        
        return view('index');
    }
    
    /**
     * Show page with download
     * 
     * @return \Illuminate\Http\Response 
     * 
     */    
    public function download(Request $req){  
        
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $req->yt, $match)) {
            $video_id = $match[1];        
            return redirect()->route('download.page', ['id' => $video_id]);            
        }else{
            return redirect()->route('index')->with('status','Błędny link..');
        }
    }
    
    
    public function downloadPage($id){  
        $data = [];
        $data['id'] = $id;
        
//        $url = "http://www.youtube.com/watch?v=".$id;
//
//        $page = file_get_contents($url);
//        $doc = new \DOMDocument();
//        $doc->loadHTML($page);
//
//        $title_div = $doc->getElementById('eow-title');
//        $title = $title_div->nodeValue;
        
        $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$id.'&key=AIzaSyA3ks4bF12WD6zbmufSy8n_k-7bvlGqnb4&part=snippet';
        $response = file_get_contents($html);
        $decoded = json_decode($response, true);
        foreach ($decoded['items'] as $items) {
             $title= $items['snippet']['title'];
             
        }        
        
        $data['title'] = $title;
        
        if(Link::where('yt_id',$id)->count() == 0){
            $link = New Link;
            $link->yt_id = $id;
            $link->title = $title;
            $link->save();
        }
        
        return view('download', $data);
    }
}
