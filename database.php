<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "oop";
	var $conn = "";
	 //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db); //buatlah koneksi secara OOP
	

		if ($this->conn) {
			# code...
			echo "Terhubung";
		}
		else{
			echo"Terputus";
		}
	}

	function tampil_data(){

		$data = mysqli_query($this->conn, "SELECT * FROM user");
		//lengkapilah method tampil data
		//query select user
		$hasil = [];
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$film,$travelling){
	
		
		$input="INSERT INTO user(nama,alamat,usia,film,travelling)values('$nama','$alamat','$usia','$film','$travelling')";
		mysqli_query($this->conn,$input);

	}

	function hapus($id){
		
		mysqli_query($this->conn, "DELETE  FROM user WHERE id = '$id'");
	}

	function edit($id){
		$data = mysqli_query($this->conn, "SELECT * FROM user WHERE id = $id");
		//lengkapilah method edit
		//query select from user where id ='$id'
		$hasil = [];
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$film,$travelling){
		mysqli_query($this->conn, "UPDATE user SET nama = '$nama', alamat = '$alamat', usia = '$usia', film = '$film', travelling = '$travelling' WHERE id = $id ");
		//buatlah method update
		//query update user set blablabla where id='$id'

		
	}

} 



?>