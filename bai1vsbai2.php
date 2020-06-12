<?php 
    class name
    {
        public $duongdan;
        public $mota;
        
    }
    class baiviet extends name
    {
        public $noidung;
        public $tieude;
        public function printf($tieude,$duongdan,$mota,$noidung){
            echo "Tiêu đề: ".$tieude." <br> Đường dẫn: ".$duongdan . "<br>  Mô tả: ".$mota."<br>  Nội dung: ".$noidung;
         }
    }
    class danhmuc extends name
    {
        public $danhmuccha;
        public $anh;
        public $ten;
        public function printf($ten,$duongdan,$mota,$danhmuccha,$anh){
            echo "Tên: ".$ten." <br> Đường dẫn: ".$duongdan . "<br>  Mô tả: ".$mota."<br>  
            Danh mục cha: ".$danhmuccha. "<br> anh: ".$anh;
         }
    }
    $baiviet = new baiviet();
    $baiviet->tieude = "Công An hình sự";
    $baiviet->duongdan ="congan.com";
    $baiviet->mota ="Công An bắt tội phạm";
    $baiviet->noidung ="Công An bắt tội phạm, tội phạm chạy mất dép.";
    echo "Bài viết <br>";
    $baiviet->printf($baiviet->tieude,$baiviet->duongdan,$baiviet->mota,$baiviet->duongdan);
    $danhmuc = new danhmuc();
    $danhmuc->ten = "Sách giáo khoa";
    $danhmuc->duongdan ="sach.com";
    $danhmuc->mota ="Sách giáo khoa";
    $danhmuc->danhmuccha ="Sách";
    $danhmuc->anh = "abc.png";
    echo "<br>Danh mục <br>";
    $baiviet->printf($danhmuc->ten ,$danhmuc->duongdan,$danhmuc->mota,$danhmuc->danhmuccha,$danhmuc->anh);