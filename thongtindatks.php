<?php
$thongTinKhachSan = [
    [
        "ten_khach_san" => "Red Door",
        "ngay_den" => "2021-06-20",
        "ngay_di" => "2021-06-22"
    ],
    [
        "ten_khach_san" => "Mường Thanh",
        "ngay_den" => "2021-06-21",
        "ngay_di" => "2021-06-23"
    ],
    [
        "ten_khach_san" => "Te Amo",
        "ngay_den" => "2021-06-20",
        "ngay_di" => "2021-06-22"
    ],
    [
        "ten_khach_san" => "MV Motel",
        "ngay_den" => "2021-06-20",
        "ngay_di" => "2021-06-22"
    ]
];
function rand_string($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen($chars);
    for ($i = 0; $i < $length; $i++) {
        $strg .= $chars[rand(0, $size)];
    }
    return $strg;
}

$my_string = rand_string(8);
if (isset($_POST['form_click'])) {
    foreach ($thongTinKhachSan as $key => $value) {
        if ($_POST['tenKhachSan'] != $value['ten_khach_san']) {
            echo "Không có khách sạn hợp lệ";
            return;
        } else {
            if ($_POST['ngayden'] != $value['ngay_den']) {
                echo "Không có chuyến bay hợp lệ";
                return;
            } elseif ($_POST['ngaydi'] != $value['ngay_di']) {
                echo "Không có chuyến bay hợp lệ";
                return;
            }
            echo "Chúc mừng bạn đã đặt Phòng thành công" . "</br>";
            echo "Thông tin Phòng" . "</br>";
            echo "Họ và tên: " . $_POST['hoten'] . "</br>";
            echo "Ngày sinh: " . $_POST['ngaysinh'] . "</br>";
            echo "Số điện thoại: " . $_POST['dienthoai'] . "</br>";
            echo "Địa chỉ: " . $_POST['dienthoai'] . "</br>";
            echo "Tên khách sạn: " . $_POST['tenKhachSan'] . "</br>";
            echo "Mã Phòng: " . $my_string . "</br>";
            echo "Ngày đến : " . $_POST['ngayden'] . "</br>";
            echo "Ngày đi : " . $_POST['ngaydi'] . "</br>";
            break;
        }
    }
}
// Dùng hàm trừ thời gian date diff
//Chuyển ngày đặt về timestamp ví dụ
// $timestampngaydat = strtotime($ngaydat); - dạng time stamp
// Duyệt arr khách sạn và so sánh$khach sạn vơi id