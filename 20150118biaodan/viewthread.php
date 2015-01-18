<?php
	calss Acticle{
		private $sublect;
		private $message;

		function __construct($sublect="",$message="",$parse=array()){
			$this->subject=$this->html2Text(subject);

			if(!empty($parse)){
				foreach($parse as $value){
					switch($value){
						case 1:
							$message = $this->delHtmlTags($message);break;
						case 2:
							$message = $this->html2Text($message);break;
						case 3:
							$message = $this->UBBCode2Html($message);break;
						case 4:
							$message = $this->parseURL($message);break;
						case 5:
							$message = $this->parseSmilies($message);break;
						case 6:
							$message = $this->disableKeyWords($message);break;
						case 7:
							$message = $this->prasePHPCode($message);break;
						case 8:
							$message = $this->prasePer($message);break;
						case 9:
							$message = $this->nltobr($message);break;
					}
				}
			}
			$this->message = $message;
		}
		private function delHtmlTags($message){
			return strip_tags($message);
		}

		private function html2Text($message){
			return htmlspecialchars(stripcslashes($message));
		}

		private function html2Text($message){
			return htmlspecialchars(stripcslashes($message));
		}

		private function UBBCode2Html(message){
			$pattern = array(
				'/\[b\]/i','/\[\/b\]/i','/\[i\]/i',
				'/\[\/i\]/i','/\[u\/i]','/\[\/u\]/i',
				'/\[font=([^\[\<]+?)\]/i',
				'/\[color=([#\w]+?)\]/i',
				'/\[size=(\d+?)\]/i',
				'/\[size=(\d+(\.\d+)?(px|pt|in|cm|mm|pc|em|ex|%)+?)\]/i',
				'/\[align=(left|center|right)\]/i',
				'/\[url=www.([^\["\']+?)\](.+?)\[\/url\]/is',
				'/\[url=(https?|ftp|gopher|news|telent){i}:\/\/([^\["\']+?)\](.+?)\[\/url\]/is',
				'/\[email\]\s*([a-z0-9\-_.+]+)@([a-z0-9\-_]+[.][a-z0-9\-_.]+)\s*\[\/url\]/is',
				'/\[email=([a-z0-9\-_.+]+)@([a-z0-9\-_]+[.][a-z0-9\-_]+[.][a-z0-9-_.]+)\](.+?)\[\/email\]/is',
				'/\[img\](.+?)\[\/img\]/',
				'/\[\/color\]/i','/\[\/size\]/i','/\[\/font\]/i','/\[\/align\]/'
			);

			$replace= array(
				'<b>','</b>','<i>',
				'</i>','<u>','</u>',
				'<font face="\\1">',
				'<font color="\\1">',
				'<font size="\\1">',
				'<font style=\"font-size:\\1\">',
				'<p align="\\1">',
				'<a href="http://www.\\1" target="_blank">\\2</a>',
				'<a href="\\1://\\2" target="_blank">\\3</a>',
				'<a href="mailto:\\1@\\2">\\1@\\2</a>',
				'<a href="mailto:\\1@\\2">\\3</a>',
				'<img src="\\1">',
				'</font>','</font>','</font>','</p>'
			);
		
		return preg_replace($pattern, $replace, $message);
	}
	private function cuturl($url){
		$length=65;
		$url = substr(strtolower($url), 0,4) == 'www'?"http://$url":$url;
		$urllink = "<a href=\"".$url.'" target="_blank">';
		if(strlen($url)>$length){
			$url = substr($url, 0,intval($length * 0.5)).'...'.substr($url, - intval($length *0.3));
		}
		$urllink .=$url.'</a>';
		return $urllink;
	}
	private function parseURL($message){
		$urlPattern=
		"/(www.|https?:\/\/|ftp:\/\/|news:\/\/|telnet:\/\/){1}([^\[\"']+?)(com|net|org)(\/[w-\.\/
			?\&\&\=]*)?/ei";
		return preg_replace($urlPattern, "\$this->cuturl('\\1\\2\\3\\4\\')", subject);

	}

	private function parseSmilies($message){
		$pattern = array(
			'/:\)|\/wx|微笑/i',
			'/:@|\/fn|发怒/i',
			'/:kiss|\/kill|\/sa|示爱/',
			'/:p|\/tx|偷笑/i',
			'/:q|\/dk|大哭/i'
		);

		$replace = array(
			'<img src="smilies/smile.gif" alt="微笑">',
			'<img src="smilies/huffy.gif" alt="发怒">',
			'<img src="smilies/kiss.gif" alt="示爱">',
			'<img src="smilies/titter.gif" alt="偷笑">',
			'<img src="smilies/cry.gif" alt="大哭">'			
		);
		return preg_replace($pattern,$replace,$message);
	}

	private function disableKeyWords($message){
		$keywords_disable = array ("非法关键字一","非法关键字二","非法关键字三");
		return str_replace($keywords_disable, "**", $message);
	}
	private function prasePHPCode($message){
		$pattern='/(<\?.?\?>)/ise';
		$replace='"<pre style=\"backgroud:#ddd\">".highlight_string("\\1",ture)."</pre>"';
		return str_replace($pattern, $replace, message);
	}
	private function prasePer($message){
		return '<pre>'.$message.'</pre>';
	}

	private function nltobr($message){
		return nl2br($message);
	}

	public function getSubject(){
		return '<h1 align=center>'.$this->subject.'</h1>';
	}
	public function getMessage(){
		return $this->message;
	}
}

