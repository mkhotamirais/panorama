<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogcat;
use App\Models\Carrental;
use App\Models\Carrentalcat;
use App\Models\Tourpackage;
use App\Models\Tourpackagecat;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $latestThreeBlogs = Blog::latest()->take(3)->get();
        return view('home', compact('latestThreeBlogs'));
    }

    // Blog
    public function blog(Request $request)
    {
        $blogs = Blog::latest();

        $search = $request->search;
        if ($search) {
            $blogs = $blogs->where('title', 'like', '%' . $request->search . '%');
        }

        $blogs = $blogs->paginate(6);
        $blogcats = Blogcat::all();

        return view('pages.blog.index', compact('blogs', 'search', 'blogcats'));
    }

    public function userBlogs(User $user, Request $request)
    {
        $userBlogs = $user->blogs()->latest();

        $search = $request->search;
        if ($search) {
            $userBlogs = $userBlogs->where('title', 'like', '%' . $request->search . '%');
        }

        $userBlogs = $userBlogs->paginate(6);

        return view('pages.blog.user-blog', compact('userBlogs', 'user', 'search'));
    }

    public function categoryBlogs(Blogcat $blogcat, Request $request)
    {
        $categoryBlogs = $blogcat->blogs();

        $search = $request->search;
        if ($search) {
            $categoryBlogs = $categoryBlogs->where('title', 'like', '%' . $request->search . '%');
        }

        $categoryBlogs = $categoryBlogs->paginate(6);
        $blogcats = Blogcat::all();

        return view('pages.blog.cat-blog', compact('categoryBlogs', 'blogcat', 'blogcats', 'search'));
    }

    // Car Rental
    public function carrental(Request $request)
    {
        $carrentals = Carrental::latest();
        $search = $request->search;

        if ($search) {
            $carrentals = $carrentals->where('brand_name', 'like', '%' . $request->search . '%');
        }

        $carrentals = $carrentals->paginate(6);
        $carrentalcats = Carrentalcat::all();

        return view('pages.car-rental.index', compact('carrentals', 'carrentalcats', 'search'));
    }

    public function categoryCarrentals(Carrentalcat $carrentalcat, Request $request)
    {
        $categoryCarrentals = $carrentalcat->carrentals();

        $search = $request->search;
        if ($search) {
            $categoryCarrentalcats = $categoryCarrentals->where('title', 'like', '%' . $request->search . '%');
        }

        $categoryCarrentals = $categoryCarrentals->paginate(6);
        $carrentalcats = Carrentalcat::all();

        return view('pages.car-rental.cat-car-rental', compact('categoryCarrentals', 'carrentalcat', 'carrentalcats', 'search'));
    }

    // Tour Package
    public function tourpackage(Request $request)
    {
        $tourpackages = Tourpackage::latest();
        $search = $request->search;

        if ($search) {
            $tourpackages = $tourpackages->where('brand_name', 'like', '%' . $request->search . '%');
        }

        $tourpackages = $tourpackages->paginate(6);
        $tourpackagecats = Tourpackagecat::all();
        return view('pages.tour-package.index', compact('tourpackages', 'tourpackagecats', 'search'));
    }

    public function categoryTourpackages(Tourpackagecat $tourpackagecat, Request $request)
    {
        $categoryTourpackages = $tourpackagecat->tourpackages();

        $search = $request->search;
        if ($search) {
            $categoryTourpackagecats = $categoryTourpackages->where('title', 'like', '%' . $request->search . '%');
        }

        $categoryTourpackages = $categoryTourpackages->paginate(6);
        $tourpackagecats = Tourpackagecat::all();

        return view('pages.tour-package.cat-tour-package', compact('categoryTourpackages', 'tourpackagecat', 'tourpackagecats', 'search'));
    }
}
