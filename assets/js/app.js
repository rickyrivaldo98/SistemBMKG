const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    swal.fire({

        icon: 'success',
        title: 'Data Pemohon',
        text: flashData
    });

}