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
		$button->loop();
	}
}
