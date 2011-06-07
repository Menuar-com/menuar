<?php

class Testing extends Controller {

	function Testing()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('testing');
	}
	
	function resAdminDataUpdate($stagenumber = NULL)
	{
		if (($this->input->post('ssCode') != '3H98Ci11i2tE') || ($stagenumber == NULL)) exit('No direct script access allowed');
		switch ($stagenumber){
			case 'stage1':
				$s1Data = json_decode($this->input->post('data'), true);
				
				$db_data = array(
					'resID' => '3',
					'resLoginName' => 'testing',
					'resName' => $s1Data['resName'],
					'resOpenTime' => '02:00:00',
					'resCloseTime' => '23:00:00',
					'resAddress' => 'testing'
				);
				
				$this->db->where('resID', '3');
				$query = $this->db->get('restaurantinfo');
				
				if ($query->num_rows != 0) {
					// If entry exist
					$this->db->update('restaurantinfo', $db_data); 
				} else {
					// Doesn't exist
					$this->db->insert('restaurantinfo', $db_data);
				}
				break;
			case 'stage2':
				$s2Data = json_decode($this->input->post('data'), true);
				$entryIndex = 0;
				foreach ($s2Data as $key1 => $value1){
					echo "Key: $key1; Value: ", $value1['className'], "--------------------\n";
					foreach ($value1['entry'] as $key2 => $value2){
						echo "Key: $key2; Value: ", $value2['entryName'], ',', $value2['entryPrice'], "\n";
						$db_data[$entryIndex] = array(
							'driName'	=> $value2['entryName'],
							'driPrice'	=> $value2['entryPrice'],
							'driType'	=> $key1
						);
						$entryIndex++;
					}
				}
				var_dump($db_data);
				break;
			case 'stage3':
				$s3Data = json_decode($this->input->post('data'), true);
				$data1Index = 0;
				$data2Index = 0;
				$data3Index = 0;
				foreach ($s3Data as $key1 => $value1) {
					echo $value1['className'], $value1['formtype'], "\n";
					switch($value1['formtype']){
						case 1:
							foreach ($value1['entry'] as $key2 => $value2) {
								echo $value2['entryName'], $value2['entryPrice'], "\n";
								
								
								$db_data['1'][$data1Index] = array(
									'fooName'	=> $value2['entryName'],
									'fooPrice'	=> $value2['entryPrice'],
									'fooType'	=> $key1
								);
								$data1Index++;
							}
							break;
						case 2:
							foreach ($value1['entry'] as $key2 => $value2) {
								echo $value2['entryName'], "\n";
								
								$db_data['2'][$data2Index] = array(
									'fooName'	=> $value2['entryName'],
									'fooType'	=> $key1
								);
								$data2Index++;
							}
							break;
						case 3:
							foreach ($value1['entry'] as $key2 => $value2) {
								if ((isset($value2['A'])) && (isset($value2['B']))){
									echo "A:", $value2['A'],"   B:", $value2['B'], "\n";
								} else if (isset($value2['A'])) {
									echo "A:", $value2['A'], "\n";
								} else if (isset($value2['B'])) {
									echo "B:", $value2['B'], "\n";
								}
								
								if (isset($value2['A'])) {
									$db_data['3'][$data3Index] = array(
										'fooName'	=> $value2['A'],
										'fooAB'		=> 'A',
										'fooType'	=> $key1
									);
									$data3Index++;
								}
								
								if (isset($value2['B'])) {
									$db_data['3'][$data3Index] = array(
										'fooName'	=> $value2['B'],
										'fooAB'		=> 'B',
										'fooType'	=> $key1
									);
									$data3Index++;
								}
								
							}
							break;
					}
					
				}
				var_dump($db_data);
				break;
			case 'stage4':
				
				break;
		}
	
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */