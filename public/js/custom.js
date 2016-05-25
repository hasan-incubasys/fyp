/**
 * Created by MuhammadHasan on 24-May-16.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
$(document).ready(function(){

    //GET SUBCATEGORIES BY CAT ID
    $('.cat_dropdown').on('change', function() {
        $('.sub_cat_dropdown').children().remove();
        var cat_id = this.value; // or $(this).val()
        $.ajax({
            url: public_url + '/get_sub_category_by_cat_id',
            data: {cat_id: cat_id},
            method: 'get',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {
                if (response) {
                    $.each(response, function (key, sub_category) {
                        console.log(sub_category.title);
                        $('.sub_cat_dropdown').append(
                            '<option value=' + sub_category.id + '>'
                            + sub_category.title
                            + '</option>'
                        );
                    });

                }
            }
            });
    });




    // AJAX POST ANSWER
    //$('.submit_answer').on('click',function(){
    //    $('#post_answer').submit(function (e) {
    //        var question_id = $('#question_id').val();
    //        var user_id =  $('#user_id').val();
    //        var answer =  $('#answer').val();
    //        e.preventDefault();
    //        $.ajax({
    //            url: public_url + '/post_answer',
    //            data: {answer:answer, user_id:user_id, question_id:question_id},
    //            method : 'post',
    //            success : function(response){
    //                if(response){
    //                    console.log(response);
    //                    $('.answer_list').prepend(
    //                        '<li class="answer_list">' +
    //                            '<div class="Bfc">' +
    //                                '<div>' +
    //                                    '<p><strong>Ans.</strong>' + response.description  + '</p>' +
    //                                '</div>' +
    //                                '<div class="Clr-888 Fz-12 Lh-18">' +
    //                                    '<p>' + ' ' +' - ' + response.votes  +'votes</p>' +
    //                                '</div>' +
    //                            '</div>' +
    //                        '</li>' +
    //                        '<hr   style="border-style:solid;border-width:1px;border-color:orange;">'
    //                    );
    //                }
    //            }
    //
    //        });
    //
    //    });
    //
    //});










});