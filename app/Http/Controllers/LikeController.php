<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class LikeController extends Controller
{
    public function like(Post $post, Request $request)
    {
        // Validate and store the like
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
                Rule::unique('likes')->where(function ($query) use ($post) {
                    return $query->where('post_id', $post->id);
                }),
            ],
        ]);
    
        if ($validator->fails()) {
            // Return validation errors as JSON response
            return response()->json(['error' => $validator->errors()], 422);
        }
        
        // Check if the email is already taken for this post
        $existingLike = Like::where('post_id', $post->id)
        ->where('email', $request->email)
        ->first();

        if ($existingLike) {
            return response()->json(['error' => 'Email already taken for this post'], 422);
        }

        // Create the like
        Like::create([
            'post_id' => $post->id,
            'email' => $request->email,
        ]);

        // Retrieve the updated like count
        $likeCount = $post->likes->count();

        return response()->json(['message' => 'Liked successfully', 'likeCount' => $likeCount]);

    }

    
}
