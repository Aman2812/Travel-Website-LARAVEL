<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class newController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function getPosts(){
        $posts=DB::table('post')->get();
        return $posts;
    }


    public function index($id)
    {
        return "This is my file".$id;
    }


    public function signup()
    {
        return view('signup');
    }

        public function Login2()
    {
        return view('Login2');
    }
 
 //For all 9 destination 
       public function destination1()
    {
        return view('Destination1');
    }
 

      public function destination2()
    {
        return view('Destination2');
    }
 
       public function destination3()
    {
        return view('Destination3');
    }

        public function destination4()
    {
        return view('Destination4');
    }
 

      public function destination5()
    {
        return view('Destination5');
    }
 
       public function destination6()
    {
        return view('Destination4');
    }


 

 //Hotels

       public function hotel1()
    {
        return view('Destination_1_hotel_1');
    }
 
        public function hotel2()
    {
        return view('Destination_1_hotel_2');
    }
       public function hotel3()
    {
        return view('Destination_1_hotel_3');
    }
 
      public function hotel4()
    {
        return view('Destination_1_hotel_4');
    }
 
        public function hotel5()
    {
        return view('Destination_2_hotel_1');
    }
 
        public function hotel6()
    {
        return view('Destination_2_hotel_2');
    }
       public function hotel7()
    {
        return view('Destination_2_hotel_3');
    }
 
      public function hotel8()
    {
        return view('Destination_2_hotel_4');
    }
 
       public function hotel9()
    {
        return view('Destination_3_hotel_1');
    }
 
        public function hotel10()
    {
        return view('Destination_3_hotel_2');
    }
       public function hotel11()
    {
        return view('Destination_3_hotel_3');
    }
 
      public function hotel12()
    {
        return view('Destination_3_hotel_4');
    }
 


 
//tour and venues, homepage



      public function tours()
    {
        return view('homepage');
    }
 
      public function venues()
    {
        return view('homepage');
    }
 

      public function homepage()
    {
        return view('homepage');
    }
 
 public function manipage()
    {
        return view('mainPage');
    }


     public function about()
    {
        return view('Aboutus');
    }
 

    public function cart()
    {
        return view('cart');
    }
 
     public function sucess()
    {
        return view('Success');
    }
 
















    public function contact()
    {
        $names = ['Sam', 'Jon', 'Leee', 'Donald'];

        /*return view('contact', [
            'people' => $names
        ]);*/

        return view('contact',compact('names'));
    }

    function show_data($name)
    {
        return view('post')->with('name',$name);
        /*return view('post',[
        'name'=>"Nitin"
            ]);
        */
    }




    public function show_post($id,$name,$password=2323)
    {
        //return view('post')->with('id',$id);
        return view('class',compact('id','name','password'));

    }

    function getEmployee(){
        $obj=[
        ['id'=>101,'name'=>'Sam','city'=>'Punjab'],
        ['id'=>102,'name'=>'Lee','city'=>'AP'],
        ['id'=>103,'name'=>'Ford','city'=>'Mzn'],
        ['id'=>104,'name'=>'Lily','city'=>'UP']
        ];

       /*foreach($obj as $o){
            if($o['id']==$id){
                return view('class',[
                    'employee'=>$o
                ]);
            }
        }
       */

        return view('class',[
           'employee'=>$obj
       ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
