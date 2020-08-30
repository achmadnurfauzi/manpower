<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_chart extends CI_Model {


public function dataunitvp()
{
	 		$this->db->select('*');
	        $this->db->from('unit');
	        $this->db->GROUP_by('unitvp');
	        $query = $this->db->get();
	        return $query->result();
}

public function getPersk($unitvp = 'all', $bulan = 'all')
 	 {
 	 	if ($unitvp == 'all' && $bulan == 'all')
 	 	{
 	 		$sql = "SELECT b.category as category, count(a.persk) as jumlah from pegawai as a
	    	left join persk as b on b.persk=a.persk GROUP BY b.category ORDER BY level ASC";
	    	return $this->db->query($sql)->result();
 	 	}
 	 	else if ($unitvp == 'all')
 	 	{
 	 		$sql = "SELECT b.category as category, count(a.persk) as jumlah from pegawai as a
	    	left join persk as b on b.persk=a.persk
	    	WHERE MONTH(date_input) = '{$bulan}' GROUP BY b.category ORDER BY level ASC";
	    	return $this->db->query($sql)->result();
 	 	}
 	 	else if ($bulan == 'all')
 	 	{
 	 		$sql = "SELECT b.category as category, count(a.persk) as jumlah from pegawai as a
	    	left join persk as b on b.persk=a.persk
	    	left join unit as c on c.org_unit=a.org_unit
	    	WHERE C.unitvp = '{$unitvp}' GROUP BY b.category ORDER BY level ASC";
	    	return $this->db->query($sql)->result();
 	 	}
 	 	else
 	 	{
 	 		$sql = " SELECT b.category as category, count(a.persk) as jumlah from pegawai as a
	    	left join persk as b on b.persk=a.persk
	    	left join unit as c on c.org_unit=a.org_unit
	    	WHERE C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}'
	    	GROUP BY b.category ORDER BY level ASC ";
	    	return $this->db->query($sql)->result();
 	 	}

 	 }

 	 public function getStruktural($unitvp = 'all', $bulan = 'all')
 	 {
 	 if ($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Struktural'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else if ($unitvp == 'all')
 	 	{
 	 		$sql = "SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Struktural'
 	 		AND MONTH(date_input) = '{$bulan}'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else if($bulan == 'all')
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Struktural'
 	 	 	AND C.unitvp = '{$unitvp}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Struktural'
 	 	 	AND C.unitvp = '{$unitvp}'
 	 	 	AND MONTH(date_input) = '{$bulan}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	}

 	public function getFungsional($unitvp = 'all', $bulan = 'all')
 	 {
 	 if ($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_fungsional from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Fungsional'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else if ($unitvp == 'all')
 	 	{
 	 		$sql = "SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_fungsional from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Fungsional'
 	 		AND MONTH(date_input) = '{$bulan}'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else if($bulan == 'all')
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_fungsional from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Fungsional'
 	 	 	AND C.unitvp = '{$unitvp}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_fungsional from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Fungsional'
 	 	 	AND C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	}

 	public function getCrew($unitvp = 'all', $bulan = 'all')
 	 {
 	 if ($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_crew from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Crew'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else if ($unitvp == 'all')
 	 	{
 	 		$sql = "SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_crew from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Crew'
 	 		AND MONTH(date_input) = '{$bulan}'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else if($bulan == 'all')
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_crew from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Crew'
 	 	 	AND C.unitvp = '{$unitvp}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_crew from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Crew'
 	 	 	AND C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	}

 	 public function getWorkOutside($unitvp = 'all', $bulan = 'all')
 	 {
 	 if ($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_workoffside from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Work Outside GA'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else if ($unitvp == 'all')
 	 	{
 	 		$sql = "SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_workoffside from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Work Outside GA'
 	 		AND MONTH(date_input) = '{$bulan}'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else if($bulan == 'all')
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_workoffside from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Work Outside GA'
 	 	 	AND C.unitvp = '{$unitvp}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_workoffside from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Work Outside GA'
 	 	 	AND C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	}

 	 public function getProject($unitvp = 'all', $bulan = 'all')
 	 {
 	 if ($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_project from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Project'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else if ($unitvp == 'all')
 	 	{
 	 		$sql = "SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_project from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 		WHERE status = 'Project'
 	 		AND MONTH(date_input) = '{$bulan}'
 	 		GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else if($bulan == 'all')
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_project from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Project'
 	 	 	AND C.unitvp = '{$unitvp}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	 	else
 	 	{
 	 		$sql = " SELECT b.jobcat as jobcat, count(b.jobcat) as jumlah_project from pegawai as a
 	 		left join jobcategory as b on b.jobtext=a.jobtext
 	 	 	left join unit as c on c.org_unit=a.org_unit
 	 	 	WHERE status = 'Project'
 	 	 	AND C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}'
 	 	 	GROUP BY b.jobcat ORDER BY level ASC ";
 	 		return $this->db->query($sql)->result();
 	 	}
 	}

 	 public function getHubungan($unitvp ='all', $bulan = 'all')
 	 {
 	 	if($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql=" SELECT b.nama_persg as persg, count(a.persg) as jumlah from pegawai as a
 	 	left join hubungankerja as b on b.persg=a.persg GROUP BY b.nama_persg ORDER BY level ASC";
 	 	return $this->db->query($sql)->result();
 	 }
 	 else if ($unitvp == 'all')
 	 {
 	 	$sql = " SELECT b.nama_persg as persg, count(a.persg) as jumlah from pegawai as a
 	 	left join hubungankerja as b on b.persg=a.persg WHERE MONTH(date_input) = '{$bulan}' GROUP BY b.nama_persg ORDER BY level ASC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 else if ($bulan == 'all')
 	 {
 	 	$sql=" SELECT b.nama_persg as persg, count(a.persg) as jumlah from pegawai as a
 	 	left join hubungankerja as b on b.persg=a.persg
 	 	left join unit as c on c.org_unit=a.org_unit WHERE C.unitvp = '{$unitvp}' GROUP BY b.nama_persg ORDER BY level ASC";
 	 	return $this->db->query($sql)->result();
 	 }
 	 else
 	 {
 	 	$sql=" SELECT b.nama_persg as persg, count(a.persg) as jumlah from pegawai as a
 	 	left join hubungankerja as b on b.persg=a.persg
 	 	left join unit as c on c.org_unit=a.org_unit WHERE C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}' GROUP BY b.nama_persg ORDER BY level ASC";
 	 	return $this->db->query($sql)->result();
 	 }
 	 }

 	 public function getGP($unitvp ='all', $bulan = 'all')
 	 {
 	 	if($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT b.category as category, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a left join persk as b on b.persk=a.persk GROUP BY b.category ORDER BY level ASC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 elseif ($unitvp == 'all') {
 	 	$sql = " SELECT b.category as category, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a
 	 	left join persk as b on b.persk=a.persk
 	 	WHERE MONTH(date_input) = '{$bulan}' GROUP BY level ORDER BY category ASC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 elseif ($bulan == 'all') {
 	 	$sql = " SELECT b.category as category, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a left join persk as b on b.persk=a.persk
 	 	left join unit as c on c.org_unit=a.org_unit WHERE C.unitvp = '{$unitvp}' GROUP BY level ORDER BY category ASC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 else
 	 {
 	 	$sql = " SELECT b.category as category, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a left join persk as b on b.persk=a.persk
 	 	left join unit as c on c.org_unit=a.org_unit WHERE C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}' GROUP BY b.category ORDER BY level ASC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 }

  	 public function getAgeGender($unitvp ='all', $bulan = 'all')
  	 {
  	 	if($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql =" SELECT b.agecat as agecat, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a Left join agecategory as b on b.age=a.age GROUP BY b.agecat ORDER BY agecat DESC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 elseif ($unitvp == 'all') {
 	 	$sql =" SELECT b.agecat as agecat, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a Left join agecategory as b on b.age=a.age
 	 	WHERE MONTH(date_input) = '{$bulan}' GROUP BY b.agecat ORDER BY agecat DESC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 elseif ($bulan == 'all') {
 	 	$sql = "SELECT b.agecat as agecat, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female, count(gender) as jumlah_gender from pegawai as a Left join agecategory as b on b.age=a.age
 	 	left join unit as c on c.org_unit=a.org_unit WHERE C.unitvp = '{$unitvp}' GROUP BY b.agecat ORDER BY agecat DESC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 else
 	 {
 	 	$sql =" SELECT b.agecat as agecat, count(if(gender ='Male', gender, null)) as jumlah_male, count(IF(gender='Female', gender, null)) as jumlah_female from pegawai as a Left join agecategory as b on b.age=a.age
 	 	left join unit as c on c.org_unit=a.org_unit WHERE C.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}' GROUP BY b.agecat ORDER BY agecat DESC ";
 	 	return $this->db->query($sql)->result();
 	 }
 	 }

 	 public function getPerskUmur($unitvp ='all', $bulan = 'all')
 	 {
 	 	if($unitvp == 'all' && $bulan == 'all')
 	 {
 	 	$sql = " SELECT c.agecat as agecat, count(IF(b.category = 'MT', a.persk, null)) as jumlah_MT, count(IF(b.category='Cabin', a.persk,null)) as jumlah_cabin, count(IF(b.category='cockpit', a.persk,null)) as jumlah_cockpit, count(IF(b.category='Non Crew', a.persk,null)) as jumlah_noncrew from pegawai as a
 	 		left join persk as b on b.persk=a.persk
 	 		left join agecategory as c on c.age=a.age GROUP BY c.agecat ORDER BY agecat DESC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 elseif ($unitvp == 'all') {
 	 	$sql = " SELECT c.agecat as agecat, count(IF(b.category = 'MT', a.persk, null)) as jumlah_MT, count(IF(b.category='Cabin', a.persk,null)) as jumlah_cabin, count(IF(b.category='cockpit', a.persk,null)) as jumlah_cockpit, count(IF(b.category='Non Crew', a.persk,null)) as jumlah_noncrew from pegawai as a
 	 		left join persk as b on b.persk=a.persk
 	 		left join agecategory as c on c.age=a.age
 	 	 	WHERE MONTH(date_input) = '{$bulan}' GROUP BY c.agecat ORDER BY agecat DESC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else if ($bulan == 'all')
 	 {
 	 	$sql = " SELECT c.agecat as agecat, count(IF(b.category = 'MT', a.persk, null)) as jumlah_MT, count(IF(b.category='Cabin', a.persk,null)) as jumlah_cabin, count(IF(b.category='cockpit', a.persk,null)) as jumlah_cockpit, count(IF(b.category='Non Crew', a.persk,null)) as jumlah_noncrew from pegawai as a left join persk as b on b.persk=a.persk left join agecategory as c on c.age=a.age
 	 		left join unit as d on d.org_unit=a.org_unit WHERE d.unitvp = '{$unitvp}' GROUP BY c.agecat ORDER BY agecat DESC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 else
 	 {
 	 	$sql = " SELECT c.agecat as agecat, count(IF(b.category = 'MT', a.persk, null)) as jumlah_MT, count(IF(b.category='Cabin', a.persk,null)) as jumlah_cabin, count(IF(b.category='cockpit', a.persk,null)) as jumlah_cockpit, count(IF(b.category='Non Crew', a.persk,null)) as jumlah_noncrew from pegawai as a left join persk as b on b.persk=a.persk left join agecategory as c on c.age=a.age
 	 		left join unit as d on d.org_unit=a.org_unit WHERE d.unitvp = '{$unitvp}' AND MONTH(date_input) = '{$bulan}' GROUP BY c.agecat ORDER BY agecat DESC ";
 	 		return $this->db->query($sql)->result();
 	 }
 	 }

 }
