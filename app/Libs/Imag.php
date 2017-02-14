<?php namespace App\Libs;
use Image;

class Imag 
{
	public function url ($puth = null, $directory = null, $name = null)
	{
		set_time_limit(50000);
		if ($puth !=null) {
			$dir = public_path() . $directory;
			$img = Image::make($puth);
			if (!$name){
				$filename = date('y_m_d_h_i_s').'.jpg';
			}else{
				$filename = $name;
				
			}
			$s_filename='s_'.$filename; 
			$img->resize (990, null, function ($constraint){
				$constraint->aspectRatio();
			});
			$img->save($dir. $filename);
			
			$img->resize (200, null, function ($constraint){
				$constraint->aspectRatio();
			});
			$img->save($dir. $s_filename);
			return $filename;
			
			}else{
				return false;
				
			}
		}
			
		
		
		
		
}

