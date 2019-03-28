<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	var $page = '';
	var $sub = '';

	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
	}

	public function index()
	{
		$sql = "SELECT id, nama FROM tm_company";
		$data['list'] = $this->db->query($sql)->result_array();
		
		
		$data = array(
			'header' => $this->load->view('meta/header', '', TRUE),
			'sidebar' => $this->load->view('meta/sidebar', '', TRUE),
            'content' => $this->page != '' ? $this->page : $this->load->view('signin',  $data, TRUE)
		);
	
        $this->parser->parse('master', $data);	
	}

	public function perusahaan()
	{
		$sql = "SELECT id, nama FROM tm_company";
		$data['list'] = $this->db->query($sql)->result_array();
		
		$this->page= $this->load->view('perusahaan', $data, TRUE);
		$this->index();
	}

	public function action($type){
		$arr = $this->input->post('FORM');
		if($type == 'addPerusahaan'){
			$nama = $arr['nama'];
			$sql = "INSERT INTO tm_company(nama) VALUES('".$nama."')";
			$this->db->query($sql);
			redirect('welcome/perusahaan');
		}
	}

	public function upload(){
		$this->load->library('excel');
		$name = str_replace(' ', '_', $_FILES['file']['name']);
		
		$config['upload_path']          = './files/';
		$config['allowed_types']        = 'xls|xlsx|jpg';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('file')){
			echo "Exception Error";
			
		}else{
			$objPHPExcel = PHPExcel_IOFactory::load('./files/'.$name);			
			$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
			
			//extract to a PHP readable array format
			foreach ($cell_collection as $cell) {
				$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
				$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
				$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
			
				if ($row == 1) {
					$header[$row][$column] = $data_value;
				} else {
					$arr_data[$row][$column] = $data_value;
				}
				
			}
			
			foreach($arr_data as $row){
				$sql = "
							INSERT INTO tm_investor(id_company, nama, alamat_1, alamat_2, kota, la, status, jml_saham, persen, kode)
							VALUES ('".$this->input->post('id')."', '".$row['A']."', '".$row['B']."', '".$row['C']."', '".$row['D']."', '".$row['E']."', '".$row['F']."', '".$row['G']."', '".$row['H']."', '".$row['I']."')
						";
				$this->db->query($sql);
			}

			echo "
				<script>
					alert('berhasil upload');
					location.href='".site_url('welcome')."';
				</script>
			";
			
			//$data['header'] = $header;
			////$data['values'] = $arr_data;
			//echo "<pre/>";
			//print_r($data);
		}
	}

	public function list_data(){
		$id = $this->input->post('id');
		
		$sql = "SELECT id, nama FROM tm_company";
		$data['list'] = $this->db->query($sql)->result_array();
		$data['id'] = $id;
		if($id){
			$sql = "SELECT * FROM tm_investor WHERE id_company = '".$id."'";
			$data['investor'] = $this->db->query($sql)->result_array();
		}
		
		$this->page = $this->load->view('list_data', $data, TRUE);
		$this->index();
	}

	public function investor($id){
		$sql = "SELECT * FROM tm_investor WHERE id = '".$id."'";
		$data['person'] = $this->db->query($sql)->row();
		
		$this->page = $this->load->view('investor', $data, TRUE);
		$this->index();
	}

	public function updateData(){
		$data = $this->input->post('FORM');
		$sql = "
			UPDATE tm_investor 
			SET 
				nama = '".$data['nama']."'
				,alamat_1 = '".$data['alamat_1']."'
				,alamat_2 = '".$data['alamat_2']."'
				,kota = '".$data['kota']."'
				,la = '".$data['la']."'
				,status = '".$data['status']."'
				,jml_saham = '".$data['jml_saham']."'
				,persen = '".$data['persen']."'
				,kode = '".$data['kode']."'
			WHERE id = '".$data['id']."'
		";
		$this->db->query($sql);

		echo "
				<script>
					alert('berhasil update');
					location.href='".site_url('welcome/list_data')."';
				</script>
			";
	}

	public function report(){
		$id = $this->input->post('id');
		$sql = "SELECT id, nama FROM tm_company";
		$data['list'] = $this->db->query($sql)->result_array();
		if($id){
			$sql = "SELECT nama FROM tm_company WHERE id = '".$id."'";
			$data['perusahaan'] = $this->db->query($sql)->row()->nama;
			$sql = "SELECT * FROM tm_investor WHERE id_company = '".$id."'";
			$data['investor'] = $this->db->query($sql)->result_array();
			$sql = "SELECT SUM(jml_saham) `saham`, SUM(persen) `persen` FROM tm_investor WHERE id_company = '".$id."'";
			$data['paid'] = $this->db->query($sql)->row()->saham;
			$data['persen'] = $this->db->query($sql)->row()->persen;
		}
		
		$this->page = $this->load->view('report', $data, TRUE);
		$this->index();
	}

	public function report_list(){
		$id = $this->input->post('id');
		$sql = "SELECT id, nama FROM tm_company";
		$data['list'] = $this->db->query($sql)->result_array();
		if($id){
			$sql = "SELECT nama FROM tm_company WHERE id = '".$id."'";
			$data['perusahaan'] = $this->db->query($sql)->row()->nama;
			$isi = date('d/m/Y');
			$sql = "SELECT * FROM tm_investor WHERE id_company = '".$id."' AND absen='".$isi."' ";
			$data['investor'] = $this->db->query($sql)->result_array();
			$sql = "SELECT SUM(jml_saham) `saham`, SUM(persen) `persen` FROM tm_investor WHERE id_company = '".$id."'";
			$data['paid'] = $this->db->query($sql)->row()->saham;
			$data['persen'] = $this->db->query($sql)->row()->persen;
		}
		
		$html = $this->load->view('report_list', $data, true);
		$this->load->library('m_pdf');
		$pdfFilePath ="ficomindo-".time()."-download.pdf";
 	
		$pdf = $this->m_pdf->load();	
		$pdf->WriteHTML($html,2);
		$pdf->Output($pdfFilePath, "D");

	}

	public function delInvestor($id){
		$sql = "DELETE FROM tm_investor WHERE id = '".$id."'";
		$this->db->query($sql);
		echo "
				<script>
					alert('berhasil delete');
					location.href='".site_url('welcome/list_data')."';
				</script>
			";
	}

	public function test(){
		$this->load->view('test');
	}

	public function selected($id){
		$all = $this->input->post('all');
		
		if($all == ''){
			$sql = "UPDATE tm_investor set absen = NULL WHERE id_company = $id";
			$this->db->query($sql);

			$id = $this->input->post('absen');
			$where = implode(', ', $id);
			$sql = "SELECT id, absen FROM tm_investor WHERE id IN ($where)";
			$data = $this->db->query($sql)->result_array();
			
			foreach($data as $row){
				$isi = date('d/m/Y');
				$sql = "UPDATE tm_investor SET absen = '".$isi."' WHERE id= '".$row['id']."' ";
				$this->db->query($sql);
			}
		}else{
			$isi = date('d/m/Y');
			$sql = "UPDATE tm_investor SET absen = '".$isi."' WHERE id_company='".$all."'";
			$this->db->query($sql);
		}

		echo "
				<script>
					alert('berhasil update absen');
					location.href='".site_url('welcome/list_data')."';
				</script>
			";
	}
}
