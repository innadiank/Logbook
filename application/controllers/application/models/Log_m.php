<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Log_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
//dashboard======================================================
	
	// function table_log($UserID){
	// 	//SELECT * FROM tb_logbook 
	// 	$query = "
	// 		SELECT logID,WONomor, WONama,pegNama, logCatatan, DATE_FORMAT(logTanggal1,'%d % %M % %Y % %H:%i') as logTanggal1, logStatus,logUserID, CASE WHEN logStatus = 'OPEN' AND logUserID = {$UserID} THEN 1 ELSE 0 END AS Allow
	// 		FROM tb_logbook
	// 		LEFT JOIN tb_wo ON WONomor = logWO 
	// 		LEFT JOIN db_personalia.ref_detail_pegawai ON pegNoReg = logUserID
	// 	";		
	// 	return $this->db->query($query);		
	// }

	function user($id){
		$query = "
		SELECT DISTINCT nama
		 FROM user
		WHERE idUser = '$id'
		";
		return $this->db->query($query);	

	}


}