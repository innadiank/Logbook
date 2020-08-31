<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Log_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
//dashboard======================================================
	
	function table_log($UserID){
		//SELECT * FROM tb_logbook 
		$query = "
			SELECT logID,WONomor, WONama,pegNama, logCatatan, DATE_FORMAT(logTanggal1,'%d % %M % %Y % %H:%i') as logTanggal1, logStatus,logUserID, CASE WHEN logStatus = 'OPEN' AND logUserID = {$UserID} THEN 1 ELSE 0 END AS Allow
			FROM tb_logbook
			LEFT JOIN tb_wo ON WONomor = logWO 
			LEFT JOIN db_personalia.ref_detail_pegawai ON pegNoReg = logUserID
		";		
		return $this->db->query($query);		
	}

	function user($id2){
		$query = "
		SELECT DISTINCT pegNama,pegNamaLengkap
		 FROM tb_user
		LEFT JOIN db_personalia.ref_detail_pegawai ON pegNoReg = userId
		WHERE userId = '$id2'
		";
		return $this->db->query($query);	

	}
//input==========================================================
	function ambil_data($table){
		return $this->db->get($table);
	}
	function submit_input($table,$data){
		//SELECT * FROM tb_logbook 
		return $this->db->insert($table,$data);		
	}
//edit===========================================================
	function submit_edit($table,$data,$where){
		//SELECT * FROM tb_logbook 
		$this->db->where($where);
		$this->db->update($table,$data);
				
	}

	function edit($table, $where){
		return $this->db->get_where($table, $where);
	}

	function editData($id){
		$query = "
		SELECT logID,WONomor,WONama , kdKrjID, kdKrjNama,DATE_FORMAT(logTanggal1,'%d-%m-%Y %H:%i:%s') as logTanggal1, DATE_FORMAT(logTanggal2,'%d-%m-%Y %H:%i:%s') as logTanggal2, logHasil, logFID,FKeterangan, logCatatan, logUserID,
		logPerson, pegNama 
		FROM tb_logbook
		LEFT JOIN tb_wo ON WONomor = logWO 
		LEFT JOIN ref_log ON FId = logFID 
		LEFT JOIN ref_kode_kerja ON kdKrjID = logKodeKerja
		LEFT JOIN db_personalia.ref_detail_pegawai ON pegNoReg = logPerson
		WHERE logID = $id
		";
		return $this->db->query($query);	

	}

	function editCust($id){
		$query = "
		SELECT 
		custID, namaPerson, namaLembaga, alamat,kotanama,propNama,
		CONCAT(kotanama,' ',propNama) AS kotaprop
		FROM tb_logbook
	
		LEFT JOIN db_kbs.ref_customer ON custID = logCustID
		LEFT JOIN db_referensi.ref_alamat ON milistId = custMilistId 
		LEFT JOIN db_referensi.ref_kota a ON kota = kotakode
		LEFT JOIN db_referensi.ref_propinsi b ON propinsi= b.propKode 
		WHERE logID = $id
		";
		return $this->db->query($query);	

	}

	function editSupp($id){
		$query = "
		SELECT 
		suppID, namaPerson, namaLembaga, alamat ,kotanama,propNama,
		CONCAT(kotanama,' ',propNama) AS kotaprop
		FROM tb_logbook
	
		LEFT JOIN db_kbs.ref_supplier ON suppID = logSuppID
		LEFT JOIN db_referensi.ref_alamat ON milistId = suppMilistId 
		LEFT JOIN db_referensi.ref_kota a ON kota = kotakode
		LEFT JOIN db_referensi.ref_propinsi b ON propinsi= b.propKode
	
		WHERE logID = $id
		";
		return $this->db->query($query);	

	}
//view===========================================================
	function send($table,$data){
		// $this->db->where($where);
		$this->db->insert($table,$data);
	}
	
	function detailData($id){
		$query = "
		
		SELECT fuID, fuLogID, fuUserID, fuTanggal, fuKeterangan, pegNama FROM tb_logbook_fu
		LEFT JOIN db_personalia.ref_detail_pegawai ON fuUserID = pegNoReg
		WHERE fuLogID = $id
		";
		return $this->db->query($query);	

	}

	function detail_table($UserID=NULL){
		$query = $this->db->get_where('tb_logbook',array('userId' => $UserID))->row();
		return $query;
	}

	function detail($UserID){
		$query = "
			SELECT * FROM tb_user WHERE userId = $UserID
		";		
		return $this->db->query($query);		
	}

	function viewData($id){
		$query = "
		SELECT logID,WONomor,WONama , kdKrjID, kdKrjNama,DATE_FORMAT(logTanggal1,'%d-%m-%Y %H:%i:%s') as logTanggal1, DATE_FORMAT(logTanggal2,'%d-%m-%Y %H:%i:%s') as logTanggal2,
		logHasil, logFID,FKeterangan, logCatatan, logUserID, logStatus,
		logPerson, pegNama 
		FROM tb_logbook
		LEFT JOIN tb_wo ON WONomor = logWO 
		LEFT JOIN ref_log ON FId = logFID 
		LEFT JOIN ref_kode_kerja ON kdKrjID = logKodeKerja
		LEFT JOIN db_personalia.ref_detail_pegawai ON pegNoReg = logPerson
		WHERE logID = $id
		";
		return $this->db->query($query);	

	}

	function close($table, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function vuser($id){
		$query = "
		SELECT pegNama,pegNamaLengkap
		 FROM tb_logbook
		LEFT JOIN db_personalia.ref_detail_pegawai ON pegNoReg = logUserID
		WHERE logID = '$id'
		";
		return $this->db->query($query);	

	}

	
//report=========================================================
	function report(){
		//SELECT * FROM tb_logbook 
		$query = "
			SELECT logID,WONomor, WONama, DATE_FORMAT(logTanggal1,'%d-%m-%Y % %H:%i%a') as logTanggal1, logStatus
			 FROM tb_logbook
			LEFT JOIN tb_wo ON WONomor = logWO 
		";		
		return $this->db->query($query);		
	}

	function search_report($logTanggal1,$logTanggal2,$ket,$logFID){
		$query = "
		SELECT logID,WONomor, WONama, DATE_FORMAT(logTanggal1,'%d % %M % %Y') as logTanggal1, logStatus FROM tb_logbook
		LEFT JOIN tb_wo ON WONomor = logWO 
		WHERE (DATE(logTanggal1) BETWEEN '$logTanggal1' AND '$logTanggal2') AND logFID LIKE '%$ket%' AND logFID LIKE '$logFID%' ORDER by logID ASC";		
		return $this->db->query($query)->result();
	}

//WO
	function table_wo(){
		$query = "
			SELECT * FROM tb_wo
		";		
		return $this->db->query($query);		
	}

	function table_wo_enter($WONomor){
		$query = "
			SELECT * FROM  tb_wo WHERE WONomor =$WONomor;
		";		
		return $this->db->query($query);		
	}

//KodeKerja
	function table_kode_kerja(){
		$query = "
			SELECT * FROM ref_kode_kerja
		";		
		return $this->db->query($query);		
	}

	function table_kode_kerja_enter($kdKrjID){
		$query = "
			SELECT * FROM  ref_kode_kerja WHERE kdKrjID =$kdKrjID;
		";		
		return $this->db->query($query);		
	}

//Customer
	function table_customer(){
		$query = "
		SELECT custID,namaPerson,namaLembaga,alamat,kotanama,propNama,
		CONCAT(kotanama,' ',propNama) AS kotaprop
		FROM db_kbs.ref_customer
		LEFT JOIN db_referensi.ref_alamat ON custMilistId = milistId
		LEFT JOIN db_personalia.ref_detail_pegawai ON custSalesman = pegNoReg
		LEFT JOIN db_referensi.ref_kota a ON kota = kotakode
		LEFT JOIN db_referensi.ref_propinsi b ON propinsi= b.propKode ORDER BY custID;
			
		";		
		return $this->db->query($query);		
	}

	function table_customer_enter($custID){
		$query = "
		SELECT custID,namaPerson,namaLembaga,alamat,kotanama,propNama,
		CONCAT(kotanama,' ',propNama) AS kotaprop
		FROM db_kbs.ref_customer
		LEFT JOIN db_referensi.ref_alamat ON custMilistId = milistId
		LEFT JOIN db_personalia.ref_detail_pegawai ON custSalesman = pegNoReg
		LEFT JOIN db_referensi.ref_kota a ON kota = kotakode
		LEFT JOIN db_referensi.ref_propinsi b ON propinsi= b.propKode 
		WHERE custID = $custID;
		";		
		return $this->db->query($query);		
	}

//Supplier
	function table_supplier(){
		$query = "
		SELECT suppID,namaPerson,namaLembaga,alamat,kotanama,propNama,
		CONCAT(kotanama,' ',propNama) AS kotaprop
		FROM db_kbs.ref_supplier
		LEFT JOIN db_referensi.ref_alamat ON suppMilistId = milistId
		LEFT JOIN db_referensi.ref_kota a ON kota = kotakode
		LEFT JOIN db_referensi.ref_propinsi b ON propinsi= b.propKode ORDER BY suppID;
		";		
		return $this->db->query($query);		
	}

	
	function table_supplier_enter($suppID){
		$query = "
		SELECT suppID,namaPerson,namaLembaga,alamat,kotanama,propNama,
		CONCAT(kotanama,' ',propNama) AS kotaprop
		FROM db_kbs.ref_supplier
		LEFT JOIN db_referensi.ref_alamat ON suppMilistId = milistId
		LEFT JOIN db_referensi.ref_kota a ON kota = kotakode
		LEFT JOIN db_referensi.ref_propinsi b ON propinsi= b.propKode 
		WHERE suppID = $suppID;
		";		
		return $this->db->query($query);		
	}

//Operator
	function table_operator(){
		$query = "
			SELECT pegNoReg,pegNama FROM db_personalia.ref_detail_pegawai;
		";		
		return $this->db->query($query);		
	}

	
	function table_operator_enter($pegNoReg){
		$query = "
		SELECT pegNoReg,pegNama FROM db_personalia.ref_detail_pegawai WHERE pegNoReg= $pegNoReg;
		";		
		return $this->db->query($query);		
	}

//FID 
	function penyebab($key){
		$query = "
		SELECT * FROM `ref_log` WHERE FID LIKE '$key%'
		";		
		return $this->db->query($query);	
	}

	function LogID(){
		return $this->db->query("SELECT logID FROM tb_logbook ORDER BY logID DESC LIMIT 1");
	}	

	


}