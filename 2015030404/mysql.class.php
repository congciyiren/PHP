<?php
	class MyTpl{
		private $template_dir;
		private $compile_dir;
		private $tpl_vars=array();
		

		public function __construct($template_dir="/templates",$compile_dir="./templates_c"){
			$this->template_dir=rttim($template_dir,"/").'/';
			$this->comple_dir=rtrim($compile_dir,"/").'/';
		}

		public function assign($tpl_var,$value=null){
			if($tpl_var!="")
				$this->tpl_vars[$tpl_var]=$value;
		}

		public function display($fileName){
			$tplFile=$this->template_dir.$fileName;

			if(!file_exists($tplFile)){
				return false;
			}

			$comFileName=$this->compile_dir."com_".$fileName.".php";
			

			if(!file_exists($comFileName)|| filemtime($comFileName)<filemtime($tplFile)){
				$repContent=$this->tpl_replace(file_get_contents($tplFile));

				file_put_contents($comFileName,$repContent);
			}
			include comFileName;

		}

		private function tpl_replace($content){

			$pattern=array(
							'/\<\{\s*\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-xff]*)\s*\}\>/i'
				);
			$replacement=array(
						'<?php echo $this->tpl_vars["${1}"]; ?>'
				);

			$repContent=preg_replace($pattern, $replacement, $content);

			return $repContent;
		}

	}