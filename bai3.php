<?php
class nguoidung
{
    private $ten;
    private $email;
    private $matkhau;
    private $anhdaidien;
    function set_ten($ten)
    {
        $this->ten = $ten;
    }
    function get_ten()
    {
        return $this->ten;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function get_email()
    {
        return $this->email;
    }
    function get_matkhau()
    {
        return $this->matkhau;
    }
    function set_matkhau($matkhau)
    {
        $this->matkhau = $matkhau;
    }
    function get_anhdaidien()
    {
        return $this->anhdaidien;
    }
    function set_anhdaidien($anhdaidien)
    {
        $this->anhdaidien = $anhdaidien;
    }
    public function printf($ten, $email, $matkhau, $anhdaidien)
    {
        echo "Tên: " . $ten . " <br> Email: " . $email . "<br>  Mật khẩu: " . $matkhau . "<br> Ảnh đại diện: " . $anhdaidien;
    }
}
$nguoidung = new nguoidung();
echo "Người dùng: <br>";
$nguoidung->set_ten("Dương Xuân Dưỡng");
$nguoidung->set_email("duongls2ls@gmail.com");
$nguoidung->set_matkhau("123123");
$nguoidung->set_anhdaidien("dxd.png");
$nguoidung->printf($nguoidung->get_ten(), $nguoidung->get_matkhau(), $nguoidung->get_matkhau(), $nguoidung->get_anhdaidien());
