<?php  

class daftar extends CI_Controller {
 
	var $limit=10;
	var $offset=10;	
 	function index($limit='',$offset=''){
		 $data['judul']='Daftar';
		 $data['view']='daftar/form';
		 $data['table']=$this->generateForm();
		 $this->load->view('index',$data);
	}
/*	function generateformBeli(){
		$table='';
		$table.='';
		return $table; 
	}
	function generateFaktur(){
		$table='';
		$table.='<table>';
		$table.='<tr>';
		$table.='<tr><input type="text" id="jum" name="jum">  &nbsp; &nbsp; <a onclick="return next()" style="margin-bottom:0px;" href="'.base_url().'jual/nextform" class="dark_green btn">Next</a></td>';
		$table.='</tr>';
		$table.='</table>';
		return $table; 
	} 
	 
	function generateListBeli(){
		$this->load->model("pjm_model"); 
		return $this->pjm_model->generateListBeli();
	} */
	function generateForm(){
		$table='';
		 
	//	$listObat=$this->generateListBeli();
		$ses='<input type="hidden" id="ses" name="ses" value="'.date("YmdHms").'">';
		$table.=$ses;
		$table.='<table border="0">
					<tbody><tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><input type="text" name="tanggal" readonly="" size="10" value="2013-12-06"></td>
					</tr>
					<tr>
						<td>No Faktur</td>
						<td>:</td>
						<td><input type="text" name="faktur" size="7" maxlength="7"></td>
						
					</tr>
					<tr>
						<td>Customer</td>
						<td>:</td>
						<td>
						<input type="text" id="customer" name="customer">
						</td>
					</tr><tr>
						<td colspan="3"><br><hr><br></td>
					</tr>
					<tr>
						<td align="center">Barang</td>
						<td></td>
						<td align="center">Jumlah</td>
					</tr>
						 '.$listObat.'
					<tr>
						<td><a onclick="return save()" style="margin-bottom:0px;" href="#" class="dark_green btn">Simpan</a></td>
					</tr>
				</tbody></table>';
		return $table; 
	}
	function nextForm(){
		$jumbeli=$this->input->post('jumbeli');
		$table='';
		$table.=$this->generateForm();
		echo $table;
	}
	function act(){
		$this->load->model("daftar_model"); 
		return $this->daftar_model->act();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */