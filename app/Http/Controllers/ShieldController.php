<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\User;
use App\Shield;
use Collective\Html\FormBuilder;
use Illuminate\Http\Request;
use DB;
use Yajra\Datatables\Facades\Datatables;

class ShieldController extends Controller
{
    public function __construct()
    {
        view()->share('description', $this->getDescription('shield'));
    }

    public function getIndex()
    {
        return view('datatables.shield.index');
    }

    /**
     * 导电布可靠性要求
     */
    public function getFabric()
    {
        return view('datatables.shield.fabric')->with('title', '导电布');
    }

    public function getFabricData()
    {
        $fabrics = Shield::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '导电布')
            ->where('domain', 'Tech');

        return Datatables::of($fabrics)
            ->make();
    }

    public function getFabricProductData()
    {
        $products = Shield::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '导电布')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }
    /**
     * 波导板可靠性要求
     */
    public function getPlate()
    {
        return view('datatables.shield.plate')->with('title', '波导板');
    }

    public function getPlateData()
    {
        $plates = Shield::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '波导板')
            ->where('domain', 'Tech');

        return Datatables::of($plates)
            ->make();
    }

    public function getPlateProductData()
    {
        $products = Shield::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '波导板')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }
    /**
     * 屏蔽簧片可靠性要求
     */
    public function getFinger()
    {
        return view('datatables.shield.finger')->with('title', '屏蔽簧片');
    }

    public function getFingerData()
    {
        $fingers = Shield::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '屏蔽簧片')
            ->where('domain', 'Tech');

        return Datatables::of($fingers)
            ->make();
    }

    public function getFingerProductData()
    {
        $products = Shield::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '屏蔽簧片')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }

}
