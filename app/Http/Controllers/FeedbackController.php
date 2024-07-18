<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // Store feedback
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->route('welcome')->with('success', 'Feedback submitted successfully!');
    }

    // Display feedback for admin
    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('admin.feedback.index', compact('feedbacks'));
    }
}
