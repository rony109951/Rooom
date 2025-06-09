<?php 
$ApiKey5sim        = "ab9d0b22d0554d42a241b39014bc721f";//5sim
$api_key_super        = "Wh4HHlZTwgR6u2m_LBA7Zj289Kyv8CwDUfn4_68sHa889AzxGsjADw";//super
$ApiKeySmsMan = "wWEKaaUZOhrIXocc1FHi7mmQrVF9muGg";//sms
$Apikeyviotp = "cfeb8a95ecf24bc4a062b70f0f9b438e";//api key حق الفتنامي
if(isset($update)):
        $channel ="-100";
    @$a = explode("\n",$text);
    @$home=[[["text"=>"القائمة الرئيسية","callback_data"=>"home"]]];
    @$bak=[[["text"=>"رجوع 🔙","callback_data"=>"home"]]];
    @$cancel=[[["text"=>"إلغاء ❌","callback_data"=>"home"]]];
    if($a[0] == "كشف"){
    	bot('sendmessage',[
       'chat_id' => $chat_id,
       'text' => "
✅ - رصيد الحساب : ".$point["members"][$a[1]]["point"]

       ]);
       }
       if($a[0] == "فك" and isset($a[1])){
    	bot('sendmessage',[
       'chat_id' => $chat_id,
       'text' => "
تم الفك بنجاح"
       ]);
    	unset($info[$a[1]]["checker"]);
        save($info);
    	
   }
    if($a[0] == "شحن" and isset($a[2])){
    	bot('sendmessage',[
       'chat_id' => $chat_id,
       'text' => "
✅ - تم إعادة شحن الحساب.
✅ - ".$a[1]."
↪️ - ".$a[2]."
➡️ - ".($point["members"][$a[1]]["point"] +  $a[2])
       ]);        
    
        sendd("تم شحن حسابك");
        
         
    	$point["members"][$a[1]]["point"]  +=   $a[2];
        save($point , "point");
   
      }
    if($a[0] == "خصم" and isset($a[2])){
    	bot('sendmessage',[
       'chat_id' => $chat_id,
       'text' => "
✅ - تم الخصم من الحساب.
✅ - ".$a[1]."
↪️ - ".$a[2]."
➡️ - ".($point["members"][$a[1]]["point"] -  $a[2])
       ]);
       
       $point["members"][$a[1]]["point"]  -=   $a[2];
        save($point , "point");
        
        }
   
    if ( $text == "/start" ):
    $balance = explode(":",file_get_contents("http://api2.5sim.net/stubs/handler_api.php?api_key=".$ApiKey5sim."&action=getBalance"))[1];
    $balance2 = explode(":",file_get_contents("http://api.sms-man.com/stubs/handler_api.php?api_key=".$ApiKeySmsMan."&action=getBalance"))[1];
    $api99 = file_get_contents("https://api.viotp.com/users/balance?token=$Apikeyviotp");
    $balance3 = json_decode($api99,true);
    $balance3 = ceil(($balance["data"]["balance"] / 22000) * 64);

        send(
            "
🪗 - اهلا وسهلا مطوري 
☑️ ⁞ المطور روني @VlP_l1 تغيير حقوقي دليل فشلك 😭😂
☑️ - هذة هي قائمة التحكم الخاصه بالبوت 💁🏻.
",
            [
                [["text" => '☑️ - إضافة دولة.', "callback_data" => 'addnum'],                                
                ["text" => '📛 - حذف دولة .', "callback_data" => 'delcon']],
                [["text" => '✅ - اضافة رقم جاهز.', "callback_data" => 'make_ready'],
                ["text" => '📛 - حذف رقم جاهز.', "callback_data" => 'del_ready']],
                [["text"=>"✅ - اضافة رصيد .","callback_data"=>"addpoint"],
                ["text"=>"📛 - خصم رصيد .","callback_data"=>"delpoint"]],
                [["text"=>"👨‍✈️ - اضافة وكيل .","callback_data"=>"add_wak"],
                ["text"=>"👨‍✈️ - حذف وكيل .","callback_data"=>"del_wak"]],
                [["text"=>"♻️ - اضف مورد .","callback_data"=>"add_operator"],
                ["text"=>"🌐 - حذف مورد .","callback_data"=>"del_operator"]],
                [["text"=>"✳️ - اضافة دولة للعروض .","callback_data"=>"add_offer"],
                ["text"=>"♻️ - حذف عروض .","callback_data"=>"del_offer"]],
                [["text" => '🌀 - اضافة كرت', "callback_data" => 'make_card']],
				[["text" => "🔕 - تقييد عضو .", "callback_data" => "unban"],
                ["text" => "🔔 - فك تقييد عضو .", "callback_data" => "unban"]], 
                [["text" => "☑️ - اذاعة نشر .", "callback_data" => "sha"],
                ["text" => "🔘 - اذاعة توجية .", "callback_data" => "shar"]], 
                [["text"=>"👁‍🗨 - إضافة نسبة .","callback_data"=>"add-n"]], 
                [["text"=>"💯 وضع اشتراك اجباري ","callback_data"=>"UsetJ-n"]], 
                [["text"=>"❌ حذف الإشتراك الإجباري","callback_data"=>"UsetJ-d"]], 
                [["text"=>"$stat البوت","callback_data"=>"changeState"]],
                [["text"=>"رصيدك 5sim: ".$balance,"callback_data"=>" l"],
				["text"=>"رصيدك man : ".$balance2,"callback_data"=>" l"]],
				[["text"=>"رصيدك Vio : ".$balance3,"callback_data"=>" l"]],
            ]
        );
        $info[$chat_id]['mode']=null;
        save($info);
        exit;
    
    elseif ( $data == "home" ):
    $balance = explode(":",file_get_contents("http://api2.5sim.net/stubs/handler_api.php?api_key=".$ApiKey5sim."&action=getBalance"))[1];
    $balance2 = explode(":",file_get_contents("http://api.sms-man.com/stubs/handler_api.php?api_key=".$ApiKeySmsMan."&action=getBalance"))[1];
    $api99 = file_get_contents("https://api.viotp.com/users/balance?token=$Apikeyviotp");
    $balance3 = json_decode($api99,true);
    $balance3 = ceil(($balance["data"]["balance"] / 22000) * 64);
        edit(
            "اهلا وسهلا بك عزيزي المطور". 
            "الاوامر امامك اختر ماتريد",
            [
                [["text" => '☑️ - إضافة دولة.', "callback_data" => 'addnum'],                                
                ["text" => '📛 - حذف دولة .', "callback_data" => 'delcon']],
                [["text" => '✅ - اضافة رقم جاهز.', "callback_data" => 'make_ready'],                                
                ["text" => '📛 - حذف رقم جاهز.', "callback_data" => 'del_ready']],
                [["text" => '🌀 - اضافة كرت', "callback_data" => 'make_card'],                           
                ["text" => "🔔 - فك تقييد عضو .", "callback_data" => "unban"]],                               
                [["text"=>"✅ - اضافة رصيد .","callback_data"=>"addpoint"],                              
                ["text"=>"📛 - خصم رصيد .","callback_data"=>"delpoint"]],                               
                [["text"=>"👁‍🗨 - إضافة نسبة .","callback_data"=>"add-n"]], 
                [["text"=>"♻️ - اضف مورد .","callback_data"=>"add_operator"],
                ["text"=>"🌐 - حذف مورد .","callback_data"=>"del_operator"]],
                [["text"=>"✳️ - اضافة دولة للعروض .","callback_data"=>"add_offer"],
                ["text"=>"♻️ - حذف عروض .","callback_data"=>"del_offer"]],
                [["text"=>"👨‍✈️ - اضافة وكيل .","callback_data"=>"add_wak"],
                ["text"=>"👨‍✈️ - حذف وكيل .","callback_data"=>"del_wak"]],
                [["text"=>"💯 وضع اشتراك اجباري ","callback_data"=>"UsetJ-n"]], 
                [["text"=>"❌ حذف الإشتراك الإجباري","callback_data"=>"UsetJ-d"]], 
                [["text"=>"$stat البوت","callback_data"=>"changeState"]],
                [["text"=>"رصيدك 5sim: ".$balance,"callback_data"=>" l"]],
                [["text"=>"رصيدك man : ".$balance2,"callback_data"=>" l"]],
                [["text"=>"رصيدك Vio : ".$balance3,"callback_data"=>" l"]],
            ]
        );
        $info[$chat_id]['mode']=null;
        save($info);
        exit;
        
        elseif($data == 'UsetJ-n'):
    	edit("
    🗯️ ارسل معرف القناة ثم ارفع البوت ادمن فيها
");
	$info[$chat_id]['mode']='putJoin';
        save($info);
        exit;
    
    	elseif(preg_match("/^@\w+$/",$text) && $info[$chat_id]['mode']=='putJoin'):
    	bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
    ✅ تم وضع القناة $text
    "
    ]);
    $info[$chat_id]['mode']=null;
    $numbers["join"] = $text;
     save($numbers , "numbers");
        save($info);
        exit;
    
    elseif($data == 'UsetJ-d'):
    	edit("
✅ تم حذف الإشتراك الإجباري 
");
	    $numbers["join"] = '';
     save($numbers , "numbers");
        exit;
    
        elseif($data == "delcon") :
           edit("
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*☑️ - ارسل مفتاح الدوله المراد حذفها.*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
" , 
            );    
           $info[$chat_id]["mode"] = "delcon";
           save($info);
exit;
elseif(isset($text) && $info[$chat_id]["mode"] == "delcon"):
if(isset($numbers["num"][$text])){
          
          send("تم حذف دوله ".$numbers["num"][$text]["name"]);
          unset($numbers["num"][$text]);
          save($numbers , "numbers");
          }else{
          send("هذه الدوله غير موجوده");
          }
         
             $info[$chat_id]["mode"] = null;
             save($info);
exit;
        elseif($data == "sha") :
           edit("
*✅ ⁞ ارسل ما تريد ارساله للجميع*
" , 
            );    
           $info[$chat_id]["mode"] = "sha";
           save($info);
exit;
elseif(isset($message) && $info[$chat_id]["mode"] == "sha"):
          send("تمت الاذاعه" , );
             for($i=0;$i<count($members); $i++){
bot('copyMessage', [
'chat_id'=>$members[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
             $info[$chat_id]["mode"] = null;
             save($info);
exit;
elseif($data == "shar") :
           edit("
ارسل ما تريد تحويله للجميع
" , 
            );    
           $info[$chat_id]["mode"] = "shar";
           save($info);
exit;
elseif(isset($message) && $info[$chat_id]["mode"] == "shar"):
          send("تمت التحويل" , );
             for($i=0;$i<count($members); $i++){
bot('forwardMessage', [
'chat_id'=>$members[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
             $info[$chat_id]["mode"] = null;
             save($info);
exit;
        elseif($data == "add_wak") :
           edit("*☑️ - مرحبا بك عزيزي المطور بقسم الوكلاء لإضافة وكيل جديد يرجئ ارسال حقوق حساب الوكيل ليتم اضافتة مثال 👇:*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*▪️- اسم الوكيل.*
*▪️ - ايدي حساب الوكيل.*
*▪️- يوزر الوكيل.*" ,
            );    
           $info[$chat_id]["mode"] = "add_wak";
           save($info);
exit;
elseif(isset($a[2]) && $info[$chat_id]["mode"] == "add_wak"):
          send("تم حفظ الوكيل" , );
             $numbers["wak"][$a[1]]["name"] = $a[0];
             $numbers["wak"][$a[1]]["user"] = str_replace('@','',$a[2]);
             $numbers["wak"]["ids"][] = $a[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = null;
             save($info);
exit;
elseif($data == "del_wak") :
           edit("
قم بارسال ايدي الوكيل المراد حذفه
" , 
            );    
           $info[$chat_id]["mode"] = "del_wak";
           save($info);
exit;
elseif(preg_match("/[0-9]+/",$text) && $info[$chat_id]["mode"] == "del_wak"):
          send("تم حذف الوكيل" , );
             unset($numbers["wak"][$text]);
             for($i=0;$i<count($numbers["wak"]["ids"]);$i++)
             {
             	if($numbers["wak"]["ids"][$i] == $text)
             	{
             		unset($numbers["wak"]["ids"][$i] );
        	     }
             }
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = null;
             save($info);
exit;
        elseif($data == "changeState") :
        file_put_contents("stat.txt",$stat == "تشغيل"?"ايقاف":"تشغيل");
           edit($stat == "تشغيل"?"تم تشغيل البوت" :"تم ايقاف البوت", 
            [
                  [['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]],                            
          ]);    
           $info[$chat_id]["mode"] = "addnum";
           save($info);
exit;
elseif($data == "addnum") :
           edit("*☑️ - ارسل إسم الدولة الذي سيظهر للمستخدمين مع إسمها في الموقع بالشكل التالي :*

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
*اليمن 🇾🇪*
*yemen*" , 
            [
                    [["text"=>"القائمة الرئيسية 🏡", "callback_data"=>"home"]],
          ]);    
           $info[$chat_id]["mode"] = "addnum";
           save($info);
exit;

elseif(preg_match("/[A-z0-9]+/",$a[1]) && $info[$chat_id]["mode"] == "addnum"):
          send("*☑️ - قم بإختيار السيرفر الذي تريد إضافة الدولة الية .*" , [
          
                    [["text" => 'إضافة دوله للسيرفيرات',"callback_data"  => 'con#Erub']], 
                    [["text" => 'إضافة دوله لواتساب المميز',"callback_data"  => 'con#Africa']],         
                    [["text"=>"القائمة الرئيسية 🏡", "callback_data"=>"home"]],
         ]);
             $numbers[$chat_id]["name"] = $a[0];
             $numbers[$chat_id]["name2"] = $a[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addcon";
             save($info);
exit;

elseif($ex[0] == "con" &&  preg_match("/[A-z]+/",$ex[1]) && $info[$chat_id]["mode"] == "addcon"):
          edit("*☑️ - قم بإختيار المورد الذي تريد إضافة الدولة الية .*" , [
          
                  [["text" => '🔰 - مورد 5sim .', "callback_data" => 'ser#5sim']],                                
                  [["text" => '🔰 - مورد SMS-MAN .', "callback_data" => 'ser#man']],
                  [["text" => '🔰 - مورد Soper .', "callback_data" => 'ser#super']],
                  [["text"=>"القائمة الرئيسية 🏡", "callback_data"=>"home"]],
             ]);
             $numbers[$chat_id]["con"] = $ex[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addser";
             save($info);
exit;      


elseif($ex[0] == "ser" &&  preg_match("/[A-z0-9]+/",$ex[1]) && $info[$chat_id]["mode"] == "addser"):
          edit("حسنا قم بإرسال مفتاح الدولة مثال :-\n اليمن ( 967 )" , [
          
                    [["text" => 'مفاتيح الدول 🚩', "callback_data" => 'countrys']],                                                  
         ]);
         
             $numbers[$chat_id]["ser"] = $ex[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addkey";
             save($info);
exit;

elseif(preg_match("/[0-9]+/",$text) && $info[$chat_id]["mode"] == "addkey"):
          send("تم الحفظ ✔" , $home);
                     
         
             $numbers["num"][$text]["name"]         = $numbers[$chat_id]["name"];
             $numbers["num"][$text]["con"]            = $numbers[$chat_id]["con"];
             if(!in_array($numbers[$chat_id]["ser"],$numbers["num"][$text]["ser"])){
             	$numbers["num"][$text]["ser"][]            = $numbers[$chat_id]["ser"];
             }
             if($numbers[$chat_id]["ser"] == "5sim"){
             	$numbers["num"][$text]["site-name"] = $numbers[$chat_id]["name2"];
             }
             $numbers["num"][$text]["con-key"]     = $numbers[$chat_id]["name"];
             save($numbers , "numbers");
             unset($info[$chat_id]["mode"]); 
             save($info);
exit;
            
#//////#
elseif($data == "add_offer") :
           edit("ارسل اسم الدوله" , 
            );    
           $info[$chat_id]["mode"] = "add_offer";
           save($info);
exit;

elseif(preg_match("/[A-z0-9]+/",$a[1]) && $info[$chat_id]["mode"] == "add_offer"):
          send("حسنا عزيزي اختر البرنامج 🚩" , [
          
                    [                
                    ["text"=>"-  واتساب . 🌧", "callback_data"=>"con#wa#whatsapp"]
                ],
                [
                    ["text"=>"-  تيليجرام . ☂", "callback_data"=>"con#tg#telegram"],
                    ["text"=>"-  فيسبوك . 🚀", "callback_data"=>"con#fb#facebook"]
                ],
                [
                    ["text"=>"- إيمو . 💥", "callback_data"=>"con#im#imo"],
                    ["text"=>"- جوجل .  💫", "callback_data"=>"con#go#google"]
                ],
                [
                    ["text"=>"-  انستقرام . ⛱", "callback_data"=>"con#ig#instagram"],
                    ["text"=>"-  تويتر . 🧳", "callback_data"=>"con#tw#twitter"]
                ],
                [
                    ["text"=>"-  يلاشات . ☄", "callback_data"=>"con#yl#yalla"],
                    ["text"=>"-  فايبر . 💫", "callback_data"=>"con#fa#viber"]
                ],
                [                
                    ["text"=>"القائمة الرئيسية 🏡", "callback_data"=>"home"]
                ]
         ]);
             $numbers[$chat_id]["name"] = $a[0];
             $numbers[$chat_id]["name2"] = $a[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addcon2";
             save($info);
exit;

elseif($ex[0] == "con" &&  preg_match("/[A-z]+/",$ex[1]) && $info[$chat_id]["mode"] == "addcon2"):
          edit("حسنا عزيزي قم باختيار السيرفر 💻" , [
          
                  [["text" => '🔰 - مورد 5sim .', "callback_data" => 'ser#5sim']],                                
                  [["text" => '🔰 - مورد SMS-MAN .', "callback_data" => 'ser#man']],
                  [["text" => '🔰 - مورد Soper .', "callback_data" => 'ser#vak']],                           
             ]);
             $numbers[$chat_id]["con"] = $ex[1]."#".$ex[2];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addser2";
             save($info);
exit;      


elseif($ex[0] == "ser" &&  preg_match("/[A-z0-9]+/",$ex[1]) && $info[$chat_id]["mode"] == "addser2"):
          edit("حسنا قم بإرسال مفتاح الدولة مثال :-\n اليمن ( 967 )" , [
          
                    [["text" => 'مفاتيح الدول 🚩', "callback_data" => 'countrys']],                                                  
         ]);
         
             $numbers[$chat_id]["ser"] = $ex[1];
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addkey2";
             save($info);
exit;

elseif(preg_match("/[0-9]+/",$text) && $info[$chat_id]["mode"] == "addkey2"):
          send("قم بارسال السعر" , $home);
             $numbers[$chat_id]["key"] = $text;
             save($numbers , "numbers");
             $info[$chat_id]["mode"] = "addprice";
             save($info);
exit;
elseif(preg_match("/[0-9]+/",$text) && $info[$chat_id]["mode"] == "addprice"):
          send("تم الحفظ" , $home);
             $numbers["offers"][$numbers[$chat_id]["key"]]["name"]         = $numbers[$chat_id]["name"];
             $numbers["offers"][$numbers[$chat_id]["key"]]["con"]            = $numbers[$chat_id]["con"];
             if(!in_array($numbers[$chat_id]["ser"],$numbers["num"][$text]["ser"])){
             	$numbers["offers"][$numbers[$chat_id]["key"]]["ser"][]            = $numbers[$chat_id]["ser"];
             }
             if($numbers[$chat_id]["ser"] == "5sim"){
             	$numbers["offers"][$numbers[$chat_id]["key"]]["site-name"] = $numbers[$chat_id]["name2"];
             }
             $numbers["offers"][$numbers[$chat_id]["key"]]["price"]     = $text;
             $numbers["offers"][$numbers[$chat_id]["key"]]["con-key"]     = $numbers[$chat_id]["name"];
             save($numbers , "numbers");
             unset($info[$chat_id]["mode"]);
exit;
#//////#
elseif($ex[0] == "send") :
edit("ارسل رسالتك الآن",$home);
$info[$chat_id]["mode"]    =   "id";
$info[$chat_id]['mid']     = $ex[2];
$info[$chat_id]['idmem']   = $ex[1];
save($info);
exit;
elseif($message && $chat_id == $admin && $info[$chat_id]["mode"]  == "id") :
       bot('sendmessage',[
       'chat_id' => $info[$chat_id]['idmem'],
       'text' => "تم الرد على رسالتك الرد 👇👇",
       'reply_to_message_id' => $info[$chat_id]['mid']
       ]);
       bot(copymessage,[
            chat_id=>$info[$chat_id]['idmem'],
            message_id=>$message_id,
           from_chat_id=>$admin,
'reply_to_message_id' => $info[$chat_id]['mid']
       ]);
     exit;

elseif($data == "unban"):
edit("ارسل آيدي العضو",$home);
$info[$chat_id]['mode'] = "ok";
save($info);
exit;

elseif(preg_match("/\d+/",$text) && $info[$chat_id]['mode'] =="ok" ) :
send("تم الغاء التقييد بنجاح ✅",$home);
unset($info[$text]['check']);
save($info);
unset($readynumber[$text]["buy"]);
save($readynumber , "readynum");
exit;
    
    elseif ( $data == "make_card" ) :
        edit("قم بارسال فئة الكرت ",$home);
        $info[$chat_id]["mode"]     =   "make_code";
        save($info);
        exit;
       elseif (  $text and $text != null && $info[$chat_id]['mode'] == "make_code" ) :
       send ( "قم بإرسال الكمية");

        $info[$chat_id]['price']    =   filter_var($text,FILTER_VALIDATE_INT);
        $info[$chat_id]['mode'] = "amount";
        save($info);
    elseif ( $text && $text != null && $info[$chat_id]['mode'] == "amount" ) :
        send("جاري الانشاء....");
        $info[$chat_id]['amount'] = filter_var($text, FILTER_VALIDATE_INT);
        $info[$chat_id]["mode"]     =   null;
        save($info);
        send("تم الانشاء");
        send("تم انشاء " . $info['amount'] . " بطاقة وبسعر" . $info['price'] ." يمكنك الآن تنويه المستخدمين لشراء بطائق من متجر كروت الشحن"
        ,$home);
        $codes  =   substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOBQRSTUVWXYZ"), 1, 10);
        $numbers['cards'][$codes]['price'] = $info[$chat_id]['price'];
        $numbers['cards'][$codes]['amount'] = $info[$chat_id]['amount'];
        save($numbers,"numbers");
        exit;
    elseif($data == 'make_ready'):
edit("
*🌷 اضف الرقم بالشكل التالي*
*الاسم :- *
*السعر :- *
*الحالة :- *
*ملاحضة :- *
*الرقم :-*
*الكود :- *
",$home );
$info[$chat_id]['mode'] = 'ready';
save($info);
exit;

elseif($text && $info[$chat_id]['mode'] == 'ready' ) :
$explode        = explode("\n",$text);
if(isset($explode[4])){
$country         = $explode[0];
$price             = $explode[1];
$now             = $explode[2];
$what             = $explode[3];
$number             = $explode[4];
$num =              substr($number, 0,-4)."••••";
$code             = $explode[5];
$pk                  = rand(1,100980077);
$readynumber['ready'][$pk]['country'] = $country;
$readynumber['ready'][$pk]['price'] = $price;
$readynumber['ready'][$pk]['now'] = $now;
$readynumber['ready'][$pk]['what'] = $what;
$readynumber['ready'][$pk]['number'] = $number;
$readynumber['ready'][$pk]['code'] = $code;
save($readynumber,"readynum");
sendd($channel , "

☑ ¦ تم إضافه رقم جاهز لقسم الأرقام الجاهزة🍁

🌏 ¦ الدولة:  $country
💰 ¦ السعر: $price
☎️ ¦  الرقم:  $num
🌀 ¦ الحالة: $now
", [
   [
         ["text"=>"⏮ ⁞ إضغط هنا لشراء الرقم. ☑️","url"=>"https://t.me/$bot?start=buy#$pk"]]
 ]);

send("*تم إضافة رقم جديد الى قسم الأرقام الجاهزة بنجاح! ✅

🏴 الدولة: $country
💸 السعر: ₽ $price
📞 الرقم: $num
✨ الحالة: $now
💳 كود السلعة  $pk *
",$home);
$info[$chat_id]['mode'] = null;
save($info);
}
exit;

elseif($data == "del_ready") :
$keyboad['inline_keyboard'][] = [['text'=>'حذف السلعة ⛔','callback_data'=>'no'],['text'=>'السعـــر💲','callback_data'=>'no'],['text'=>'الدولة 🏴','callback_data'=>'no']];
foreach($readynumber['ready'] as $key => $nhh ):
$con =   $nhh["country"];
$price = $nhh["price"];
$code = substr($key,0,8);

$keyboad['inline_keyboard'][] = [['text'=>"$key",'callback_data'=>"del#$key"],['text'=>$price . ".00₽",'callback_data'=>"no"],['text'=>"$con",'callback_data'=>"no"]];
endforeach;
$keyboad['inline_keyboard'][] = [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"readynumbers"],['text'=>'القائمة الرئيسية 🏡',"callback_data"=>"home"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' => "
اختر الدولة الذي تريد حذفها ❌
",
'reply_markup'=>json_encode($keyboad)
]);
exit;

elseif($ex[0] == "del" ):
edit("تم حذف السلعة بنجاح ✔",$home);
unset($readynumber["ready"][$ex[1]]);
save($readynumber,"readynum");
exit;

    elseif ( $data == "addpoint" ):
        edit("قم بإرسال إيميل الشخص المراد إرسال النقاط له",$cancel);
        $info[$chat_id]["mode"] =   "sendpoint";
        save($info);
        exit;
    elseif ( preg_match("/^[A-z0-9\.]*@*[A-z]+\.[A-z]+$/",$text) && $info[$chat_id]["mode"] == "sendpoint" ):
        $info[$chat_id]["mode"] =   "sendpoint";
        $info[$chat_id]["email"] =   $text;
        save($info);
        send("قم باسال الرصيد الذي تريد اضافته",$cancel);
        exit;
    elseif ( preg_match("/\d+/",$text) && $info[$chat_id]["mode"] == "sendpoint" ):
        if( is_numeric($text) ):
            $donor   =   $check[$info[$chat_id]["email"]]["idd"];
            $receive = $refral[$check[$info[$chat_id]["email"]]["idd"]]["ref"];
            $idrec     = $check[$receive]["idd"];
            $point["members"][$info[$chat_id]["email"]]["point"]  +=   $text;
            save($point , "point");
            if($point["members"][$receive]["point"] >= 50) {
            $point["members"][$receive]["point"] += 0.1 * $text;
            save($point , "point"); }
            $info[$chat_id]["mode"]             =   null;     
            save($info);
            send(" اكتملت عملية الشحن بنجاح ✔",$home);
            sendd($donor ,"*- عزيزي العميل 🙋🏻‍♂.*

*✅ - تم إعادة شحن حسابك ب مبلغ$text\nروبل*
*↩️ - رصيدك الأن : " .
            $point["members"][$info[$chat_id]["email"]]["point"] . " روبل*");
            
            sendd($idrec , "🎊 مفاجأه  \n 💡 لقد قام أحد فريقك بشحن حسابة وربحت $po روبل 💰");
            unset($info[$chat_id]["email"]);
            unset($info[$chat_id]["mode"]);
            save($info);
           else :
           send("قم بارسال قيمة رقمية وليس نص ",$home);
           endif;
        
    elseif ( $data == "delpoint" ):
        edit("قم بإرسال إيميل الشخص المراد خصم النقاط منه",$cancel);
        $info[$chat_id]["mode"] =   "delpoint";
        save($info);
        exit;
    elseif ( preg_match("/^[A-z0-9\.]*@*[A-z]+\.[A-z]+$/",$text) && $info[$chat_id]["mode"] == "delpoint" ):
        $info[$chat_id]["mode"] =   "delpoint2";
        $info[$chat_id]["email"] =   $text;
        save($info);
        send("قم باسال الرصيد الذي تريد خصمه",$cancel);
        exit;
    elseif ( preg_match("/\d+/",$text) && $info[$chat_id]["mode"] == "delpoint2" ):
        if( is_numeric($text) ):
            $donor   =   $check[$info[$chat_id]["email"]]["idd"];
            $receive = $refral[$check[$info[$chat_id]["email"]]["idd"]]["ref"];
            $idrec     = $check[$receive]["idd"];
            $point["members"][$info[$chat_id]["email"]]["point"]  -=   $text;
            save($point , "point");
            $info[$chat_id]["mode"]             =   null;     
            save($info);
            send("تم الخصم",$home);
            sendd($donor , "☑️ تم خصم رصيد من حسابك مبلغ  $text روبل\n ↩️ رصيدك الأن : " .
            $point["members"][$info[$chat_id]["email"]]["point"] . " روبل" );
            unset($info[$chat_id]["email"]);
            unset($info[$chat_id]["mode"]);
            save($info);
           else :
           send("قم بارسال قيمة رقمية وليس نص ",$home);
           endif;
        
    elseif ( $data == "getcodes" ):
        foreach ( $numbers["numbers"] as $code=>$num ):
            $result .=   $num["name"] . " [ <code> " . $code . "</code><br/>]";
        endforeach;
        edit($result,$home);
    

elseif($data == "add_operator" ):
edit("قم بارسل اسم وقيمة المورد بالطريقة التالية
`مورد 1
virt1`

",$cancel);
$info[$chat_id]["mode"] = "op";
save($info);
exit;

elseif($text && $info[$chat_id]["mode"] == "op" ) :
$pk = rand(1,100980077);
$exx = explode( "\n" , $text);
if(preg_match("/[A-z]/" , $exx[1]) ){
send("تم الحفظ \n اسم المورد $exx[0] \n الكود : `$pk`",$home);
$info["operator"][$pk]["name"] = $exx[0];
$info["operator"][$pk]["val"] = $exx[1];
save($info);
unset($info[$chat_id]["mode"]);
save($info);
}
exit;

elseif($data == "del_operator") :
$json["inline_keyboard"][]  =   [["text"=>"اسم المورد ♨️","callback_data"=>"hello"],["text"=>"القيمة 🛑","callback_data"=>"hmm"]];
foreach($info["operator"] as $k => $v):
$name = $info["operator"][$k]["name"];
$val  = $info["operator"][$k]["val"];
$json["inline_keyboard"][]  =   [["text"=>"$name","callback_data"=>"hello"],["text"=>"","callback_data"=>"delope#$k"]];
endforeach;
bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"اختر المورد الذي تريد حذفه 🗑",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
     exit;
     
elseif($ex[0] == "delope"):
unset($info["operator"][$ex[1]]);
save($info);
edit("تم الحذف بنجاح ✔");
exit;

elseif(preg_match("/[0-9]/", $text)&& $info[$chat_id]["mode"] == "del_op" ) :
if($info["operator"][$text]["name"] != null){
unset($info["operator"][$text]["name"]);
unset($info["operator"][$text]["val"]);
unset($info[$chat_id]["mode"]);
save($info);
send("تم الحذف");
} else {
send("المورد الذي قمت بارسالة غير موجود",$home);
}

elseif($data == "add-n"):
edit("ارسل النسبة التي تريد اضافتها الآن",$cancel);
$info[$chat_id]["mode"] = "hmm";
save($info);
exit;

elseif(is_numeric($text) and $info[$chat_id]["mode"] == "hmm"):
if($text >= 1 && $text < 99 ){
send("تم حفظ النسبة بنجاح✔");
$info["nesbah"] = $text;
unset($info[$chat_id]["mode"]);
save($info);
} else {
send("الرجال ادخال رقم اقل من 100");
}
#==============#
elseif($ex[0] == "deloffer") :
edit("تم الحذف");
                unset($numbers["offers"][$ex[1]]);
                save($numbers , "numbers");
                exit;
elseif($data == "del_offer") :
$e = 0;
$json = [];
                $json["inline_keyboard"][$e]  =   [["text"=>"🌎 ⌯ الدولة.","callback_data"=>"hello"],["text"=>"⏬ ⌯ البرنامج.","callback_data"=>"hmm"],["text"=>"💰⌯ السعر.","callback_data"=>"Alwalidee"]];
                $e++;
foreach($numbers["offers"] as $key => $val) :    
                       
                       $ser  = $numbers["offers"][$key]["ser"];   
                       $con = $numbers["offers"][$key]["con"];   
                      
                       
if($ser == "5sim")  : $app  = explode("#",$con)[1];  else   : $app  = explode("#",$con)[0];
                      endif;   
                  	$name      = $numbers["offers"][$key]["name"];
                  	$price      = $numbers["offers"][$key]["price"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>$name ,"callback_data"=>"deloffer#$key"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>explode("#",$con)[1] ,"callback_data"=>"deloffer#$key"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>$price ,"callback_data"=>"deloffer#$key"];
                      $e++;
endforeach;
                $json["inline_keyboard"][]  =   [["text"=>"القائمة الرئيسية 🏡","callback_data"=>"home"]] ;
                 bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"⏬ - قائمة العروض المتوفرة بالبوت. ☑️",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
        
     exit;
#==============#
endif;
    #====================================================================#
else:
    die("@Baageel_Programmer");
endif;

