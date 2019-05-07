<?php
date_default_timezone_set('Asia/Jakarta');
error_reporting(true);
set_time_limit(0);
ini_set('memory_limit', '-1');
ini_set('output_buffering',0); 
ini_set('request_order', 'GP');
ini_set('variables_order','EGPCS');
ini_set('max_execution_time','-1');
require __DIR__.'/vendor/autoload.php'; 
class EventHandler extends \danog\MadelineProto\EventHandler
{
	function onAny($update){
	}
	function onLoop(){
	}
	function onUpdateNewChannelMessage($update){
		$this->onUpdateNewMessage($update);
	}
    public function onUpdateNewMessage($update)
	{					
		$date = date('D H:i:s');
		if(isset($button['_'], $button['url'],$button['text']) && $button['_'] =="keyboardButtonUrl" && $button['url'] !=="" && $button['text'] =="🤖 Message bots"){
		$url['first'] = explode("http://t.me/", $button['url']);
		$url['second'] = explode("?start",$url['first'][1]);
		$this->messages->sendMessage(['peer' => '@'.$url['second'][0], 'message' => "/start"]);
		}
		if($visit =false && $button['text'] == "⏩ Skip"){
		$button->click();
	}
}
$config['settings'] = [
    'authorization' => [
        'default_temp_auth_key_expires_in' => 31557600,
        'rsa_keys' => [
            "-----BEGIN RSA PUBLIC KEY-----
MIIBCgKCAQEAwVACPi9w23mF3tBkdZz+zwrzKOaaQdr01vAbU4E1pvkfj4sqDsm6
lyDONS789sVoD/xCS9Y0hkkC3gtL1tSfTlgCMOOul9lcixlEKzwKENj1Yz/s7daS
an9tqw3bfUV/nqgbhGX81v/+7RFAEd+RwFnK7a+XYl9sluzHRyVVaTTveB2GazTw
Efzk2DWgkBluml8OREmvfraX3bkHZJTKX4EQSjBbbdJ2ZXIsRrYOXfaA+xayEGB+
8hdlLmAjbCVfaigxX0CDqWeR1yFL9kwd9P0NsZRPsmoqVwMbMu7mStFai6aIhc3n
Slv8kg9qv1m6XHVQY3PnEw+QQtqSIXklHwIDAQAB
-----END RSA PUBLIC KEY-----","-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAruw2yP/BCcsJliRoW5eB
VBVle9dtjJw+OYED160Wybum9SXtBBLXriwt4rROd9csv0t0OHCaTmRqBcQ0J8fx
hN6/cpR1GWgOZRUAiQxoMnlt0R93LCX/j1dnVa/gVbCjdSxpbrfY2g2L4frzjJvd
l84Kd9ORYjDEAyFnEA7dD556OptgLQQ2e2iVNq8NZLYTzLp5YpOdO1doK+ttrltg
gTCy5SrKeLoCPPbOgGsdxJxyz5KKcZnSLj16yE5HvJQn0CNpRdENvRUXe6tBP78O
39oJ8BTHp9oIjd6XWXAsp2CvK45Ol8wFXGF710w9lwCGNbmNxNYhtIkdqfsEcwR5
JwIDAQAB
-----END PUBLIC KEY-----","-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvfLHfYH2r9R70w8prHbl
Wt/nDkh+XkgpflqQVcnAfSuTtO05lNPspQmL8Y2XjVT4t8cT6xAkdgfmmvnvRPOO
KPi0OfJXoRVylFzAQG/j83u5K3kRLbae7fLccVhKZhY46lvsueI1hQdLgNV9n1cQ
3TDS2pQOCtovG4eDl9wacrXOJTG2990VjgnIKNA0UMoP+KF03qzryqIt3oTvZq03
DyWdGK+AZjgBLaDKSnC6qD2cFY81UryRWOab8zKkWAnhw2kFpcqhI0jdV5QaSCEx
vnsjVaX0Y1N0870931/5Jb9ICe4nweZ9kSDF/gip3kWLG0o8XQpChDfyvsqB9OLV
/wIDAQAB
-----END PUBLIC KEY-----","-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs/ditzm+mPND6xkhzwFI
z6J/968CtkcSE/7Z2qAJiXbmZ3UDJPGrzqTDHkO30R8VeRM/Kz2f4nR05GIFiITl
4bEjvpy7xqRDspJcCFIOcyXm8abVDhF+th6knSU0yLtNKuQVP6voMrnt9MV1X92L
GZQLgdHZbPQz0Z5qIpaKhdyA8DEvWWvSUwwc+yi1/gGaybwlzZwqXYoPOhwMebzK
Uk0xW14htcJrRrq+PXXQbRzTMynseCoPIoke0dtCodbA3qQxQovE16q9zz4Otv2k
4j63cz53J+mhkVWAeWxVGI0lltJmWtEYK6er8VqqWot3nqmWMXogrgRLggv/Nbbo
oQIDAQAB
-----END PUBLIC KEY-----","-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvmpxVY7ld/8DAjz6F6q0
5shjg8/4p6047bn6/m8yPy1RBsvIyvuDuGnP/RzPEhzXQ9UJ5Ynmh2XJZgHoE9xb
nfxL5BXHplJhMtADXKM9bWB11PU1Eioc3+AXBB8QiNFBn2XI5UkO5hPhbb9mJpjA
9Uhw8EdfqJP8QetVsI/xrCEbwEXe0xvifRLJbY08/Gp66KpQvy7g8w7VB8wlgePe
xW3pT13Ap6vuC+mQuJPyiHvSxjEKHgqePji9NP3tJUFQjcECqcm0yV7/2d0t/pbC
m+ZH1sadZspQCEPPrtbkQBlvHb4OLiIWPGHKSMeRFvp3IWcmdJqXahxLCUS1Eh6M
AQIDAQAB
-----END PUBLIC KEY-----"
        ]
    ],
    'connection' => [
        'ssl_subdomains' => 'venus',
        'test' =>[ 
            'ipv4' => [
                'ip_address' => '149.154.167.40', 'port' => 443, 'media_only' => false, 'tcpo_only' => false
            ]
        ],
        'main' =>[ 
            'ipv4' => [
                'ip_address' => '149.154.167.50', 'port' => 443, 'media_only' => false, 'tcpo_only' => false
            ]
        ]
    ],
    'connection_settings' => [
        'all' =>[
			//'protocol' => 'tcp_full'
           	'protocol' => 'tcp_abridged',
        ]
    ],
    'app_info' => [
		//'app_id' => '64179',
		//'api_hash' => 'dd60bb74bb03d8aa368aa37ec7b35d42'
       'app_id' => '64179',
       'api_hash' => 'dd60bb74bb03d8aa368aa37ec7b35d42'
    ],
    'logger' =>[
        'logger' =>0,
    ],
    'flood_timeout' => [
        'wait_if_it' => 350
    ],
    'msg_array_limit' =>[
        'incoming' => 0,
        'outgoing' => 0,
        'call_queue' => 0
    ],
    'peer' =>[
        'full_info_cache_time' => 0,
        'cache_all_peers_on_startup' => false
    ],
    'updates' =>[
        'handle_updates' => false,
        'handle_old_updates' => true,
        'getdifference_interval' => 0,
        'callback' => 'get_updates_update_handler'
    ]
];
$config['phone'] = array(
	/* '12513019073', 	/*null*/
	/*'12513332813', 	/*null*/
	/*'12513339265',	/*null*/
	/*'12514443677', 		/*null*/
	/*'12514444270',		/*null*/
	/*'12518888037',		/*null*/
	/*'12519990231',		/*null*/
	/*'12522393728',		/*null*/
	/*'12522510920',		/*null*/
	/*'12523259336',		/*null*/
	/*'12523576021',		/*null*/
	/*'12818191871',		/*null*/
	/*'62895375136311',	/*null*/
	/*'12512364389',		/*null*/
	/*'12512163946',		/*null*/
	/*'12565686577',		/*null*/
	/*'19142531058',		/*null*/
	/*'12565420917',		/*null*/
	/*'12523139635',		/*null*/
);
echo "\n\n\t\e[34m

	  __________  _____  __________                     
	 / ___/ _ \ \/ / _ \/_  __/ __ \                    
	/ /__/ , _/\  / ___/ / / / /_/ /                    
	\___/_/|_| /_/_/ ___/_/__\____/_________    _______ 
	/_  __/ / / /\ \/ / / / / /   / ___/ __ \  /  _/ _ \
	 / / / /_/ /  \  / /_/ / /___/ /__/ /_/ / _/ // // /
	/_/  \____/   /_/\____/____(_)___/\____(_)___/____/ 
	
		+ Bot Telegram LiteCoin & DogeCoin
		+ We Are Team Silent Rider
		+ Auto Run DOGE & LTC Sekaligus
                                                    
\e[0m\n";
echo " > Enter Your Phone Number\t:\t";
$phone = trim(fgets(STDIN));
$new = new \danog\MadelineProto\API(__DIR__.'/session/'.$phone, $config['settings']);
$new->start();
$me = $new->get_self();
if(!$me['bot']){
	print("\n\n > Welcome Back {$me['first_name']},\n\n");
	if($new->messages->sendMessage(['peer' => '@Dogecoin_click_bot','message' => "/start"])){
		sleep(5);
		$new->messages->sendMessage(['peer' => '@Dogecoin_click_bot','message' => "/bots"]);
	}
	$new->setEventHandler('\EventHandler');
	$new->loop();
}
