/**
 * Created by MuhammadHasan on 24-May-16.
 */
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





    //










});