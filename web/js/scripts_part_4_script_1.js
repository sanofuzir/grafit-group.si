$(function() {
     $('.confirmation').on('click', function (e) {
         var msg = $(e.currentTarget).data("confirmation");
         if (msg == '') {
            msg = "Ali si prepričan";
         }
         return confirm(msg);
     });

     $("a[data-target=#myModal]").click(function(e) {
         e.preventDefault();
         var target = $(this).attr("href");

         // load the url and show modal on success
         $("#myModal .modal-body").load(target, function() {
              $("#myModal").modal("show",{backdrop: false});
         });
     });

     $("select[data-add]").each(function() {
        var id = $(this).data('add');
        $(this).after(" ",$("#"+id));
     });

     $('#myModal').on('hidden', function () {
        $('.modal-body').empty();
        $('.modal-header h3').empty();
        $('.submit').off('click');
     });

     $("#myModal").on('show', function(){
        $('form.ajax').parent().find('h2').appendTo('.modal-header h3');
     });
     $('#myModal').on('shown', function () {

        $('.submit').on('click', function(e) {
            $('form.ajax').submit();
            e.preventDefault();
        });

        $('form.ajax:first *:input[type!=hidden]:first').focus();

        $('form.ajax').submit(function(e) {
            e.preventDefault();
            $form = $(this);
            var url = $form.attr("action");
            var option = $form.data("option");
            $.ajax({
              type: "POST",
              url: url,
              data: $form.serialize()
            }).done(function(response, textStatus, jqXHR) {
              var data = JSON.parse(response);
              $('#' + option).append(new Option(data.name,data.id,null, true));
              $('#myModal').modal('hide');

            }).fail(function(jqXHR, textStatus, error) {
                alert(jqXHR.responseText);
                console.log(jqXHR.responseText,textStatus,error);
            });
            return false;
        });
     })



});
