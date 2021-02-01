<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;
use App\Http\Requests\OptionsForm;
use App\Http\Requests\CartOptionsForm;

class OptionController extends Controller
{
    /**
     * Valida Las opciones seleccionadas en el booking
     *
     * @return \Illuminate\Http\Response
     */
    public function validateOptions(OptionsForm $request)
    {
        return response()->json(['message' => true]);
    }

    public function optionLocationCourse(OptionsForm $request)
    {
        $options = $request->options;
        foreach ($options as $key => $option) {
            $option = Option::find($option['id']);
            $option->locationName = $option->course->location->name;
            $option->courseName = $option->course->name;
            unset($option->course);
            $options[$key] = $option;
        }
        return $options;
    }

    public function cartSummary(CartOptionsForm $request)
    {
      $objetos = [];
      foreach ($request->options as $option) {
        $obj = new \stdClass;
        $option = Option::find($option);
        $obj->location = $option->course->location->name;
        $obj->course = $option->course->name;
        $obj->option = $option->name;
        $obj->price = $option->price;
        $obj->plus = $option->price_plus;
        $obj->alias = $option->alias;
        array_push($objetos,$obj);
      }
      return $objetos;
    }
}
