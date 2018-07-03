<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Post;
use App\User;
use App\Locker;
use Collective\Html\FormBuilder;
use Illuminate\Http\Request;
use DB;
use Yajra\Datatables\Facades\Datatables;

class EloquentController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //view()->share('controller', 'EloquentController.php');
        //view()->share('title', $this->getTitle('eloquent'));
        view()->share('description', $this->getDescription('eloquent'));
    }

    public function getIndex()
    {
        return view('datatables.eloquent.index');
    }

    /**
     * L-01/02门锁可靠性要求
     */
    public function getL0102Locker()
    {
        return view('datatables.eloquent.l0102Locker')->with('title', 'L-01/02门锁可靠性要求');
    }

    public function getL0102LockerData()
    {
        $users = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'L-01/02门锁')
            ->where('domain', 'Tech');

        return Datatables::of($users)
            ->make();
    }

    public function getL0102LockerProductData()
    {
        $products = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'L-01/02门锁')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }

    /**
     * L-21门锁可靠性要求
     */
    public function getL21Locker()
    {
        return view('datatables.eloquent.L21Locker')->with('title', 'L-21门锁可靠性要求');
    }

    public function getL21LockerData()
    {
        $techs = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'L-21门锁')
            ->where('domain', 'Tech');

        return Datatables::of($techs)
            ->make();
    }

    public function getL21LockerProductData()
    {
        $products = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'L-21门锁')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }
    /**
     * HW-2802防水摇把锁
     */
    public function getHw2802Locker()
    {
        return view('datatables.eloquent.Hw2802Locker')->with('title', 'HW-2802防水摇把锁');
    }

    public function getHw2802LockerData()
    {
        $techs = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'HW-2802防水摇把锁')
            ->where('domain', 'Tech');

        return Datatables::of($techs)
            ->make();
    }

    public function getHw2802LockerProductData()
    {
        $products = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'HW-2802防水摇把锁')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }
    /**
     * 防水小圆锁
     */
    public function getSmallCircleLocker()
    {
        return view('datatables.eloquent.SmallCircleLocker')->with('title', '防水小圆锁');
    }

    public function getSmallCircleLockerData()
    {
        $techs = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '防水小圆锁')
            ->where('domain', 'Tech');

        return Datatables::of($techs)
            ->make();
    }

    public function getSmallCircleLockerProductData()
    {
        $products = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', '防水小圆锁')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }
    /**
     * DKBA04804078
     */
    public function getDkba04804078Locker()
    {
        return view('datatables.eloquent.dkba04804078Locker')->with('title', 'DKBA04804078扣锁');
    }

    public function getDkba04804078LockerData()
    {
        $techs = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'DKBA04804078扣锁')
            ->where('domain', 'Tech');

        return Datatables::of($techs)
            ->make();
    }

    public function getDkba04804078LockerProductData()
    {
        $products = Locker::select(['id', 'type', 'test_items', 'is_report', 'test_rules'])
            ->where('type', 'DKBA04804078扣锁')
            ->where('domain', 'Product');

        return Datatables::of($products)
            ->make();
    }

}
