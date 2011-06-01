<?php

class RestaurantAdmin extends Controller {

	function RestaurantAdmin()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if (!$this->MemberSystem->isLogin()) {
			exit('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />請先登入，並升級成為餐廳管理賬號。');
		} else if (!$this->MemberSystem->isResOwner()) {
			exit('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />請升級成為餐廳管理賬號。');
		}
		$this->template->add_css('style/restaurantAdmin.css');
		$this->template->add_css('style/ui-lightness/jquery-ui-1.8.9.custom.css');
		$this->template->add_css('plugin/fileUpload/jquery.fileupload-ui.css');
		
		$this->template->add_js('plugin/timepicker/jquery-ui-timepicker-addon.js');
		$this->template->add_js('plugin/fileUpload/jquery.fileupload.js');
		$this->template->add_js('plugin/fileUpload/jquery.fileupload-ui.js');
		
		$this->template->add_js('script/restaurantAdmin.js');
		$this->template->write_view('content', 'restaurantAdmin/dataUpdateFlow');
		$this->template->write_view('navBar', 'restaurantAdmin/nav');
		$this->template->render();
	}
	
	
	function stage2dataUpdate()
	{
		$inputData = $this->input->post('stage2data');
		$stage2DataJson = json_encode($inputData);
		set_cookie('stage2DataJson', $stage2DataJson);
	}
	
	
	function tempLogin($pass)
	{
		if ($pass == '123') {
			$session_data = array(
				'userID'	=> '2',
				'email'		=> "cksam@ust.hk",
				'login'		=> TRUE
			);
			$this->session->set_userdata($session_data);
			echo 'login';
		}
	}
	
	function imageUpload($uploadType)
	{
		if ($uploadType == NULL) exit("Illegal hack to system");
		
		// Initialization
		if ($uploadType == "reslogo") {
			$uploadPath = "upload/img_reslogo/";
			$dimention['width'] = 100;
			$dimention['height'] = 200;
		} else if ($uploadType == "resPhoto") {
			$uploadPath = "upload/img_resPhoto/";
			$dimention['width'] = 600;
			$dimention['height'] = 480;
		} else {
			exit("System error");
		}
		
		$file = $_FILES['file'];
		
		// Check condition
		if ($file['type'] == "image/gif");
		elseif ($file['type'] == "image/jpg");
		elseif ($file['type'] == "image/jpeg");
		elseif ($file['type'] == "image/bmp");
		elseif ($file['type'] == "image/png");
		else
			return('File should be image');
		
		if ($file['size'] > 3145728)
			return('File size should be lower then 3145728byte (3MB)');
		
		// Resize the image
		$config['image_library'] = 'gd2';
		$config['source_image'] = $file['tmp_name'];
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $dimention['width'];
		$config['height'] = $dimention['height'];
		$config['wm_text'] = 'testing123';
		$config['wm_type'] = 'text';
		
		
		$this->load->library('image_lib', $config); 
		$this->image_lib->resize();
		$file_ext = substr(strrchr($file['name'], '.'), 1);
		move_uploaded_file($file['tmp_name'], $uploadPath.$this->session->userdata('userID').'.'.$file_ext);
		
		$outputArray = array(
			'imgPath'	=> $uploadPath.$this->session->userdata('userID').'.'.$file_ext,
			'imgSize'	=> $file['size'],
			'imgName'	=> $this->session->userdata('userID').'.'.$file_ext
		);
		echo json_encode($outputArray);
	}
	
	function resGetData($stagenumber = NULL)
	{
		if (($this->input->post('ssCode') != '3H98Ci11i2tE') || ($stagenumber == NULL) || ($this->session->userdata('userID') == NULL)) exit('No direct script access allowed');
		$uid = $this->session->userdata('userID');
		switch ($stagenumber){
			case 'stage1':
				$this->db->where('resID', $uid);
				$query = $this->db->get('restaurantinfo');
				
				
				if ($query->num_rows() > 0)	{
					$row_data = $query->result();
					$output_data = array(
						'email'			=> $row_data[0]->resLoginName,
						'resName'		=> $row_data[0]->resName,
						'resOpenTime'	=> $row_data[0]->resOpenTime,
						'resCloseTime'	=> $row_data[0]->resCloseTime,
						'resAddress'	=> $row_data[0]->resAddress,
						'resTel'		=> $row_data[0]->resPhone,
						'resPhoto'		=> $row_data[0]->resPhoto,
						'resTM'			=> $row_data[0]->resLogo,
						'lowestPrice'	=> $row_data[0]->resPriceLimit,
						'resDescript'	=> $row_data[0]->resDescription,
						'resNotics'		=> $row_data[0]->resNotics
					);
					echo json_encode($output_data);
				} else {
					echo 'NoData';
					return;
				}
				
				break;
			case 'stage2':
				$output_data = NULL;
				$query = $this->db->query("SELECT * FROM `menu_block` WHERE `blkClass` = 0 AND `blkOwner` = ".$uid." ORDER BY `blkCol` ASC, `blkPosition` ASC");
				if ($query->num_rows() > 0)	{
					$row_data = $query->result();
					foreach ($row_data as $key => $value) {
						$output_data1[$key] = array(
							's2typeID'			=> $value->blkID,
							's2typeName'		=> $value->blkName,
							's2typeType'		=> $value->blkType,
							'blkCol'			=> $value->blkCol,
							'blkPosition'		=> $value->blkPosition
						);
						
					}
					$output_data["type"] = $output_data1;
				} else {
					echo 'NoData';
					return;
				}
			
			
				$this->db->where('driOwner', $uid);
				$this->db->order_by("driID", "asc"); 
				$query = $this->db->get('drink');
				
				if ($query->num_rows() > 0)	{
					$row_data = $query->result();
					foreach ($row_data as $key => $value) {
						$output_data2[$key] = array(
							's2entryType'	=> $value->driType,
							's2entryName'	=> $value->driName,
							's2entryPrice'	=> $value->driPrice
						);
					}
					$output_data["entry"] = $output_data2;
				} else {
					echo 'NoData';
					return;
				}
				echo json_encode($output_data);
				break;
			case 'stage3':
			
				$output_data = NULL;
				
				$query0 = $this->db->query("SELECT * FROM `menu_block` WHERE `blkClass` != 0 AND `blkOwner` = ".$uid." ORDER BY `blkCol` ASC, `blkPosition` ASC");
				
				$this->db->where('fooOwner', $uid);
				$this->db->order_by("fooID", "asc");
				$query1 = $this->db->get('food_type1');
				
				
				$this->db->where('fooOwner', $uid);
				$this->db->order_by("fooID", "asc");
				$query2 = $this->db->get('food_type2');
				
				$this->db->where('fooOwner', $uid);
				$this->db->order_by("fooID", "asc");
				$query3 = $this->db->get('food_type3');
				
				
				if ($query0->num_rows() > 0) {
					$row_data = $query0->result();
					foreach ($row_data as $key => $value) {
						$output_data0[$key] = array(
							's3FormID'		=> $value->blkID,
							's3FormType'	=> $value->blkType,
							's3FormName'	=> $value->blkName,
							's3FormClass'	=> $value->blkClass,
							'blkPosition'	=> $value->blkPosition,
							'blkCol'		=> $value->blkCol
						);
					}
					$output_data["type"] = $output_data0;
				} else ( $output_data["type"] = array());
				
				if ($query1->num_rows() > 0) {
					$row_data = $query1->result();
					foreach ($row_data as $key => $value) {
						$output_data1[$key] = array(
							's3entryType'	=> $value->fooType,
							's3entryName'	=> $value->fooName,
							's3entryPrice'	=> $value->fooPrice
						);
					}
					$output_data["entry1"] = $output_data1;
				} else ($output_data["entry1"] = array());
				
				if ($query2->num_rows() > 0) {
					$row_data = $query2->result();
					foreach ($row_data as $key => $value) {
						$output_data2[$key] = array(
							's3entryType'	=> $value->fooType,
							's3entryName'	=> $value->fooName
						);
					}
					$output_data["entry2"] = $output_data2;
				} else ($output_data["entry2"] = array());
				
				
				
				if ($query3->num_rows() > 0) {
					$row_data = $query3->result();
					foreach ($row_data as $key => $value) {
						$output_data3[$key] = array(
							's3entryType'	=> $value->fooType,
							's3entryName'	=> $value->fooName,
							's3entryAB'		=> $value->fooAB
						);
					}
					$output_data["entry3"] = $output_data3;
				} else ($output_data["entry3"] = array());
				

				$output_data["entry"] = array_merge($output_data["entry1"], $output_data["entry2"], $output_data["entry3"]);
				
				if ($output_data["entry"] == NULL) {
					echo 'NoData';
					return;
				}
				
				unset($output_data["entry1"]);
				unset($output_data["entry2"]);
				unset($output_data["entry3"]);
				
				echo json_encode($output_data);
				
				break;
				
			case 'stage4':
				$output_data = NULL;
				
				$query = $this->db->query("SELECT * FROM `menu_block` WHERE `blkOwner` = ".$uid." ORDER BY `blkCol` ASC, `blkPosition` ASC");
				
				if ($query->num_rows() > 0)	{
					$row_data = $query->result();
					foreach ($row_data as $key => $value) {
						$output_data1[$key] = array(
							'blockID'			=> $value->blkID,
							'blockName'			=> $value->blkName,
							'blockType'			=> $value->blkType,
							'blockClass'		=> $value->blkClass,
							'blockCol'			=> $value->blkCol
						);
						
					}
					$output_data["type"] = $output_data1;
				} else {
					echo 'NoData';
					return;
				}
				
				$this->db->where('driOwner', $uid);
				$this->db->order_by("driID", "asc"); 
				$query0 = $this->db->get('drink');
				
				$this->db->where('fooOwner', $uid);
				$this->db->order_by("fooID", "asc");
				$query1 = $this->db->get('food_type1');
				
				$this->db->where('fooOwner', $uid);
				$this->db->order_by("fooID", "asc");
				$query2 = $this->db->get('food_type2');
				
				$this->db->where('fooOwner', $uid);
				$this->db->order_by("fooID", "asc");
				$query3 = $this->db->get('food_type3');
				
				if ($query0->num_rows() > 0)	{
					$row_data = $query0->result();
					foreach ($row_data as $key => $value) {
						$output_data0[$key] = array(
							'entryType'	=> $value->driType,
							'entryName'	=> $value->driName,
							'entryPrice'	=> $value->driPrice
						);
					}
					$output_data["entry0"] = $output_data0;
				} else ($output_data["entry0"] = array());
				
				if ($query1->num_rows() > 0) {
					$row_data = $query1->result();
					foreach ($row_data as $key => $value) {
						$output_data1[$key] = array(
							'entryType'	=> $value->fooType,
							'entryName'	=> $value->fooName,
							'entryPrice'	=> $value->fooPrice
						);
					}
					$output_data["entry1"] = $output_data1;
				} else ($output_data["entry1"] = array());
				
				if ($query2->num_rows() > 0) {
					$row_data = $query2->result();
					foreach ($row_data as $key => $value) {
						$output_data2[$key] = array(
							'entryType'	=> $value->fooType,
							'entryName'	=> $value->fooName
						);
					}
					$output_data["entry2"] = $output_data2;
				} else ($output_data["entry2"] = array());
				
				if ($query3->num_rows() > 0) {
					$row_data = $query3->result();
					foreach ($row_data as $key => $value) {
						$output_data3[$key] = array(
							'entryType'	=> $value->fooType,
							'entryName'	=> $value->fooName,
							'entryAB'		=> $value->fooAB
						);
					}
					$output_data["entry3"] = $output_data3;
				} else ($output_data["entry3"] = array());
				

				$output_data["entry"] = array_merge($output_data["entry0"], $output_data["entry1"], $output_data["entry2"], $output_data["entry3"]);
				
				if ($output_data["entry"] == NULL){
					echo 'NoData';
					return;
				}
				
				unset($output_data["entry0"]);
				unset($output_data["entry1"]);
				unset($output_data["entry2"]);
				unset($output_data["entry3"]);
				
				echo json_encode($output_data);
				
				break;
				
		}
	}

	function resAdminDataUpdate($stagenumber = NULL)
	{
		if (($this->input->post('ssCode') != '3H98Ci11i2tE') || ($stagenumber == NULL)) exit('No direct script access allowed');
		
		$uid = $this->session->userdata('userID');
		$this->load->model('RestaurantAdminModel');
		
		switch ($stagenumber){
			case 'stage1':
			
				$s1Data = json_decode($this->input->post('data'), true);
				
				$db_data = array(
					'resLoginName'		=> $this->session->userdata('email'),
					'resName'			=> $s1Data['resName'],
					'resOpenTime'		=> $s1Data['resOpenTime'],
					'resCloseTime'		=> $s1Data['resCloseTime'],
					'resRegionID'		=> 0,
					'resAddress'		=> $s1Data['resAddress'],
					'resPhone'			=> $s1Data['resTel'],
					'resPhoto'			=> $s1Data['resPhoto'],
					'resLogo'			=> $s1Data['resTM'],
					'resPriceLimit'		=> $s1Data['lowestPrice'],
					'resStatus'			=> null,
					'resDescription'	=> $s1Data['resDescript'],
					'resNotics'			=> $s1Data['resNotics']
				);
				
				$this->db->where('resID', $uid);
				$query = $this->db->get('restaurantinfo');
				
				if ($query->num_rows == 0) {
					// Doesn't exist
					$db_data['resID'] = $uid;
					$this->db->insert('restaurantinfo', $db_data);
				} else {
					// If entry exist
					$this->db->where('resID', $uid);
					$this->db->update('restaurantinfo', $db_data);
				}
				break;
			
			case 'stage2':
				$s2Data = json_decode($this->input->post('data'), true);
				$typeIndex = 0;
				$entryIndex = 0;
				$db_data1 = NULL;
				$db_data2 = NULL;
				$uid = $uid;
				$blockID = array();
				
				
				foreach ($s2Data as $key1 => $value1){
					if ($value1['className'] == NULL) continue;
					$db_data1[$typeIndex] = array(
						'blkName'		=> $value1['className'],
						'blkType'		=> 0,
						'blkClass'		=> 0,
						'blkOwner'		=> $uid,
						'blkCol'		=> $value1['blkCol'],
						'blkPosition'	=> $value1['blkPosition']
					);
					
					
					foreach ($value1['entry'] as $key2 => $value2){
						if ($value2['entryName'] == NULL) continue;
						$db_data2[$entryIndex] = array(
							'driOwner'	=> $uid,
							'driName'	=> $value2['entryName'],
							'driPrice'	=> $value2['entryPrice'],
							'driType'	=> $typeIndex
						);
						$entryIndex++;
					}
					$typeIndex++;
				}
				
				if ($db_data1 != NULL) {
					$this->db->delete('block', array('blkOwner' => $uid, 'blkClass' => 0));
					foreach ($db_data1 as $key => $value) {
						$this->db->insert('block', $value);
						$blockID[$key] =  $this->db->insert_id();
					}
				}
				
				if ($db_data2 != NULL) {
					$this->db->delete('drink', array('driOwner' => $uid));
					foreach ($db_data2 as $key => $value) {
						$value['driType'] = (int) $blockID[$value['driType']];
						$this->db->insert('drink', $value);
					}
				}
				break;

			case 'stage3':
				$s3Data = json_decode($this->input->post('data'), true);
				$typeIndex = 0;
				$data1Index = 0;
				$data2Index = 0;
				$data3Index = 0;
				$db_data1 = NULL;
				$db_data2 = NULL;
				$db_data2['1'] = NULL;
				$db_data2['2'] = NULL;
				$db_data2['3'] = NULL;
				$blockID = array();
				
				foreach ($s3Data as $key1 => $value1) {
					
					if ($value1['className'] == NULL) continue;
					
					$db_data1[$typeIndex] = array(
						'blkName'		=> $value1['className'],
						'blkType'		=> $typeIndex,
						'blkClass'		=> $value1['formtype'],
						'blkOwner'		=> $uid
					);
					$typeIndex++;
					
					switch($value1['formtype']){
						case 1:
							foreach ($value1['entry'] as $key2 => $value2) {
								if ($value2['entryName'] == NULL) continue;
								$db_data2['1'][$data1Index] = array(
									'fooName'	=> $value2['entryName'],
									'fooOwner'	=> $uid,
									'fooPrice'	=> $value2['entryPrice'],
									'fooType'	=> $key1
								);
								$data1Index++;
							}
							break;
						case 2:
							foreach ($value1['entry'] as $key2 => $value2) {
								
								if ($value2['entryName'] == NULL) continue;
								$db_data2['2'][$data2Index] = array(
									'fooName'	=> $value2['entryName'],
									'fooOwner'	=> $uid,
									'fooType'	=> $key1
								);
								$data2Index++;
							}
							break;
						case 3:
							foreach ($value1['entry'] as $key2 => $value2) {
								
								if (isset($value2['A'])) {
									if ($value2['A'] == NULL) continue;
									$db_data2['3'][$data3Index] = array(
										'fooName'	=> $value2['A'],
										'fooOwner'	=> $uid,
										'fooAB'		=> 'A',
										'fooType'	=> $key1
									);
									$data3Index++;
								}
								
								if (isset($value2['B'])) {
									if ($value2['B'] == NULL) continue;
									$db_data2['3'][$data3Index] = array(
										'fooName'	=> $value2['B'],
										'fooOwner'	=> $uid,
										'fooAB'		=> 'B',
										'fooType'	=> $key1
									);
									$data3Index++;
								}
							}
							break;
					}
					
				}
				
				
				if ($db_data1 != NULL) {
					$this->db->where('blkOwner', $this->session->userdata('userID'));
					$query = $this->db->get('block');
					if ($query->num_rows() > 0) {
						$this->db->query("DELETE FROM `menu_block` WHERE `blkClass` != 0 AND `blkOwner` = ".$uid);
					}
					foreach ($db_data1 as $key => $value) {
						$this->db->insert('block', $value);
						$blockID[$key] =  $this->db->insert_id();
					}
				}
				
				if ($db_data2['1'] != NULL) {
					$this->RestaurantAdminModel->deleteEntries('food_type1', 'fooOwner');
					foreach ($db_data2['1'] as $key => $value) {
						$value['fooType'] = (int) $blockID[$value['fooType']];
						$this->db->insert('food_type1', $value);
					}
				}
				if ($db_data2['2'] != NULL) {
					$this->RestaurantAdminModel->deleteEntries('food_type2', 'fooOwner');
					foreach ($db_data2['2'] as $key => $value) {
						$value['fooType'] = (int) $blockID[$value['fooType']];
						$this->db->insert('food_type2', $value);
					}
				}
				if ($db_data2['3'] != NULL) {
					$this->RestaurantAdminModel->deleteEntries('food_type3', 'fooOwner');
					foreach ($db_data2['3'] as $key => $value) {
						$value['fooType'] = (int) $blockID[$value['fooType']];
						$this->db->insert('food_type3', $value);
					}
				}
				break;
			case 'stage4':
				$s4Data = json_decode($this->input->post('data'), true);
				foreach ($s4Data as $key1 => $value1){
					$this->db->query("UPDATE `menu_block` SET `blkCol` = '".$value1['col']."', `blkPosition` = '".$value1['position']."' WHERE `blkID` =".$value1['formid']." LIMIT 1 ;");
				}
				break;
		}
	
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */