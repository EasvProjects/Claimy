
 $(document).ready(function(){
    $('.navbar-toggler').click(function(){
      $('.navbar-menu').toggleClass('active')
      $('.navbar-toggler').toggleClass('cross')
    });


   /// email to client btn event
    $('#sent_to_client_btn').click(function(){
        $('#email_to_client').modal("hide");
      //  callback();
        $('#sent1').modal("show");
    });
/// eamil to parking btn event
    $('#sent_to_parking_btn').click(function(){
        $('#email_to_parking').modal("hide");
         $('#sent2').modal("show");
    });

  })



 /*----------------------------------------
Upload btn
------------------------------------------*/
var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.btn'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('Photo Chosen');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
 

$('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    var tmppath = URL.createObjectURL(event.target.files[0]);

    reader.onload = function (e) {
      $('#img-uploaded').attr('src', e.target.result);
      $('input.img-path').val(tmppath);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$(".uploader").change(function(){
  readURL(this);
});

//$('input.cb-value').prop("checked", true);
$('.cb-value').click(function() {
  var mainParent = $(this).parent('.toggle-btn');
  if($(mainParent).find('input.cb-value').is(':checked')) {
    $(mainParent).addClass('active');
    $('#offmode').modal();

   
  } else {
    $(mainParent).removeClass('active');
  }

})
 $('#modal-close').click(function(){
     $('.toggle-btn').removeClass('active');
    $('#offmode').modal("hide");
    $('.cb-value').prop("checked", false);
});

 $('#offmode-yes').click(function(){
    $('#offmode').modal("hide");
});



 $(document).ready(function() {
    $('#case_grid').DataTable(
{
 "searching": false
  
}
      );
} );
// $('#add-team-btn').click(function(){
//    $('#team-modal').modal();
// })

// $(document).ready(function() {

//    ///table checkable
//     $('.DataTable').DataTable( {
//        "lengthChange": false,
//        "ordering": false,
//        "searching": false,

//       "columnDefs": [
//          {
//             'targets': 0,
//              'checkboxes': {
//                'selectRow': true
//              }
//           //  'checkboxes': true
//          }
//         // { targets: 'no-sort', orderable: false }

//          ],
          
//          "select": {
//           style:'multi',
//           selector: 'td:first-child'
//          }

//     } );

//     } );

//$('.your-checkbox').prop('indeterminate', true)


/***********datepicker************/
 $('#news_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
  

   var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#startDate').datepicker({
            uiLibrary: 'bootstrap4',
          //  iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate').val();
            }
        });
        $('#endDate').datepicker({
            uiLibrary: 'bootstrap4',
           // iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate').val();
            }
        });
/***********timepicker************/
 // $('#ticket_time').timepicker({
 //            uiLibrary: 'bootstrap4',
 //             modal: false, footer: false 
 //        });




