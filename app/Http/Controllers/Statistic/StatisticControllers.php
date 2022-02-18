<?php

namespace App\Http\Controllers\Statistic;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\Course\Course;
use App\Models\Course\Enroll;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StatisticControllers extends Controller
{
    //
    public function userCount()
    {

        $date = date('Y-m-d', strtotime("-28 days"));
        // Statistics User
        $userCountDate = User::where('deleted_at', '=', '0')->where('create_date', '>', $date)->count();
        $joinCoursesCountDate = Enroll::where('enroll_date', '>', $date)->count();

        // Statistics Product
        $productCount = Product::where('deleted_at', '=', '0')->count();
        $productCountDate = Product::where('deleted_at', '=', '0')->where('product_date', '>', $date)->count();
        $userRandom = User::where('deleted_at', '=', '0')->inRandomOrder('id')->limit(5)->get();
        //
        $products = Product::where('deleted_at', '=', '0')->inRandomOrder('id')->limit(5)->get();
        // dd($userCountDate);

        // Graphical
        $userData = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('create_date', date('Y'))
            ->groupBy(DB::raw("Month(create_date)"))
            ->pluck('count');

            $productData = Product::select(DB::raw("COUNT(*) as count"))
            ->whereYear('product_date', date('Y'))
            ->groupBy(DB::raw("Month(product_date)"))
            ->pluck('count');

            $userPercentage = $this->userPercentage();
            $productPercentage = $this->productPercentage();
            $joinCoursesPercentage = $this->joinCoursesPercentage();


            $userCountAll = User::get()->count();
            // dd($userCountAll);
        return view('dashboard', compact(
            'userCountDate', 'productCountDate','joinCoursesCountDate' ,
            'products', 'userRandom',
            'userData' ,'productData',
            'userPercentage' , 'productPercentage' , 'joinCoursesPercentage',
            'userCountAll'
        ));
    }


    // protected function userCount()
    // {

    //     // return $userCountAll;
    // }

    // User Percentage
    private function userPercentage(){
        $dateNew = date('Y-m-d', strtotime("-28 days"));
        $dateOld = date('Y-m-d', strtotime("-56 days"));
        $userCountDateNew = User::where('deleted_at', '=', '0')->where('create_date', '>', $dateNew)->count();
        $userCountDateOld = User::where('deleted_at', '=', '0')->whereBetween('create_date', [$dateOld , $dateNew])->count();
        if ($userCountDateOld === 0 ) {
            $userPercentage = $userCountDateNew * 100;
            return $userPercentage;
        }
        $userPercentage = number_format(($userCountDateNew / $userCountDateOld)*100 , 2 , '.' , '');
        return $userPercentage;
    }

    // Product Percentage
    private function productPercentage(){
        $dateNew = date('Y-m-d', strtotime("-28 days"));
        $dateOld = date('Y-m-d', strtotime("-56 days"));
        $productCountDateNew = Product::where('deleted_at', '=', '0')->where('product_date', '>', $dateNew)->count();
        $productCountDateOld = Product::where('deleted_at', '=', '0')->whereBetween('product_date', [$dateOld , $dateNew])->count();
        if ($productCountDateOld === 0) {
            $productPercentage = $productCountDateNew * 100 ;
            return $productPercentage;
        }
        $productPercentage = number_format(($productCountDateNew / $productCountDateOld)*100 , 2 , '.' , '') ;
        return $productPercentage;
    }

    // Course Percentage
    private function joinCoursesPercentage(){
        $dateNew = date('Y-m-d', strtotime("-28 days"));
        $dateOld = date('Y-m-d', strtotime("-56 days"));
        $joinCoursesCountDateNew = Enroll::where('enroll_date', '>', $dateNew)->count();
        $joinCoursesCountDateOld = Enroll::whereBetween('enroll_date', [$dateOld , $dateNew])->count();
        if ($joinCoursesCountDateOld === 0) {
            $joinCoursesPercentage = $joinCoursesCountDateNew * 100 ;
            return $joinCoursesPercentage ;
        }
        $joinCoursesPercentage = number_format(($joinCoursesCountDateNew / $joinCoursesCountDateOld) , 2 , '.' , '');
        return $joinCoursesPercentage ;
    }
}
