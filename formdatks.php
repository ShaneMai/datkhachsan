<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đặt phòng khách sạn</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="dist/js/main-jquery.js"></script>
</head>
<body>
<?php
?>
<form method="post" action="thongtindatks.php">
    <table border="1">
        <tr>
            <td>Tên Khách hàng</td>
            <td><input type="text" name="hoten" value="" id="txtHoTen"></td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><input type="date" name="ngaysinh" value="" id="txtNgaySinh"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" value="" id="txtEmail" type="email"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="number" name="dienthoai" value="" id="numSoDienThoai"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="diachi" value="" id="txtDiaChi"></td>
        </tr>
        <tr>
            <td>Đặt phòng từ <input type="date" name="ngayden"></td>
            <td>Đến <input type="date" name="ngaydi"></td>
        </tr>
        <tr>
            <td>Hình thức thanh toán</td>
            <td> CK <input type="radio" name="httt">
                TM <input type="radio" name="httt">
                Nợ <input type="radio" name="httt"></td>
        </tr>
        <tr>
            <td>Danh sách Khách sạn</td>
            <td>
                <select name="tenKhachSan">
                    <option>-Lựa chọn khách sạn-</option>
                    <option value="Red Door">Red Door</option>
                    <option value="Mường Thanh">Mường Thanh</option>
                    <option value="Te Amo">Te Amo</option>
                    <option value="MV Motel">MV Motel</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit" name="form_click" id="btnDatVe">Đặt Phòng</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
