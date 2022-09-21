$(document).ready(function () {
    $('.openModal').on('click', function(e){
        $('#interestModal').removeClass('invisible');

        var professionalId  = $(this).data('professional');
        var specialtyId     = $(this).data('specialty');

        $('input.professional_id').val(professionalId);
        $('input.specialty_id').val(specialtyId);
        $('#interestModal').modal('show');

    });
    $('.closeModal').on('click', function(e){
        $('#interestModal').addClass('invisible');
    });
});
