<?php

namespace App\Http\Controllers;

use App\Video;
use App\Services\VideoService;
use App\Services\CommentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    protected $videoService, $commentService;

    public function __construct(VideoService $videoService, CommentService $commentService)
    {
        $this->videoService = $videoService;
        $this->commentService = $commentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = [
                "source" => $request->get('source')
            ];

            if($request->has('video')){
                $data['video'] = $request->video->store('');
            }

            $data["user_id"] = auth()->user()->id;
            $data["views"] = 1;

            $video = $this->videoService->create($data);

            $success = "Video Created";
            return redirect( route('videos.edit', ['video' => $video->encoded_Id]) )->with(['data' => $success]);
       
        } catch (\Exception $ex) {
            dump($ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($video)
    {
        $video = decodeId($video);

        $comments = $this->commentService->index($video);
        $video = $this->videoService->find($video);

        $video->views = $video->views + 1;
        $video->save();

        $recommended_videos = $this->videoService->recommendedVideos();
        $upnext_videos = $this->videoService->upNext();


        return view('dashboard.video-single', compact('video', 'recommended_videos', 'upnext_videos', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($video)
    {
        $video = decodeId($video);

        $video = $this->videoService->find($video);

        return view('dashboard.upload-success', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = [
                "title" => $request->get('title'),
                "description" => $request->get('description'),
                "reference" => $request->get('reference')
            ];

            if($request->has('thumbnail')){
                $data['thumbnail'] = $request->thumbnail->store('');
            }else {
                $data['thumbnail'] = 'single-video.png';
            }

            $video = $this->videoService->update($id, $data);
            $success = "Video Updated";
            return redirect( route('videos.show', ['video' => $id]) )->with(['data' => $success]);
        } catch (\Exception $ex) {
            dump($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($video)
    {
        $video = decodeId($video);

        $video = $this->videoService->find($video)->delete();

        $success = "Video Deleted";

        return redirect( route('videos.index') )->with(['data' => $success]);
    }
}