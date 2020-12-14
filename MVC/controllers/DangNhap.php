<?php
class DangNhap extends Controller
{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    
    function __construct(){
        $spg=$this->model("TaiKhoanModel");
        $this->view("masterLayout2",[
            "Page" =>"dangnhap"
        ]);
    }
    function XuLyDangNhap(){
        //1. get data khach hang nhap
        if(isset($_POST["login"])){
            $username=$_POST["username"];
            $password=$_POST["password"];
        }

        //2. insert data bang user
        $kq=$this->TaiKhoanModel->Login($username, $password);
       
        //3. hien thi thon bao successed/failed
        $this->view("masterLayout2",[
            "Page" =>"dangNhap",
            "result" =>$kq
        ]);
    }
    // function XuLyDangNhap(){
    //     // if(isset($_POST["login"])){
    //     //     $username=$_POST["username"];
    //     //     $password=$_POST["password"];
    //     // }
    //     // $kq=$this->TaiKhoanModel->login($username,$password);
    //     // $this->view("masterLayout2",[
    //     //     "Page" =>"dangnhap",
    //     //     "result" =>$kq
    //     // ]);
    //     $data = [
    //         'title'=>'trang dang nhap',
    //         'username'=>'',
    //         'password'=>'',
    //         'usernameError'=>'',
    //         'passwordError'=>''
    //     ];

    //     //kiem tra post
    //     if($_SERVER['REQUEST_METHOD']=='POST'){
    //         $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

    //         $data=[
    //             'username'=>trim($_POST['username']),
    //             'password'=>trim($_POST['password']),
    //             'usernameError'=>'',
    //             'passwordError'=>''
    //         ];
    //         //xac thuc tai khoan
    //         if(empty($data['username'])){
    //             $data['usernameError']='Nhap username';
    //         }
    //         if(empty($data['password'])){
    //             $data['passwordError']='Nhap password';
    //         }
    //         if(empty($data['username']&&empty($data['password']))){
    //             // $kq=$this->TaiKhoanModel->login($username,$password);
    //             $loggedInUser=$this->TaiKhoanModel->Login($data['username'], $data['password']);
    //             if($loggedInUser){
    //                 $this->TaoSession($loggedInUser);
    //             }
    //             else{
    //                 $data['password']="sai mat khau";
    //                 $this->view('dangnhap',$data);
    //             }
    //         }
    //     }
    //     else{
    //         $data = [
    //             'title'=>'trang dang nhap',
    //             'username'=>'',
    //             'password'=>'',
    //             'usernameError'=>'',
    //             'passwordError'=>''
    //         ];
    //     }
        
    //     $this->view('masterLayout2',$data);
    // }
    // function TaoSession($user){
    //     session_start();
    //     $_SESSION['user_id']=$user->tendangnhap;
    //     $_SESSION['name']=$user->hoten;
    //     $_SESSION['matkhau']=$user->matkhau;
    //     $_SESSION['sdt']=$user->sdt;
    //     $_SESSION['diachi']=$user->diachi;
    //     $_SESSION['role']=$user->role;
    // }
    
} 
?>