<?php
	class FileUpload{
		private $path = "./uploads";
		private $allowtype = array('jpg','gif','png');
		private $maxsize = 1000000;
		private $israndname = true;

		private $originName;
		private $tmpFileName;
		private $fileType;
		private $newFileName;
		private $errorNum =0;
		private $errorMess="";

		function set($key,$val){
			$key = strtolower($key);
			if(array_key_exists($key, get_class_vars(get_class($this)))){
				$this->setOption($key,$val);
			}
			return $this;
		}
		function upload($fileField){
			$return = true;
			if(!$this->checkFilePath()){
				$this->errorMess=$this->getError();
				return false;
			}
			$name= $_FILES[$fileField]['name'];
			$tmp_name=$_FILES[$fileField]['tmp_name'];
			$size = $_FILES[$fileField]['size'];
			$error = $_FILES[$fileField]['error'];
			if(if_Array($name)){
				$errors=array();
				for($i=0;$i<count($name);$i++){
					if($this->setFiles($name[$i],$tmp_name[$i],$size[$i],$error[$i])){
						if($this->checkFileSize() || !$this->checkFileType()){
							$error[] = $this->getError();
							$return=false;
						}
					}else{
						$errors[]=$this->getError();
						$return=false;
					}
					if(!$return)
						$this->setFiles();
				}
				if($return){
					$fileNames= array();
					for ($i = 0;$i<count($name);$i++){
						if($this->setFiles($name[$i],$tmp_name[$i],$size[$i])){
							$this->setNewFileName();
							if(!$this->copyFile()){
								$errors[]=$this->getError();
								$return =false;
							}
							$fileNames[]=$this->newFileName;
						}
					}
					$this->newFileName=$fileNames;
				}
				$this->errorMess=$errors;
				return $return;
			}else{
				if($this->setFiles($name,$tmp_name,$size,$error)){
					if($this->checkFileSize() && $this->checkFileType()){
						$this->setNewFileName();
						if($this->copyFile()){
							return true;
						}else{
							$return=false;
						}
					}else{
						$return=false;
					}
					if(!$return)
						$this->errorMess=$this->getError();
					return $return;
				}
			}

			 function getFileName(){
				return $this->newFileName;
			}
			 function getErrorMsg(){
				return $this->errorMess;
			}
			 function getError(){
				$str = "上传文件<font color='red'>{$this->originName}</font>时出错:";
				switch($this->errorNum){
					case 4:$str .="没有文件上传";break;
					case 3:$str .="文件只有部分被上传";break;
					case 2:$str .="上传文件的大小超过了HTML表单中的MAX_FILE_SIZE选项指定的值";break;
					case 1:$str .="上传的文件超过了php.ini中的upload_max_filesize选项限制的值";break;
					case -1:$str .="未允许类型";break;
					case -2:$str .="文件过大，上传的文件不能超过{$this->maxsize}个字节";break;
					case -3:$str .="上传失败";break;
					case -4:$str .="建立存放上传文件目录失败，请重新指定上传目录";break;
					case -5:$str .="必须指定上传文件的路径";break;
					case -6:$str .="未知错误";
				}
				return $str.'<br>';
			}
			 function setFiles($name="",$tmp_name="",$size=0,$error=0){
				$this->setOption('errorNum',$error);
				if($error)
					return false;
				$this->setOption('originName',$name);
				$this->setOption('tmpFileName',$tmp_name);
				$aryStr = explode(".", $name);
				$this->setOption('fileType',strtolower($aryStr[count($aryStr)-1]));
				$this->setOption('filesize',$size);
				return true;
			}
			 function setOption($key,$val){
				$this->$key=$val;
			}
			 function setNewFileName(){
				if($this->israndname){
					$this->setOption('newFileName',$this->proRandName());
				}else{
					$this->setOption('newFileName',$this->originName);
				}
			}

			 function checkFileType(){
				if (in_array(strtolower($this->fileType),$this->allowtype)){
					return true;
				}else{
					$this->setOption('errorNum',-1);
					return false;
				}
			}
			 function checkFileSize(){
				if ($this->fileSize>$this->maxsize){
					$this->setOption('errorNum',-2);
					return false;
				}else{
					return true;
				}
			}
			 function checkFilePath(){
				if(empty($this->path)){
					$this->setOption('errorNum',-5);
					return false;
				}
				if (!file_exists($this->path)||!is_writable($this->path)){
					if(!@mkdir($this->path,0755)){
						$this->setOption('errorNum',-4);
						return false;
					}
				}
				return true;
			}
			 function proRandName(){
				$fileName= date('YmdHis')."_".rand(100,999);
				return $fileName.'.'.$this->fileType;
			}
			 function copyFile(){
				if(!$this->errorNum){
					$path = rtrim($this->path,'/').'/';
					$path .=$this->newFileName;
					if (@move_uploaded_file($this->tmpFileName, $path)){
						return true;
					}else{
						$this->setOption('errorNum',-3);
						return false;
					}
				}else{
					return false;
				}
			}
		}
	}