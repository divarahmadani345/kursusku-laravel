import './bootstrap';
import 'bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

// Fungsi untuk mengecek ketersediaan
function cekKetersediaan(id) {
    const $box = $('#availability');

    if (!id) {
        $box.removeClass('alert-success alert-danger').addClass('alert-secondary')
            .text('Pilih kursus untuk melihat sisa kursi.');
        return;
    }

    $box.removeClass('alert-success alert-danger').addClass('alert-secondary')
        .text('Memuat ketersediaan...');

    $.ajax({
        url: `/courses/${id}/availability`,
        method: 'GET',
        dataType: 'json',
        success(data) {
            $box.removeClass('alert-secondary alert-danger').addClass('alert-success')
                .text(`${data.remaining} kursi tersisa untuk ${data.course}.`);
        },
        error() {
            $box.removeClass('alert-secondary alert-success').addClass('alert-danger')
                .text('Gagal memuat ketersediaan kursus.');
        }
    });
}

// 1. Saat dropdown diubah
$(document).on('change', '#course_id', function () {
    cekKetersediaan(this.value);
});

// 2. Saat halaman selesai dimuat (misal setelah submit form)
$(document).ready(function () {
    const selectedId = $('#course_id').val();
    if (selectedId) {
        cekKetersediaan(selectedId);
    }
});