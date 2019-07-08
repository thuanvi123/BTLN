<?php

namespace App\Http\Controllers;

use App\Model\AdminModel;
use App\Model\Front\OrderModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Hàm khởi tạo của class được chạy ngay khi khởi tạo đổi tượng
     * Hàm này nó luôn được chạy trước các hàm khác trong class
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }

    /**
     * Phương thức trả về view khi đăng nhập admin thành công
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        //doang thu theo ngày
        $moneyDay=OrderModel::whereDay('updated_at',date('d'))
            ->where('status')->sum('total_price');
        //doang thu theo ngày
        $moneyMonth=OrderModel::whereDay('updated_at',date('m'))
            ->where('status')->sum('total_price');


        $datemoney=[
            [
                "name"=> "Doanh thu ngày",
                "y"=>(int)$moneyDay
            ],
            [
            "name"=> "Doanh thu tháng",
            "y"=>(int)$moneyMonth
        ]
    ];


        $data=[
            'moneyDay'=>$moneyDay,
            'moneyMonth'=>$moneyMonth,
            'datemoney'=>json_encode($datemoney)
        ];



        return view('admin.dashboard',$data);
    }

    /**
     * Phương thức trả về view dùng để đăng ký tài khoản admin
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        //return view('admin.auth.register');
        return view('admin.auth.registertemplate');
    }


    public function store(Request $request) {

        // validate dữ liệu được gửi từ form đi
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ));

        // Khởi tạo model để lưu admin mới
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();

        return redirect()->route('admin.auth.login');
    }


}
