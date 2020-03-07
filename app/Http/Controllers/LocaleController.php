<?php

namespace App\Http\Controllers;

use App\Locale;
use Illuminate\Http\Request;

use App\Utils\ApiError;

class LocaleController extends Controller
{
    private $locale;

    public function __construct(Locale $locale) {
        $this->locale = $locale;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Locale::paginate(10);

        return response()->json(["data" => $data], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $name;
        if ($request->has(['name', 'date_min', 'date_max'])) {
            $name = $request->name;
            $date_min = $request->date_min;
            $date_max = $request->date_max;

            $data = $this->locale::where('name', $name)->get();

            if (count($data) == 0) {
                return response()->json(
                    ApiError::errorMessage(
                        'Sorry: Location information '.$name.' not currently available.',
                        404
                    ),
                    202
                );
            }

            $weathers = $this->locale::find($data[0]->id)
                ->weathers
                ->whereBetween('date', [$date_min, $date_max]);

            $res = [
                "period" => [
                    "begin" => $date_min,
                    "end" => $date_max
                ],
                "locale" => $data,
                "weathers" => [...$weathers]
            ];

            return response()->json($res, 200);
        } else {
            return response()->json(
                ApiError::errorMessage("Error: one or more parameters were waiting for the request.", 400
            ), 400);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function edit(Locale $locale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locale $locale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Locale  $locale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locale $locale)
    {
        //
    }
}
