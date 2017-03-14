<?php

namespace App\Http\Controllers;

use App\Announces;
use App\User;
use App\Genes;
use App\Brands;
use App\Categories;
use App\Ann_Photos;
use App\User_photos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncesController extends Controller
{

    public function __construct(Request $request)
    {

        $this->middleware('auth')->except(['show', 'index']);

            // $tournamentId =  $request->id;
         $values = $request->route('id');
         //dd($id);
         //dd($request->route()->parameters());


         //return json_encode($id);

    }


    public function index()
    {

        $announces = Announces::orderBy('price', 'asc')->get();

        $ann_photos = Ann_photos::where('position', '1')->get();

        //dd($ann_photos->where('ann_id','1')->first()->ann_photo);

        return view('announces.index', compact('announces', 'ann_photos'));

    }

    public function create()
    {

        return view ('/new.location');

    }

    public function store(Request $request)
    {

      Announces::create([
          $request->all(),
          'user_id' => auth()->id()
      ]

      );

      $user = Announces::where('user_id','=',auth()->id())->orderBy('id', 'DESC')->first();
      return redirect()->route('vehicle', [$user])->with('data', $user->id);


    }

    public function show(Announces $announce)
    {

        $ann_photos = Ann_photos::all()->where('ann_id', $announce->id);

        $user_photo = $announce->user->user_photos->where('position', '1')->first()->user_photo;

        return view('/announces.show', compact('announce', 'ann_photos', 'user_photo' ));

    }

    public function update($id , Request $request)
    {

        $ann = Announces::find($id)->update($request->all());

        if ($request->is('*/vehicle'))
        {

            return redirect()->route('details', [$id])->with('data', $id);

        }else if($request->is('*/details'))
        {

            return redirect()->route('colors', [$id])->with('data', $id);

        }else if($request->is('*/colors'))
        {

            return redirect()->route('features', [$id])->with('data', $id);

        }else if($request->is('*/features'))
        {

            return redirect()->route('description', [$id])->with('data', $id);

        }else if($request->is('*/description'))
        {

            return redirect()->route('photos', [$id])->with('data', $id);

        }else if($request->is('*/photos'))
        {

            return redirect()->route('vehicle-rules', [$id])->with('data', $id);

        }else if($request->is('*/vehicle-rules'))
        {

            return redirect()->route('availability-settings', [$id])->with('data', $id);

        }else if($request->is('*/availability-settings'))
        {

            return redirect()->route('calendar', [$id])->with('data', $id);

        }else if($request->is('*/calendar'))
        {

            return redirect()->route('price', [$id])->with('data', $id);

        }else if($request->is('*/price'))
        {

            return redirect()->route('local-laws', [$id])->with('data', $id);

        }else if($request->is('*/local-laws'))
        {

            return redirect()->route('publish', [$id])->with('data', $id);

        }else if($request->is('*/publish'))
        {

            return redirect()->route('search');

        }

    }

    public function selectBrands()
    {

        $brands = Brands::orderBy('brand_name_eng', 'asc')->get();

        return view ('new.vehicle', compact('brands'));

    }

    public function selectGenes($id)
    {
        $genes = Genes::where('brand_id',$id)->pluck('gene_name_eng','id');

        return json_encode($genes);
    }

}
