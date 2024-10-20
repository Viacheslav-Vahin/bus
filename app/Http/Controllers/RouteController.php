<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Bus;
use Illuminate\Http\Request;
use App\Models\RouteSchedule;
class RouteController extends Controller
{
    public function index()
    {
        // Отримуємо всі маршрути для відображення у випадаючому списку
        $routes = Route::all();

        return view('admin.routes.index', compact('routes'));
    }

    public function getBusesByDate(Request $request)
    {
        $routeId = $request->input('route_id');
        $date = $request->input('date');

        $buses = Bus::where('route_id', $routeId)
            ->whereHas('schedules', function ($query) use ($date) {
                $query->where('date', $date);
            })
            ->get();

        return response()->json($buses);
    }

//    public function getBusesByRouteAndDate(Request $request)
//    {
//        $routeId = $request->route_id;
//        $date = $request->date;
//
//        $buses = Bus::where('route_id', $routeId)
//            ->whereHas('schedules', function ($query) use ($date) {
//                $query->where('date', $date);
//            })
//            ->with('route') // Завантажити маршрут, щоб отримати ціну
//            ->get();
//
//        // Знаходимо маршрут за ID
//        $route = Route::findOrFail($routeId);
//
//        // Оновлюємо ціну квитка
//        $route->ticket_price = $request->input('ticket_price');
//
//        // Зберігаємо маршрут із новою ціною
//        $route->save();
//
//        // Логування успішного оновлення
//        \Log::info('Ticket price updated for route', ['route_id' => $routeId, 'ticket_price' => $route->ticket_price]);
//
//        return response()->json($buses->map(function ($bus) {
//            return [
//                'bus' => $bus,
//                'ticket_price' => $bus->route->ticket_price,
//            ];
//        }));
//    }

}

