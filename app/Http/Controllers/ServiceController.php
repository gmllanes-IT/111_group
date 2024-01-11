<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->input('category');
        $searchQuery = $request->input('search');
        $currentLanguage = app()->getLocale();

        $servicesQuery = Service::with(['category' => function ($query) use ($currentLanguage) {
            $query->select(['id', $currentLanguage . '_name as name']);
        }])
            ->select(['id', $currentLanguage . '_name as name', 'image', 'category_id']);

        if ($categoryId) {
            $servicesQuery->where('category_id', $categoryId);
        }

        if ($searchQuery) {
            $servicesQuery->where(function ($query) use ($currentLanguage, $searchQuery) {
                $query->where($currentLanguage . '_name', 'LIKE', '%' . $searchQuery . '%');
            });
        }

        $services = $servicesQuery->get();

        return response()->json(['services' => $services], 200);
    }
}
