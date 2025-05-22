<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalCategories = Category::count();
        $totalPublishers = Publisher::count();

        return view('dashboard', compact('totalBooks', 'totalCategories', 'totalPublishers'));
    }
}
