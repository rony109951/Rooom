<?php
$tex = explode(" " ,$text);
@$hom=[[["text"=>"إلغاء ⛔","callback_data"=>"settings"]]]; //home
@$backk=[[["text"=>"رجوع ⏯","callback_data"=>"settings"]]]; //home

if($data == "login_pannel") :
$info["members"][$chat_id]["mode"] =   null;
        $info[$chat_id]['mode'] = null; 
        save($info);
        edit( "💠  ⁞  اهلا بك* $fname ؛ 🖤.*

 🛍 ⁞  مرحباً بك في *بوت روني* ، البوت الأول على التليجرام والذي يقوم *بتوفِير خَدمات الأرقام الوهْمية* ل *مواقع التواصل الإِجتماعي* مثل *الواتساب والتيليجرام والفيسبوك وغيره.*
☑️ ⁞ مطور البوت : روني @VlP_l1
 ☑️ ⁞  *بدء الاستخدام بإنشاء حساب* ، اذا لديك حساب من قبل ، *قم بالضغط على زر تسجيل الدخول* ✅." , [
            [
                ["text"=>' ✅ ⁞  تسجيل الدخول .',"callback_data"=>"login"],
                ],
                [
				["text"=>"📥 ⁞  إنشاء حساب جديد .","callback_data"=>"creatacount"],
                ["text"=>"📊 ⁞  احصائيات البوت .","callback_data"=>"botstatic"]
                ],
                [
                ["text"=>"⚠️ ⁞  تعليمات وشروط البوت.","callback_data"=>"infouse"]],
                [
                ["text"=>"📢 ⁞  قناة البوت.","url"=>"t.me/TTJITT"],
                ["text"=>"👨‍✈️ ⁞  إدارة البوت .","url"=>"t.me/TTAVIP"]
                ],
                [
                ['text'=>"⚙ ⁞  الإدارة والدعم الفني",'callback_data'=>"help"]],
            ]);      
        exit;
        
        
exit;
elseif($data == "creatacount") :
$pass = rand(1, 100000);
            if($check[$chat_id]["mail"] == null) {        	
            $info[$chat_id]["check"] = $pass;
            save($info);
        
           $keyboard = keys("",$key);
           bot('editmessagetext',[
           'chat_id' => $chat_id,
           'message_id' => $message_id,
           'text' =>"*🔐 ⁞  لامان حسابك وحماية خصوصيتك.*
           
*🅿️ ⁞  سيتم التحقق من أنك لست روبوت.*
*☑️ ⁞  قم بإدخال كلمة المرور التالية :-* 

🅿️ * $pass * 🅿️",
'parse_mode' => "markdown",
          reply_markup => $keyboard,
    ]);
} else { 
       	answer(" ⁞  يبدو ان لديك حساب من قبل ؟!⚠️
 ⁞  تستطيع الدخول عبر حسابك السابق 🔱.");
       }
    exit;

elseif($ex[0] =="ok" && $info[$chat_id]["stop"] == null) :
$co = $ex[1];
$co .= $ex[2];
$pass = $info[$chat_id]["check"];
         if($ex[1] == "-----")$co="";
         $keyboard = keys($co,$key);
         bot('editmessagetext',[
         'chat_id' => $chat_id,
         'message_id' => $message_id,
         'text' =>"*🔐 ⁞  لامان حسابك وحماية خصوصيتك.*

*🅿️ ⁞  سيتم التحقق من أنك لست روبوت.*
*☑️ ⁞  قم بإدخال كلمة المرور التالية :-* 

🅿️ * $pass * 🅿️",
'parse_mode' => "markdown",
          reply_markup => $keyboard,
    ]);
 exit;
  
elseif(preg_match("/(del)#(\d+)/",$data,$res) && $info[$chat_id]["stop"] == null) :
         $pass = $info[$chat_id]["check"];
         $result = substr($res[2],0,strlen($res[2])-1);
         $keyboard = keys($result,$key);
         bot(editmessagetext,[
         chat_id=>$chat_id,
         'message_id' => $message_id,
         text =>"*🔐 ⁞  لامان حسابك وحماية خصوصيتك.*

*🅿️ ⁞  سيتم التحقق من أنك لست روبوت.*
*☑️ ⁞  قم بإدخال كلمة المرور التالية :-* 
 
🅿️ * $pass * 🅿️",
        "reply_markup" => $keyboard
  ]);
 exit;

elseif(preg_match("/(true)#(\d+)/",$data,$pass) && $info[$chat_id]["stop"] == null) :
           $password = rand(1, 100000);
           $email = substr(str_shuffle("abcdefghijklmnobqrstuvwxyz"), 1, 8);
           $email = "$email@yamen.pro";
if($pass[2] == $info[$chat_id]["check"]){
edit("*🔰✥ تم التحقق وتم انشاء الحساب بنجاح ♻️.*

*✅ ⁞  ايميلك* : *$email* 🔅
*🔐 ⁞  كلمة السر :* *$password*

*⚠️ ⁞  ملاحظه يجب عليك الحذر من مشاركه كلمه السر مع اي احد.*
*🔰 ⁞  تستطيع تغيير كلمه السر باي وقت باي وقت كان.*
*☑️ ⁞ مطور البوت روني : @VlP_l1*
*❇️ ⁞  في حال تم اختراق حسابك لسنا مسؤولون باي شيء .*",[
[
                ["text"=>' ⁞  تسجيل الدخول ♻️',"callback_data"=>"home"]
            ],
            ]);      
sendd("-1002753886752","*☑️ - تم إنشاء حساب جديد في البوت.!🤖*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*✅ - الحساب: $email*
*🔐 - كلمة السر: $password*
*🆔 - أيدي الحساب: ".$chat_id."*
*🔄 - المعرف : @$user*
*🛍 - عدد المشتركين الكلي : $users*
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*"				);
unset($info[$chat_id]["check"]);
unset($info[$chat_id]["mode"] );
save($info);
$check[$chat_id]["mail"] = $email;
$check[$chat_id]["pass"] = $password;
$check[$check[$chat_id]["mail"]]["idd"] = $chat_id;
save($check , "check");
exit;
} else {
answer("خطأ يرجى المحاولة مجددا ❌");
}
exit;
       
       	
        elseif($data == "login"):
        if($check[$chat_id]["mail"] != null){
        $email = $check[$chat_id]["mail"];
        edit("☑️ ⁞  يمكنك *تسجيل الدخول الئ حسابك* من خلال الضغط على زر *دخول البوت*

✅ ⁞  *إذا لم تجد حساب* في الاسفل *قم بإنشاء* حساب عبر زر *إنشاء حساب جديد🌐*" , [
           [
                
                ["text"=>"- $email .","callback_data"=>"home"]
           ],
           [
                ["text"=>"↩️ - رجوع .","callback_data"=>"login_pannel"]
            ]
        ]);
      } else { 
      	answer("⚠️ ⁞ عذرآعزيزي لم تقم بإنشآء حساب من قبل !.
☑️ ⁞ تستطيع إنشاء حساب جديد إنشاء حساب جديد.");
      }
        
        elseif($data == "log") :
        $info[$chat_id]["stop"] = "!";
        save($info);
          $keyboard = keys("",$key);
         bot('editmessagetext',[
         'chat_id' => $chat_id,
         'message_id' => $message_id,
         'text' => "الرجاء إدخال كلمة المرور 🔑

🎛 لنتأكد من أنك صاحب الحساب ☎️",
          reply_markup => $keyboard,
    ]);
       
     elseif($ex[0] == "ok" && $info[$chat_id]["stop"] != null) :
     $co = $ex[1];
     $co .= $ex[2];
         if($ex[1] == "-----")$co="";
        $keyboard = keys($co,$key);
         bot(editmessagetext,[
         'message_id' => $message_id,
         'chat_id' => $chat_id,
         'text' => "الرجاء إدخال كلمة المرور 🔑

🎛 لنتأكد من أنك صاحب الحساب ☎️ ",
          'reply_markup' => $keyboard,
    ]);
    
  exit;
       elseif(preg_match("/(del)#(\d+)/",$data,$res) && $info[$chat_id]["stop"] != nul) :
       $result = substr($res[2],0,strlen($res[2])-1);
       $keyboard = keys($result,$key);
       bot(editmessagetext,[
       'message_id' => $message_id,
        'chat_id' => $chat_id,
         'text' =>"الرجاء إدخال كلمة المرور 🔑

🎛 لنتأكد من أنك صاحب الحساب ☎️",
         'reply_markup' => $keyboard
  ]);
exit;

elseif(preg_match("/(true)#(\d+)/",$data,$pass) && $info[$chat_id]["stop"] != nul) :
         if($pass[2] == $check[$chat_id]["pass"]){
         edit("جار التحقق ...");
         edit("تم التحقق بنجاح ✔" , [
     [
         ["text"=>'✥ متابعة الدخول ✅',"callback_data"=>"home"]
     ]
   ]);
        unset($info[$chat_id]["stop"]);
        save($info);
} else {
answer("خطأ يرجى المحاولة مجددا ☹");
}
exit;
       
       elseif($data == "infouse") :
       edit("⚠️ ⁞  مرحباً عزيزي $fname 🌀 . 

*- اولاً: هذا البوت مخصص لعمل ارقام وهمية لجميع مواقع التواصل الإجتماعي.*
*- ثانياً: هذا البوت لايتحمل مسؤولية الارقام في حالة أنها انسرقت او انحظرت , بمعنى: البوت غير مسؤول عن الرقم بعد شرائه.*
*- يرجى عدم استعمال الارقام في أشياء قد تغضب الله عزوجل او تنحرف عن المسار الاسلامي كالإختراقات والإبتزازات والمعاكسات وغيرها.*

*- تعليمات بسيطة حول البوت:*

*- اولاً: البوت يقوم بشراء الأرقام تلقائياً من موردين بالجملة, ثم يقوم بتجزئتها وبيعها لعملائنا الأكارم, لذلك ياعزيزي نحن لا نستطيع فحص جميع الارقام في حالة كانت مستخدمة او جديدة, ببساطه, يمكنك إلغاء الارقام المستخدمة من قبل وشراء الارقام الجديده فقط*

*- ثالثاً: يوجد نظام تصنيف في حالة كنت تبحث عن أرقام مميزة, تبحث عن رقم مختار, تلعب بالارقام (شراء,الغاء,شراء,إلغاء..الخ), سوف يتم خصم رصيد حسابك كاملاً تلقائياً.*

*- تعليمات بسيطة ومبدأيه:*

*- عند شراء رقم, قم بفحصه أولاً, ماإذا كان الرقم جديداً أو لا.*
*- لفحص الرقم, أضغط على زر (رؤية الرقم في واتساب) بعد شراء الرقم, سيقوم بتوجيهك الى الواتساب, في حالة قال لك ( الرقم ليس في واتساب ) هذا يعني ان الرقم جديد, ولم يستخدم في واتساب من قبل.*
*- اما في الحالات الأخرى فهذا يعني أن الرقم مستخدم في واتساب ولا نتحمل مسؤولية تفعيله في اي حال من الاحوال.*

*- في حالة انه لم يصل الكود في هذه النسخه, قم بعمل ارسال رسالة مجدداً في الواتساب وانتظر نصف دقيقة واضغط تحديث, في حالة انه لم يصل بعد, قم بإلغائه وشرا رقم آخر.*

*👨‍💻 ⁞  للإستفسار تواصل معنا: @VlP_l1*" , [
           [
           ['text'=>"⚙ ⁞  الإدارة والدعم الفني .",'callback_data'=>"help"],
           ],
           [
                ['text'=>"رجوع ⏪",'callback_data'=>"login_pannel"],
            ]
      ]);
    exit;
    
    elseif ($data == "botstatic") :
if($static['conum']==null) { $static['conum']=0; }  if($static['bot']['balance']) $static['bot']['balance'] =0;
if($static['cards']==null) { $static['cards']=0; } if($static[$chat_id]['unconum']==null) { $static[$chat_id]['unconum'] =0; } 
        $mem = count($members);
        $complete = $static['conum'];
        $incomplete = $static['unconum'];
        $cardnum = $static['cards'];
        $botba = $static['bot']['balance'];
        $ready = $static['ready'];
        //user static //
if($static[$chat_id]['conum']==null) { $static[$chat_id]['conum']=0; } if($static[$chat_id]['ready']==null) { $static[$chat_id]['ready']=0; }
if($static[$chat_id]['cards']==null) { $static[$chat_id]['cards']=0; } if($static['unconum']==null) { $static['unconum'] =0; }
        $usco = $static[$chat_id]['conum'];
        $usready = $static[$chat_id]['ready'];
        $uscards = $static[$chat_id]['cards'];
        $minus    = $static[$chat_id]["minus"] ;
        $usrobel = $point["members"][$check[$chat_id]['mail']]['point'];
        $member =  count($members);
        edit("☑️ ⁞  إحصائيات استخدام بوت : 🌻⬇️


💹 ⁞  تم بدء نظام الحوسبة 2022/11/11م "
, [
            [
                ["text"=>"👤 عدد المستخدمين النشطين✥ ⬇️","callback_data"=>"tranvsfer"],
            ],       
            [
                ["text"=>"$mem","callback_data"=>"jshdvfv"],
            ],       
            [
                ["text"=>"✅ عدد الأرقام المكتملة✤ ⬇️","callback_data"=>"tranixuevrvsfer"],
            ],       
            [
                ["text"=>"$complete","callback_data"=>"invdvrvrfo"],
            ],       
            [
                ['text'=>"رجوع 🏡",'callback_data'=>"login_pannel"],
            ]
            ]);
 exit;
       
elseif($data == "settings") :
edit("*☑️ - قسم الإعدادات الخاصة لحسابك.*" , [
          [
                ['text'=>"🔄 - تحويل رصيد .",'callback_data'=>"transfer"]], 
                [
                ['text'=>"📋 - كشف الحساب ",'callback_data'=>"info"]], 
         [
          ['text'=>"🌪 - قسم رصيد والباقات.",'callback_data'=>"radddsh"]], 
          [
          ['text'=>"☑️ - سجلات الكروت",'callback_data'=>"cCardBuy"]], 
          [
          ['text'=>"⚠️ - تعليمات وشروط الاستخدام",'callback_data'=>"inffjejdw"]], 
    [
                ['text'=>"🔐 - تغيير كلمة السر .",'callback_data'=>"chang"]],
         [
                ['text'=>"📛 - تسجيل الخروج .",'callback_data'=>"login_pannel"]],
         [
                ['text'=>"↩️ - رجوع .",'callback_data'=>"home"]]
         ]);
       exit;
elseif($data == "inf") :
 send( "👨‍✈️ ⁞   اهلا بك:
 [$fname](tg://user?id=$chat_id)  🤍🌺

👨‍✈️ ⁞  هذه تفاصيل حسابك في البوت . ⬇️

📧 ⁞  إيميلك: " .$check[$chat_id]['mail'] . "
💰 ⁞  رصيدك: " . $info["members"][$check[$chat_id]['mail']]["point"] . " ₽ 
🆔 ⁞  الأيدي: $id

*☑️ ⁞  قناة البوت الرسمية*: [اضغط هنا](https://t.me/yemenbro) ");
exit;

elseif($data == "chang"):
edit("*ارسل كلمة المرور الجديدة ✅*",$hom);
$info[$chat_id]["mode"] = "chang";
save($info);

elseif(preg_match("/\d+/",$text) && $info[$chat_id]["mode"] == "chang") :
send("تم تغيير كلمة المرور بنجاح ✅",$backk);
$check[$chat_id]["pass"] = $text;
save($check,"check");
unset($info[$chat_id]["mode"]);
save($info);

elseif($data == "del_num"):
edit("هل أنت متأكد من أنك تريد الحذف سيتم حذف سجل كل الأرقام الذي قمت بشرائها 🌟" , [
    [
         ['text'=>"نعم ✅",'callback_data'=>"yesIneed"],
         ['text'=>"إلغاء ⛔",'callback_data'=>"settings"]],
    ]);
  exit;
  
  elseif($data == "yesInedd"):
  edit("تم حذف الحساب ✅",$backk);
  unset($get[$chat_id]["numbers"]);
  done($get);
  
  elseif($data == "delete_account"):
edit("سيتم حذف حسابك من البوت 🌟 هل تود المتابعة" , [
    [
         ['text'=>"نعم ??",'callback_data'=>"yes"],
         ['text'=>"إلغاء ⛔",'callback_data'=>"settings"]],
    ]);
  exit;
  
  elseif($data == "yes"):
  edit("تم حذف الحساب بنجاح ✔",$backk);
  unset($check[$chat_id]["mail"]);
  unset($check[$chat_id]["pass"]);
  save($check , "check");
  
  elseif($data == "my_chart") :
  edit("إليك سجل حسابك الشخصي 👇👇",$backk);
  bot('senddocument',[ 'chat_id'=>$chat_id,
      'document'=>new CURLFile("data/$chat_id.json")
     ]);
     
     elseif( $data == "collect") :      
        $link = "https://t.me/$bot?start=".encrypt($check[$chat_id]['mail']);
        edit("
*👨‍✈️ ⁞  يمكنك من خلال هذه الميزة ربح روبل عن طريق مشاركة رابط الدعوة مع الآخرين!*

*✅ ⁞  يمكنك مشاركة رابطك وكل شخص يقوم بالدخول عبر رابطك فور شحن حسابة ستصلك إحالتك 10% من نسبة شحن حسابة تلقائي بمعنى إذا قام بشحن حسابة بمبلغ 100Ꝑ روبل ستصلك 10Ꝑ روبل 1000Ꝑ روبل ستصلك 100Ꝑ روبل مجاني وتلقائي يتم إضافتها الى حسابك 🤑.**☑️ ⁞  رابط إحالتك:*: 
`$link`
*🤖 ⁞  عدد اعضاء فريقك:* " . 
$refral[$check[$chat_id]["mail"]]["invit"] , 
            [                
                [["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"home"]
            ],
]);
exit;

elseif($tex[0] == "/start") : 
$link = decrypt($tex[1]); 
send($check[$link]["idd"] . " elias"); 
if($refral[$chat_id]["ref"] == null && $link != $check[$check[$chat_id]["mail"]]["idd"]) {                
$refral[$link]["invit"]++;         
$refral[$chat_id]["ref"] = $link;         
save($refral , "refral"); 
sendd($link , "قام " . "[$chat_id](tg://user?id=$chat_id) " . " بالدخول إلى فريقك عدد أعضاء فريقك الحالي " . $refral[$link]["invit"] ); send("شكرا لإنضمامك إلى البوت الخاص بنا يمكنك إنشاء حساب والتمتع بخدماتنا " , [            
        [                 
              ["text"=>" 🔘 اضغط هنا للدخول للبوت🏅","callback_data"=>"login_pannel"]             
        ]     
   ]); 
}
exit;

elseif($data == "search") :
edit("*✅ للبحث ارسل نداء أو رمز الدوله التي تريد العثور عليها بدون +🔎*

*🔍 كمثال: نداء اليمن: 967 ⁞  نداء روسيا: 7 ⁞  نداء كازاخستان: 7 ⁞  نداء أمريكا: 1 ⁞  نداء السعودية 966* " , $home);
$info[$chat_id]["mode"] = "search";
save($info); exit;

elseif($tex[0] == "نداء" && $info[$chat_id]["mode"] == "search") :
if($numbers["num"][$tex[1]] != null):
              $name     = $numbers["num"][$tex[1]]["name"];
              $country  = $numbers["num"][$tex[1]]["site-name"];
              $web        = $numbers["num"][$tex[1]]["ser"];
              $json["inline_keyboard"][]  =   [["text"=>"الدولة 🌐","callback_data"=>"hello"],["text"=>"السيرفر 📟","callback_data"=>"hmm"],["text"=>"السعر 💰","callback_data"=>"Alwalidee"]];
if($web == "5sim"){ 
foreach($info["operator"] as  $pk => $hmm ):
               $opname = $info["operator"][$pk]["name"] ;
               $opvalue = $info["operator"][$pk]["val"] ; 
	           $pric = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/$opvalue"))->whatsapp->Price ; 
	if($pric == null):
	          $json["inline_keyboard"][] = null;
	else: 
               $price = $info["nesbah"] / 100 * $pric +$pric;
               $json["inline_keyboard"][]  =   [["text"=>"$name","callback_data"=>"hello"],["text"=>"$opname","callback_data"=>"hmm"],["text"=>"$price ₽","callback_data"=>"B-N#$tex[1]#whatsapp#$web#$price#$opvalue"]];
    endif;
endforeach;
} else {
                $chart = json_decode(file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getPrices&api_key=$ApiKeySmsMan&country=$country&service=wa"));
                $cost   =  $chart->$country->cost ;
                $price = $info["nesbah"] / 100 * $cost + $cost;
                $json["inline_keyboard"][]  =   [["text"=>"$name","callback_data"=>"hello"],["text"=>"سيرفر 2⃣","callback_data"=>"B-N#$tex[1]#wa#$web#$price"],["text"=>"$price ₽","callback_data"=>"B-N#$tex[1]#wa#$web#$price"]];
}
$json["inline_keyboard"][]  =   [["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"home"]];
bot("sendmessage",[
            "chat_id"=>$chat_id,
            "text"=>"$country $opvalue $web $name",
            "message_id" => $message_id,
            "reply_markup" => json_encode($json)
        ]);
else :
send("لا يتوفر أرقام لهذه الدولة او أنه لم يتم إدراجها من قبل الأدمن 🤷‍♂️",$home);
unset($info[$chat_id]['mode']);
save($info);
endif;

elseif($data == "fav"):
$json["inline_keyboard"][]  =   [["text"=>"الدولة 🌐","callback_data"=>"hello"],["text"=>"السيرفر 📟","callback_data"=>"hmm"],["text"=>"السعر 💰","callback_data"=>"Alwalidee"]];
foreach($favourite["number"] as $k => $v):
if($k = "5sim"):
$key = $favourite["number"][$k]["key"];
$operator = $favourite["number"][$k]["ope"];
$app         = $favourite["number"][$k]["app"];
else :
$key = $favourite["number"][$k]["key"];
$operator = $favourite["number"][$k]["ope"];
$app         = $favourite["number"][$k]["app"];
endif;
$name      =  $numbers["num"][$key]["name"];
$country   =  $numbers["num"][$key]["site-name"];
$ser          =  $numbers["num"][$key]["ser"];
$key         =  $numbers["num"][$key]["con-key"];
if($ser == "5sim") {
	$price = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/$operator"))->$app->Price ; 
    $json["inline_keyboard"][]  =   [["text"=>"$name","callback_data"=>"hello"],["text"=>"$operator" ,"callback_data"=>"hmm"],["text"=>"$price ₽","callback_data"=>"B-N#$key#$app#$price#$operator"]];
    
   } else {
            	$chart = json_decode(file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getPrices&api_key=$ApiKeySmsMan&country=$country&service=$app"));
                $cost   =  $chart->$country->cost ;
                $price = $info["nesbah"] / 100 * $cost + $cost;
                $json["inline_keyboard"][]  =   [["text"=>"$name","callback_data"=>"hello"],["text"=>"سيرفر 2" ,"callback_data"=>"hmm"],["text"=>"$price ₽","callback_data"=>"B-N#$key#$app#$price"]];   
 }
endforeach;
$json["inline_keyboard"][]  =   [["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"home"]];
 bot("editmessagetext",[
            "chat_id"=>$chat_id,
            "text"=>"😁🌸 ⁞  الدولة: $name
🤧♥️ ⁞  التطبيق : $ex[2]. ☑️

☑️ ⁞  إختر احد السيرفرات للشراء منه. ☺️🌸

🛍️ ⁞  كل سيرفر يقوم بتوفير عدد من الارقام وكل سيرفر له سعر خاص به. 😌🌼" ,
            "message_id" => $message_id,
            "reply_markup" => json_encode($json)
        ]);              
        
endif;       
       
       
       
       
       
       
       
       