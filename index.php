<?php  

    $a = 10 ;
    $b = 20 ;
    constant $gyy = 5;
    // constant($gyy, 5);



    class me{
        public $me = 0 ;
        public function construct($hii)
        {
            $this->model = $hii;
        }
    }

    $s = 2.4;
    $s2 = "hiii";
    $s3 = true;
    $s4 = [3,4,5,5,];
    $s5 = new me();
    $s6 = null;
    $s7 = new me("Bmw");
    $myfile = fopen("kunal.txt","r") or die("Unable to open file");
    echo "<pre>";
    var_dump($d);
    // var_dump($a);
    // var_dump($s);
    // var_dump($s2);
    // var_dump($s3);
    // var_dump($s4);
    // var_dump($s5);
    var_dump($s6);
    var_dump($s7);
    var_dump($myfile);
    echo "</pre>";
//Static variable
    // static $a = 0;
    // function myFunction(){
    //     $a++;
    //     echo $a;
    // }

    // myFunction();
    // myFunction();
//File
    // echo readfile("kunal.txt");
    // $filename = "kunal.txt";
    // $text = "kunal = husar";
    // // Reading the file
    // $myfile = fopen("kunal.txt","r") or die("Unable to open file");
    // var_dump($myfile);

    // fwrite($myfile,$text);

    // // while( !feof($myfile)){
    // //     echo fgets($myfile)."<br>";
    // //     }

    // fclose($myfile);

    // // Reading the file
    // $myfile = fopen("kunal.txt","r") or die("Unable to open file");
    // while( !feof($myfile)){
    // echo fgets($myfile)."<br>";
    // }
    // fclose($myfile);
    
    // // Reading the file
    // $myfile = fopen("kunal.txt","r") or die("Unable to open file");
    // echo fgets($myfile)."<br>";
    // fclose($myfile);

    // // Reading the file
    // $myfile = fopen("kunal.txt","r") or die("Unable to open file");
    // echo fread($myfile,filesize("kunal.txt"))."<br>";
    // fclose($myfile);

//Date
    // echo date("y-m-d ")."<br>";
    // echo date("d/m/y ")."<br>";
    // echo date("y*m*d ")."<br>";
    // echo date("l ")."<br>";

    // echo "&copy; 2010 -".date("y")."<br>";

//Time
    // echo "This time is ".date("h :i sa")."<br>";    
    // echo date_default_timezone_get()."<br>";
    // echo  date("h-m : d-m-y",mktime(8,00,00,18,12,19)).'<br>';
    
    // echo  date("h-m : d-m-y",strtotime('tomorrow')).'<br>';
    // echo  "Next sunday ".date("d-m-y",strtotime('next sunday')).'<br>';
    // echo  date("h-m : d-m-y",strtotime('+3 day')).'<br>';
    // echo  date("h-m : d-m-y",strtotime('+3 month')).'<br>';

    // $startdate = strtotime("saterday");
    // $enddate = strtotime("+7 week",$startdate);

    // while( $startdate < $enddate ){
    //     echo  date("d",$startdate).'<br>';
    //     $startdate = strtotime("+1 week",$startdate);
        
    // }

    // $d1 = strtotime("23 dec");
    // $d2 = ceil(($d1-time())/60/60/24);

    // echo  "there are total ".$d2." Day remain.".'<br>';
    
    // H - 24-hour format of an hour (00 to 23)
    // h - 12-hour format of an hour with leading zeros (01 to 12)
    // i - Minutes with leading zeros (00 to 59)
    // s - Seconds with leading zeros (00 to 59)
    // a - Lowercase Ante meridiem and Post meridiem (am or pm)

//static methods
    // class greeting{
    //     public static function welcome(){
    //         echo "Hello static";
    //     }
    // }

    // greeting::welcome();

// Using trait and 'use' - keywords     
    // trait fruit{
    //     public $qty;
    //     public $name;
        
    //     public function info(){
    //         echo "This fruit is {$this->name}. and we have {$this->qty} {$this->name} of bread {$this->bread}.";
    //     }
    // }
    //
    // class mango {
    //     public $bread;
    //     use fruit;
    //     public function __construct($name,$qty,$bread)
    //     {
    //         $this->name = $name;
    //         $this->qty = $qty;
    //         $this->bread = $bread;            
    //     }
    // }
    //
    // $mango = new mango("mango",3,"kesar");
    // $mango->info();
    

    // abstract class fruit{
    //     public $qty;
    //     public $name;
    //     const MESSAGE = "fruits are best for health.";

    //     public function __construct($name,$qty)
    //     {
    //         $this->name = $name;
    //         $this->qty = $qty;
    //     }
    //     abstract public function info();
    // }

    // class mango extends fruit{
    //     public $bread;
    //     public function __construct($name,$qty,$bread)
    //     {
    //         $this->name = $name;
    //         $this->qty = $qty;
    //         $this->bread = $bread;            
    //     }

    //     public function info(){
    //         echo "This fruit is {$this->name}. and we have {$this->qty} {$this->name} of bread {$this->bread}.";
    //     }

    //     public function message(){
    //         echo self::MESSAGE;
    //     }

    // }

    // $mango = new mango("mango",3,"kesar");
    // $mango->info();
    // $mango->message();


    // class fruit{
    //     public $qty;
    //     public $name;
    //     const MESSAGE = "fruits are best for health.";

    //     public function __construct($name,$qty)
    //     {
    //         $this->name = $name;
    //         $this->qty = $qty;
    //     }

    //     public function info(){
    //         echo "This fruit is {$this->name}. and we have {$this->qty} {$this->name}";
    //     }

        
    // }

    // class mango extends fruit{
    //     public $bread;
    //     public function __construct($name,$qty,$bread)
    //     {
    //         $this->name = $name;
    //         $this->qty = $qty;
    //         $this->bread = $bread;            
    //     }

    //     public function info(){
    //         echo "This fruit is {$this->name}. and we have {$this->qty} {$this->name} of bread {$this->bread}.";
    //     }

    //     public function message(){
    //         echo self::MESSAGE;
    //     }

    // }

    // $mango = new mango("mango",3,"kesar");
    // $mango->info();
    // $mango->message();


    // class fruit {
    //     public $qty;
    //     public $name;

    //     public function __construct($name,$qty)
    //     {
    //         $this->name = $name;
    //         $this->qty = $qty;
    //     }

    //     public function info(){
    //         echo "This fruit is {$this->name}. and we have {$this->qty} {$this->name}";
    //     }
    // }

    // $mango = new fruit("mango",3);
    // $mango->info();
    
    
    // class fruit {
    //     public $qty;
    //     public $name;

    //     public function info(){
    //         echo "This fruit is {$this->name}";
    //     }
    // }

    // $mango = new fruit();
    // $mango->name = "Mango";
    // $mango->info(); 



    // class polygone{
    //     public $side;
    //     public $length;
        
    //     public function __construct($side = 1,$length = 1) {
    //         $this->side = $side;
    //         $this->length = $length;
    //     }

    //     public function perimeter($side)
    //     {   $pr = 0;
    //         for ($i=0; $i < $side ; $i++) { 
    //             $pr = $side+$side;
    //         }
    //         return $pr;
    //     }
    // }

    // class square extends polygone{
    //     public function area()
    //     {
    //         return $length.$length;
    //     }
    // }

    
    // function areaRect($length,$breath){
    //     return $length * $breath;
    // }
    
    // function perimeterRect($length,$breath){
    //     return 2*($length + $breath);
    // }
    
    // echo areaRect(10,5)."<br>";
    // echo perimeterRect(10,4)."<br>";



    
// function fib($n )
    // {
    //     if($n == 1)
    //         return 0;
    //     else if($n == 2)
    //         return 1;
    //     else 
    //         return fib($n-2)+fib($n-1);
    // } 
    // echo fib(7);

    //Arithmaical oprater
    // echo $a+$b."<br>";
    // echo $a-$b."<br>";
    // echo $a*$b."<br>";
    // echo $a/$b."<br>";

    //Logical oprater and if condition 
    // if(($a+10 == $b ||  $a != $b) && $a > $b){
    //     echo "condition true"."<br>";
    // }
    // else{
        
    //     echo "condition  false"."<br>";
    // }

    //Factorial program
    // function factorial($n){
        
    //     if($n==0 || $n == 1)
    //     {
    //         return 1;
    //     }
    //     else
    //     {
    //         return $n*factorial($n-1);
    //     }

    // }   
    //  echo factorial(5);

    //Prime number 
    // function is_prime($n){
    //     $count = 0; 
    //     $i = 2;
    //     while($i != $n){
    //         if($n % $i == 0){
    //             $count = 1;
    //         }
    //         $i++;
    //     }


    //     if($count == 0)
    //     {
    //         echo "it is prime number";
    //     }else{
    //         echo "it is not a prime number";
    //     }
    // }
    // function is_prime($n){
        
    //     if( ){

    //     }
    //     else{
    //         return 
    //     }
    // }

    // echo is_prime(23);



//     function check($n){
           
//                 if($n % 2 == 0){
//                     echo $n." is even";
//                 }else
//                 echo $n." is odd";
                
    
// }

//    check(23);


//     function check($n){
           
//                 if($n >0 ){
//                     echo $n." is poistive";
//                 }else
//                 echo $n." is negative";
                
    
// }

//    check(24);


















?>