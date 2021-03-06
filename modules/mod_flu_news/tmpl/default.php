<style type="text/css">
.flu-news-article {
    padding-left: 6%;
    padding-right: 0%;
    padding-bottom: 3%;
}
#flu-news {
  box-shadow: inset 0 30px 30px -10px rgba(192,192,192,75);
    padding-top: 1%;
}
.fn-text-medium{
  font-size: 16pt;
}
.fn-text-small {
  font-size: 10pt;
}

.dark-blue-text-futura{
  color: #25a4ba;
  font-family: 'futura-medium';
  /*font-family: 'FatFrank Heavy';*/
}
#flu-news-nation {
  background: #269fba;
  min-height: 200px;
}



.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  border-radius: 0;
  border: none;
  background-color: none;
}

.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: .5;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: none;
}
.carousel-control.left {
  background-image: none;
      
}
.carousel-control.right {
    
  left: auto;
  right: 0;
  background-image: none;
}
.next-page, .next-page1, .prev-page, .prev-page1 {
  width: 70%;
  cursor: pointer;
}

.carousel-control {
  padding-top:10.25%;
  width:5%;
}
.flu-news-img {
    width: 20%;
    padding: 0;
}
.flu-news-img-src {
  min-height: 175px;
    height: 175px;
    width: 100%;
}
.carousel-control {
  color: black !important;
}
.flu-news-intro {
  padding-top: 4%;
  padding-left: 0;
  padding-right: 0;
}
img.chevron.chevron-left {
/*    width: 100%;
    position: absolute;
    margin-left: 30px;
    padding-top: 30px;
*/}
.fn-slider-desc{
  padding: 2%;
}
.right.carousel-control {
    text-align: right;
}
.box-color {
  box-shadow: 1px 1px 10px 0px #888888;
}
img.next-page1.chevron.chevron-left:hover, img.next-page.chevron.chevron-left:hover, img.prev-page.chevron.chevron-right:hover, img.prev-page1.chevron.chevron-right:hover {
    opacity: .5;
}
.curated-articles-title {
  font-family: 'fatfrank';
  font-size: 20pt;
}
.curated-articles-desc {
  font-family: 'futura-medium';
  font-size: 15pt;
}
.curated-articles-title, .curated-articles-desc {
  color: #ffffff;
  text-transform: uppercase;
}
.around-nation {
    padding-left: 12%;
    padding-right: 12%;
}
.flu-curated-img{
  width: 20%;
  padding-left: 3px;
  padding-right: 3px;
 
}
.flu-curated-img-src {
    height: auto;
    width: 100%;
}
.fn-slider-desc-curated {
    padding-left: 10px;
    padding-right: 10px;
    background: #ffffff;
    min-height: 80px;
    max-height: 100px;
}
.author{
    padding-left: 10px;
    padding-right: 10px;
    background: #ffffff;
}
.fn-nation-body{
      padding-bottom: 2%;
}
.arrow {
padding-top: 10%;
}
.arrow1 {
padding-top: 6%;
}
.flu-news-img, .flu-curated-img, .more-art-container,.article-item {
  cursor: pointer;
}
.flu-news-img:hover, .flu-curated-img:hover, .more-art-container:hover,.article-item:hover{
  opacity: .8;
}
.flu-archive-article {
    padding-left: 6%;
    padding-right: 0%;
    padding-bottom: 3%;
    padding-top: 3%;
}
.more-art-container {
    margin-bottom: 10px;
}
.year-drop, .month-drop {
    max-width: 100px;
    min-width: 100px;
}
.art-archives-img{
  width:100%;
  height: 100px;
  object-fit:cover;
  box-shadow: 3px 5px 15px rgba(0, 0, 0, 0.27);
}
.original-articles, .curated-articles{
  position: relative;
  transition:1s;
  left: 0;
}
label{
  font-weight: normal;
}
.article-item{
  color: #603f1b;
}
::-webkit-scrollbar {
    height: 10px;
    width: 10px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.15); 
}
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background:#4bd2f5;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.15); 
}
.year-drop{
  min-width: 120px !important;
  border-radius: 8px !important;
  width: 120px;
  background: #46cff5;
  color: #ffffff !important;
  text-transform: uppercase;
  font-weight: 700;
  padding: 5px;
  cursor: pointer;
  border: none;
}
</style>

<div class="offset-val" style="display:none;">
</div>
<div class="col-md-12 full-width" id="flu-news">

  <div class="col-md-12  flu-news-article">
    <div class="col-md-2 flu-news-intro">
      <div class="blue-text header-title-large">FLU NEWS</div>
      <div class="dark-blue-text-futura fn-text-medium">Your health is important to us.</div> 
      <div class="blue-text-futura fn-text-small">Read articles on the latest information about flu from top news agencies, and learn about new ways to keep healthy.</div>
    </div>
    <div class="col-md-1  arrow"><img class="original prev-page chevron chevron-right" src="images/assets/arrow-prev.png" disabled></div>
    <div class="col-md-1  arrow-mob arrow" style="display:none;"><img class="original next-page chevron chevron-left" datax="0" src="images/assets/arrow-next.png"></div>
    <div class="col-md-8 pad-0 img-slider-div">
      <div class="col-md-12 pad-0">
           <h1></h1>
          <div class="well-none box-color">
              <div id="myCarousel" class="carousel slide" data-interval="false" data-pause="false" data-wrap="false">
                  <div class="carousel-inner">
                    <div class="original-articles">

                    </div>
                  </div>
              </div>
          </div>
          <div class="pagination"></div>
      </div>
    </div>

    <div class="col-md-1 arrow arrow-desk"><img class="original next-page chevron chevron-left" src="images/assets/arrow-next.png"></div>
  </div>













  <div class="col-md-12 full-width"  id="flu-news-nation">

    <div class="col-md-12 around-nation">
      <div class="curated-articles-title">Around the World</div>
      <div class="curated-articles-desc">Flu-related news from the nation curated from the web</div>
    </div>

    <div class="col-md-12 slider-content-curated">
        <div class="col-md-1 arrow1"><img class="curated prev-page chevron chevron-right" src="images/assets/arrow-prev-white.png"></div>
        <div class="col-md-1 arrow1 arrow1-mob" style="display:none;"><img class="curated next-page chevron chevron-left" src="images/assets/arrow-next-white.png"></div>

        <div class="col-md-10 slider-curated-body">
          <div class="col-md-12 fn-nation-body">
               <h1></h1>
              <div class="well-none">
                  <div id="myCarousel" class="carousel slide" data-interval="false" data-pause="false" data-wrap="false">
                      <div class="carousel-inner">
                        <div class="curated-articles">

                        </div>
                      </div>
                  </div>
              </div>
              <div class="pagination1"></div>
          </div>
        </div>

        <div class="col-md-1 arrow1 arrow1-desk"><img class="curated next-page chevron chevron-left" src="images/assets/arrow-next-white.png"></div>

    </div>

  </div>






  <div class="col-md-12 col-sm-12 col-xs-12 flu-archive-article">
    <div class="col-md-3 pad-0">
      <div class="blue-text header-title">FLU ARTICLE ARCHIVE</div>
      <div class="dark-blue-text-futura fn-text-medium">
        <?php echo date('Y'); ?>
      </div> 
      <div class="blue-text-futura fn-text-small">
        <p>
       <!--  <?php
$monthArray = range(1, 12);
?>
<select class="month-drop" name="month">
    <option value="">Select Month</option>
    <?php
    foreach ($monthArray as $month) {
        // padding the month with extra zero
        $monthPadding = str_pad($month, 2, "0", STR_PAD_LEFT);
        // you can use whatever year you want
        // you can use 'M' or 'F' as per your month formatting preference
        $fdate = date("F", strtotime("2016-$monthPadding-01"));
        echo '<option value="'.$monthPadding.'">'.$fdate.'</option>';
    }
    ?>
</select>
 -->

        </p>

        <p>
<?php
// set start and end year range
$yearToday = date("Y");
$yearFrom  = $yearToday - 15;
$yearArray = range($yearFrom, $yearToday);
?>
<!-- displaying the dropdown list -->
<select class="year-drop" name="year">
    <option value="" >Select Year</option>
    <?php
    foreach ($yearArray as $year) {
        // if you want to select a particular year
        $selected = ($year == $yearToday) ? 'selected' : '';
        echo '<option value="'.$year.'">'.$year.'</option>';
       // echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
    }
    ?>
</select>
</p>
      </div>
    </div>
    <div class="col-md-9 pad-0">
      <!-- <div class="black-text"><?php echo date('F'); ?></div> -->

      <div class="list-art-container">
        
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 no-art" style="display:none;">No articles to show on selected month and year</div>
      <div class="pagination2"></div>

    </div>

  </div>







</div>

<input type="hidden" class="original-negative-left" value="0">
<input type="hidden" class="curated-negative-left" value="0">







<script type="text/javascript">
$(document).ready(function() {
  $('.carousel').carousel('pause');

  $('.carousel').carousel({
  pause: true,
  interval: false
  })
    
    $('#myCarousel').on('slid.bs.carousel', function() {
      //alert("slid");
  });
 

var screensize = $(window).width(); 
// alert(screensize);
if (screensize > 757){
  var owidth = 170;
  var cwidth = 209;
  var lx = 5;
}else
if(screensize <= 630 && screensize >= 470){
  var owidth = 180;
  var cwidth = 180;
  var lx = 3;
}else
if(screensize <= 405 && screensize >= 364){
  var owidth = 130;
  var cwidth = 120;
  var lx = 3;
}else{
  var owidth = 100;
  var cwidth = 100;
  var lx = 2;
}
$('.next-page').attr('data-next',lx);
$('.prev-page').attr('data-prev',lx);

var offset = 1;

$.ajax({
  type: 'Post',
  url: 'templates/bioflu/controller_tek.php?query=get_limitArchive',
}).done(function(data){
  var obj = JSON.parse(data);
  $.each(obj, function(x,y){
    var limit_archive = y.limit_archive;
    get_original(limit_archive,offset,owidth);
  });
});

$.ajax({
  type: 'Post',
  url: 'templates/bioflu/controller_tek.php?query=count_curated',
}).done(function(data){
    get_curated(data,offset,cwidth);
});


function get_original(limit_archive,offset,owidth){
  var con_width = parseInt(limit_archive) * parseInt(owidth);
  $.ajax({
    type: 'Post',
    url: 'templates/bioflu/controller_tek.php?query=get_articleList',
    data: {limit:limit_archive, offset:offset, cat:'1'}
  }).done(function(data){
    var obj = JSON.parse(data);
    var htm = '';
    var i = 1;

    
    $.each(obj, function(x,y){
      var title = y.article_title;
      var alias = title.replace(/ /g,"-");
      htm += '<div class="article-item" data-id="'+i+'" alias="'+alias+'" style="width:'+owidth+'px; float:left;">';
      htm += '<img src="'+y.image+'" width="100%" style="min-height:'+owidth+'px;max-width: 100%;max-height: 100%; object-fit: cover; height:'+owidth+'px;">';
      htm += '<div style="padding:5px;">';
      htm += '<label class="p2 p2_slider p_upper">'+y.article_title+'</label>';
      htm += '<p class="p3 p3_slider">'+$(y.intro_text).text().substr(0,50)+'... </p>';
      htm += '</div>';
      htm += '</div>';
      i++;
    });
    $('.original-articles').css('width',con_width+'px');
    $('.carousel-inner').css('height','auto').css('left','0px');
    $('.original-articles').html(htm);
    arrow(limit_archive,owidth,'.original');
  });
}

function get_curated(limit_archive,offset,cwidth){
  var con_width = parseInt(limit_archive) * parseInt(cwidth);
  $.ajax({
    type: 'Post',
    url: 'templates/bioflu/controller_tek.php?query=get_articleList',
    data: {limit:limit_archive, offset:offset, cat:'2'}
  }).done(function(data){
    var obj = JSON.parse(data);
    var htm = '';
    var i = 1;

    
    $.each(obj, function(x,y){
      var title = y.article_title;
      var alias = title.replace(/ /g,"-");
      var item_width = cwidth - 5;
      htm += '<div class="article-item" data-id="'+i+'" alias="'+alias+'" style="width:'+item_width+'px; float:left;margin-right:5px;height:auto;max-height:200px;min-height:200px;background:#fff;">';
      htm += '<img src="'+y.image+'" width="100%" style="min-height:'+cwidth/2+'px;max-width: 100%;max-height: 100%; object-fit: cover; height:'+cwidth/2+'px;">';
      htm += '<div style="padding:5px;">';
      htm += '<label class="p2_slider style="min-height:80px">'+y.article_title+'</label>';
      htm += '<p class="p2_slider p_upper">'+y.author+'</p>';
      htm += '</div>';
      htm += '</div>';
      i++;
    });
    $('.curated-articles').css('width',con_width+'px');
    $('.carousel-inner').css('height','auto').css('left','0px');
    $('.curated-articles').html(htm);
    arrow(limit_archive,cwidth,'.curated');
  });
}




$(document).on('click','.article-item', function(){
var alias = $(this).attr('alias');
window.location = 'article?q='+alias;
});


function arrow(limit,width,cat){
$(cat+'.next-page').click(function(){
var left = parseInt($(cat+'-negative-left').val());
var newLeft = left - width;
var data_next = parseInt($(cat+'.next-page').attr('data-next'));
var data_prev = parseInt($(cat+'.prev-page').attr('data-prev'));

if(data_next == limit){
  $(this).attr('disabled', 'disabled');
}else{
  $(this).removeAttr('disabled', 'disabled');
  $(cat+'.prev-page').attr('data-prev',data_prev - 1);
  $(cat+'.next-page').attr('data-next',data_next + 1);
  $(cat+'-articles').css('left', newLeft);
  $(cat+'-negative-left').val(newLeft);
}


});

$(cat+'.prev-page').click(function(){
// var limit = parseInt($('.hidden-limit').val());
// var article_width = parseInt($('.hidden-width').val());
var left = parseInt($(cat+'-negative-left').val());
var newLeft = left + width;
var data_next = parseInt($(cat+'.next-page').attr('data-next'));
var data_prev = parseInt($(this).attr('data-prev'));

if(data_next == data_prev){
  $(this).attr('disabled', 'disabled');
}else{
  $(this).removeAttr('disabled', 'disabled');
  var data_next = parseInt($(cat+'.next-page').attr('data-next'));
  $(this).attr('data-prev',data_prev + 1);
  $(cat+'.next-page').attr('data-next',data_next - 1)
  $(cat+'-articles').css('left', newLeft);
  $(cat+'-negative-left').val(newLeft);
}

});
}

});
</script>
<script type="text/javascript">

$(document).ready(function() {
  
  var base_url = jQuery('body').attr('data-baseurl')+'/';
  var limit = '10';
  var offset = '1';
  var original = '1';
  var year = '';
  var month = '';
  get_offset(limit,offset,year);
 


  $(document).on('click','.next-page2', function() {
    var page_number2 = parseInt($('.page-number2').val());
    var next2 = page_number2 +10;
    var year = parseInt($('.year-drop').val());
    var month = parseInt($('.month-drop').val());
    if(isNaN(month)) { month = '';}if(isNaN(year)) {year = '';}
    if(page_number2!=last2()){
      get_list2(limit,next2,year,month);
      $('.page-number2').val(next2);
    }
  });

  $(document).on('click','.prev-page2', function() {
    var page_number2 = parseInt($('.page-number2').val());
    var prev2 = page_number2 -10;
    var year = parseInt($('.year-drop').val());
    // var month = parseInt($('.month-drop').val());
    if(isNaN(month)) { month = '';}if(isNaN(year)) {year = '';}
    if(page_number2!=first2()){
      get_list2(limit,prev2,year);
      $('.page-number2').val(prev2);
    }
  });

  $(document).on('change','.page-number2', function() {
    var page_number2 = parseInt($(this).val());

    var year = parseInt($('.year-drop').val());
    // var month = parseInt($('.month-drop').val());
    if(isNaN(month)) { month = '';}if(isNaN(year)) {year = '';}
      $('.list-art-container').html('');
      get_list2(limit,page_number2,year);
  });


  $(document).on('change','.month-drop', function() {
    // var month = parseInt($(this).val());
    var year = parseInt($('.year-drop').val());
      jQuery('.list-art-container').html('');
      get_list2(limit,1,year);
      get_pagination2('1',limit,year);
   
  });

    $(document).on('change','.year-drop', function() {
    var year = parseInt($(this).val());
    // var month = parseInt($('.month-drop').val());

      $('.list-art-container').html('');
      get_list2(limit,1,year);
      get_pagination2('1',limit,year);
     
  });


    function first2(){
      return parseInt($('.page-number2 option:first').val());
    }
    function last2(){
      return parseInt($('.page-number2 option:last').val());
    }

  function get_list2(limit,offset,year){
    $('.delete').hide();
    $('.inactive').hide();
    $('.selectall').attr('checked', false);
    var table = "flunew_articles";
    var order_by = "date_published";



    $.ajax({
        type: 'Post',
        url: base_url+'templates/bioflu/controller.php?query=get_list_articles_filter',
        data:{limit:limit, offset:offset, table:table, order_by:order_by, articles:original,year:year},
      }).done( function(data){
              var obj = JSON.parse(data);
              var htm = '', htm1 ='';
              // alert(data);
          $.each(obj, function(index, row){ 

          var datePieces = row.date_published.split('-');
          var year = datePieces[0];
          var month_no = Number(datePieces[1]);
          var day = datePieces[2];

          var month = new Array();
          month[01] = "Jan";
          month[02] = "Feb";
          month[03] = "Mar";
          month[04] = "Apr";
          month[05] = "May";
          month[06] = "Jun";
          month[07] = "Jul";
          month[08] = "Aug";
          month[09] = "Sep";
          month[10] = "Oct";
          month[11] = "Nov";
          month[12] = "Dec";
          var month = month[month_no];
          var desc = $(row.intro_text).text();
          var alias = row.article_title;
          var alias = alias.replace(/ /g, "-");
              // alias = alias.replace(/,/g, "-");
              //alias = alias.replace(/[&\/\\#+()$~%.'":*?<>{}]/g, "");


      htm+='      <div data-id="'+row.id+'" data-alias="'+alias+'" class="col-md-12 col-xs-12 col-sm-12 pad-0 more-art-container">';
      htm+='        <div class="col-md-3 col-xs-4 col-sm-2 pad-0 more-art-img">';
      htm+='          <img class="art-archives-img"  src="'+row.image+'">';
      htm+='        </div>';
      htm+='        <div class="col-md-9 col-xs-8 col-sm-10 pad-10 more-art-details">';
     // htm+='          <div class="col-md-12 more-art-publish" style="color:#aaa">'+row.article_title+'</div>';
      htm+='          <div class="col-md-12 p2 p_upper">'+row.article_title+'</div>';
      htm+='          <div class="col-md-12">';
      htm+='            <div class="col-md-8  pad-0 p3">'+desc.substr(0,120)+'...</div>';
      htm+='            <div class="col-md-4 publish-date"><div class="col-md-12 ">PUBLISHED</div><div class="col-md-12">'+month+' '+day+' '+year+'</div></div></div>';
      htm+='        </div>';
      htm+='      </div>';
      htm1+= '<div data-offset="'+offset+'"></div>';

            });
          $('.list-art-container').html('');
          $('.list-art-container').html(htm);
          $('.offset-val').html('');
          $('.offset-val').html(htm1);
     }); 
  }
  function get_pagination2(page_num,limit,year,offset){
    var table = "flunew_articles";
    var order_by = "date_published";

    $.ajax({
        type: 'Post',
        url: base_url+'templates/bioflu/controller.php?query=get_count_articles_filter',
        data:{limit:limit, table:table, order_by: order_by, articles:original,year:year},
      }).done( function(data){
          var htm = '';
          var htm1 = '';
          if(data == 0){
            $('.pagination2').hide();
            $('.no-art').css('display','block');
          } else {
            $('.pagination2').show();
            $('.no-art').css('display','none');
          }
          htm += '<span class = "glyphicon glyphicon-triangle-left prev-page2"></span><select class="page-number2"> ';
          for(var x =1; x<=data; x++){
            htm += "<option value='"+offset+"'>"+x+"</option>";
            offset = parseInt(offset)+10;
          }
          htm += '</select><span class = "glyphicon glyphicon-triangle-right next-page2"></span>';
          $('.pagination2').html('');
          $('.pagination2').html(htm);
     }); 
  }


function get_offset(limit,offset,year){


    $.ajax({
        type: 'Post',
        url: base_url+'templates/bioflu/controller.php?query=get_limitation',
        data:{},
      }).done( function(data){
          data = parseInt(data);
          get_list2(limit,data,year);
          get_pagination2('1',limit,year,data);
     }); 

}
$(document).on('click','.more-art-container', function(){
var alias = $(this).attr('data-alias');
window.location = 'article?q='+alias;
});


});
</script>



