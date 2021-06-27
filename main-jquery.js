$(document).ready(function () {
    $('#btnDatVe').click(function () {
        let hoten = $('#txtHoTen').val();
        let ngaysinh = $('#txtNgaySinh').val();
        let email = $('#txtEmail').val();
        let sdt = $('#numSoDienThoai').val();
        let diachi = $('#txtDiaChi').val();
        if (hoten === "") {
            swal("Cảnh báo", "Mời bạn nhập vào Họ tên", "error");
            return;
        }
        if (ngaysinh === "") {
            swal("Cảnh báo", "Mời bạn nhập vào Ngày sinh", "error");
            return;
        }
        if (email === "") {
            swal("Cảnh báo", "Mời bạn nhập vào Email", "error");
            return;
        }
        if (!isEmail(email)) {
            swal("Cảnh báo", "Yêu cầu nhập đúng định dạng email", "error");
            return;
        }
        if (sdt === "") {
            swal("Cảnh báo", "Mời bạn nhập vào Số điện thoại", "error");
            return;
        }
        if (!isMobileVietNam(sdt)) {
            swal("Cảnh báo", "Định dạng số Hotline phải là số điện thoại việt nam", "error");
            return;
        }
        if (diachi === "") {
            swal("Cảnh báo", "Mời bạn nhập vào Số điện thoại", "error");
        }


function isMobileVietNam(mobile) {
    let regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    return regex.test(mobile);
}

function isEmail(email) {
    let regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    return regex.test(email)
}
    })
});