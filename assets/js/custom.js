// *******************latest carousel***********************
      
             var Lowl = $("#owl-news");
             Lowl.owlCarousel({
              //   items: 5,
                 items : 3, //10 items above 1000px browser width
                 itemsDesktop : [1000,2], //5 items between 1000px and 901px
                 itemsDesktopSmall : [991,2], // 3 items betweem 900px and 601px
                 itemsTablet: [600,2], //2 items between 600 and 0;
               //  itemsMobile : false , // itemsMobile disabled - inherit from itemsTablet option
               dots: false,
               stagePadding: Number,   
               //stagePadding: 50,
               loop: false,
               margin:30,
                rtl:true,
               pagination: false,
            //     responsiveClass:true,
            //    responsive : {
            //     // breakpoint from 0 up
            //     0 : {
            //       items : 1 
            //     },
            //     // breakpoint from 480 up
            //     480 : {
            //       items : 2 
            //     },
            //     // breakpoint from 992 up
            //     992 : {
            //        items : 3
            //     }
            // }
             })
             $(".latest-item-nav-next").click(function () {

               Lowl.trigger('owl.next');
             });
             $(".latest-item-nav-prev").click(function () {
               Lowl.trigger('owl.prev');
             });
             Lowl.trigger('owl.play', false);


 $(document).ready(function(){
    $('.navbar-toggler').click(function(){
      $('.navbar-menu').toggleClass('active')
      $('.navbar-toggler').toggleClass('cross')
    })
  })

 /***************form wizard**********/
 $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
            allprevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.addClass('btn-light');
            $item.addClass('btn-grd');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-grd').trigger('click');
});


$('.prevBtn').click(function(){
  $('#step-1').css('display', 'flex');
  $(this).closest(".setup-content").css('display', 'none');
})
 

 /**************form wizard end****************/

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


/***********datepicker************/
 $('#ticket_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
  $('#due_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
/***********timepicker************/
 $('#ticket_time').timepicker({
            uiLibrary: 'bootstrap4',
             modal: false, footer: false 
        });