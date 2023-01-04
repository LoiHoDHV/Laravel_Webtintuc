<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Model\UserLevel;;
use App\Model\Page;
use App\Model\Social;
use App\Model\Newsletter;
use App\Model\Contact;
use App\Model\NewsCategory;
use App\Model\News;
use DB; // using DB
use File;
use Image;

use App\Model\System;

class FrontController extends Controller
{
    public function __construct(){
        @session_start();



        
        $Page = Page::where('Status',1)->selectRaw('Name,Alias')->orderBy('Sort','ASC')->get();
        view()->share('Page',$Page);
        // social 
        $Social = Social::where('Status',1)->selectRaw('Name, Font , Alias')->orderBy('Sort','ASC')->get();
        view()->share('Social',$Social);

        $CatNews = NewsCategory::where('Status',1)->selectRaw('Name,Alias')->get();
        view()->Share('CatNews',$CatNews);

        $CopyRight = System::select('Description')->where('code','copyright')->first();
        view()->share('CopyRight',$CopyRight);

        $NameGroup = System::select('Description')->where('code','Name')->first();
        view()->share('NameGroup',$NameGroup);

        // email sdt dia chi

        $Email = System::select('Description')->where('code','email')->first();
        view()->share('Email',$Email);

        $Phone = System::select('Description')->where('code','phone')->first();
        view()->share('Phone',$Phone);

        $Add = System::select('Description')->where('code','address')->first();
        view()->share('Add',$Add);

        
        
        

        
    }




    public function home(){
       
        // $News = News::where('Status',1)->selectRaw('RowID,Name, Images, SmallDescription,Description,created_at')->orderBy('RowID','DESC')-> limit(6)->get();
        // view()->share('News',$News);

        // $News = DB::table('news as a')
        // ->join('news_cat', 'a.RowIDCat', '=', 'news_cat.RowID')
        // ->selectRaw('a.*')
        // ->orderBy('a.RowID','DESC')
        // ->limit(6)->get();\


        $PageInfo = Page::where('Status',1)->where('Alias','/')->SelectRaw('Name,Alias')->first();
        
        $News = DB::table('news as a')
        ->join('news_cat as b', 'a.RowIDCat', '=' , 'b.RowID')
        ->selectRaw('a.*, b.Name as CategoryName')
        ->orderBy('a.RowId','DESC')
        ->limit(6)
        ->get();

        $NewsMostView = DB::table('news as a')
        ->join('news_cat as b', 'a.RowIDCat', '=' , 'b.RowID')
        ->selectRaw('a.*, b.Name as CategoryName')
        ->orderBy('a.Views','DESC')
        ->limit(1)
        ->get();
       


        return view('front.home.home',compact('PageInfo','News','NewsMostView'));
    }

    

    

    

    // --- dang ky nhan tin 
    public function subEmail_post(){
       
            // if($request->txtEmailSub != ''){
            //     $Newsletter = Newsletter::where('Email',$request->txtEmailSub)->get();
                
            //     if(isset($Newsletter) && count($Newsletter) > 0){
            //         echo `<script> alert('Ten email da ton tai') </script>`;
            //     }else{
            //         echo `<scirpt> alert('khong co gì cả'); </script>`;
            //         $Newsletter = new Newsletter;

            //         $NewsLetter->Email = $request->txtEmailSub;
                    
            //         $Flag = $Newsletter->save();

            //         if($Flag == true){
            //            echo `<script> alert('Them thanh cong') </script>`;
                      
            //         }else{
            //             echo `<script> alert('Loi') </script>`;
            //         }
            
            //     }
            // }else{
            //     echo `<script> alert('Tên email không hợp lệ') </script>`;
            // }
            // return redirect('');

            $tenEmail = null;
            if(isset($_POST['gui'])){
                $tenEmail = $_POST['txtEmailSub'];

            }

            if($tenEmail != null){
                $Newsletter = Newsletter::where('Email',$tenEmail)->get();
                if(isset($Newsletter) && count($Newsletter) > 0){
                            echo `<script> alert('Ten email da ton tai') </script>`;
                }else{
                        
                    $Newsletter = new Newsletter;
                    
                    $Newsletter->Email = $tenEmail;
                    $Flag = $Newsletter->save();

                    if($Flag == true){
                        echo `<script> alert('Them thanh cong') </script>`;
                        
                        
                    }else{
                        echo `<script> alert('Loi') </script>`;
                    }
                }
            }
            return redirect('/');
    
    //--- -dang ky nhan tin
    
  
    
    }


    

    public function contact(){
        
        $PageInfo = Page::where('Status',1)->where('Alias','lien-he')->SelectRaw('Name,Alias,Description')->first();
        
        return view('front.contact.contact',compact('PageInfo'));

    }

    public function contact_post(){

        $tenEmail = null;
        $hoVaTen = null;
        $soDienThoai = null;
        $loiNhan = null;

        if(isset($_POST['gui'])){
            $tenEmail = $_POST['email'];
            $hoVaTen = $_POST['name'];
            $soDienThoai = $_POST['phone'];
            $loiNhan = $_POST['message'];
            

        }

        $Contact = new Contact;

        $Contact->Name = $hoVaTen;
        $Contact->Email = $tenEmail;
        $Contact->Phone = $soDienThoai;
        $Contact->Message = $loiNhan;
        $Flag = $Contact->save();

        if($Flag == true){
            echo `<script> alert('Them thanh cong') </script>`;
            
            
        }else{
            echo `<script> alert('Loi') </script>`;
        }
        

        return redirect('/lien-he');
        

    }

    public function slug(Request $request, $slug){

        $newsCat = NewsCategory::where('Status',1)->where('Alias',$slug)->first();

        if(isset($newsCat) && $newsCat != NULL){
            $listNews = DB::table('news as a')
            ->join('news_cat as b', 'a.RowIDCat', '=', 'b.RowID')
            ->where('b.Alias',$slug)
            ->where('a.Status',1)
            ->selectRaw('a.Alias, a.Name, a.Images, a.SmallDescription,a.created_at,a.Views')
            ->paginate(4);

            return view('front.news.cat',compact('newsCat','listNews'));
        }


    }

    public function slugHtml(Request $request, $slug){

        $newsDetail = DB::table('news as a')
        ->join('news_cat as b', 'a.RowIDCat', '=', 'b.RowID')
        ->where('a.Status',1)
        ->where('a.Alias',$slug)
        ->selectRaw('a.RowID,a.Alias, a.Name, a.Images,a.created_at,a.Views,a.Description, b.Name as NewsCatName, b.Alias as NewsCatAlias')
        ->first();

        

        
        // cap nhat luot views

        $news = News::find($newsDetail->RowID);
        
        $news->Views = $news->Views + 1;
        
        $news->save();

        

        
        return view('front.news.detail',compact('newsDetail'));
    }


    // search function

    public function getNewsSearch(Request $request){
        $PageInfo = Page::where('Status',1)->where('Alias','/')->SelectRaw('Name,Alias')->first();
        $keyWord = $request->input('keyword');
        $News = DB::table('news as a')
        ->join('news_cat as b', 'a.RowIDCat', '=' , 'b.RowID')
        ->selectRaw('a.*, b.Name as CategoryName')
        ->where('a.Name' ,'like', '%' . $keyWord . '%')
        ->orderBy('a.RowId','DESC')
        ->limit(10)
        ->get();

        if(count($News) == 0){
            // hiển thị thông báo không tim thấy

            $message = "Không tìm thấy từ khóa yêu cầu: " . " '" . $keyWord ."'";
            return view('front.search.result',compact('PageInfo', 'message'));
            
        }else{
            //hiển thị trang tìm kiếm cho người dùng
            $message = "Các bài viết với từ khóa: '" . $keyWord ."'"; 
            return view('front.search.result', compact('PageInfo','News', 'message'));
        }
    
       
    }


    /// Trang lien he
}