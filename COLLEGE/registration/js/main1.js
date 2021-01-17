$(document).ready(function(){
  $("body").delegate("#add","click",function(){
           $("#service").show();
           $("#booking").hide();
            var sid=$(this).attr('sid');
            var uid=$(this).attr('uid');
           
   $.ajax({
         url : "../action.php",
         method :"POST",
         data:{add:1,sid:sid,uid:uid},
         success : function(data){
         
         }
      })

    })
  $("body").delegate(".addservice","click",function(){
           $("#booking").show();
           $("#service").hide();
           var pname=$('.pname').val();
           var pprice=$('.pprice').val();
           var scharge=$('.scharge').val();
      $.ajax({
         url : "../action.php",
         method :"POST",
         data:{addservice1:1,pname:pname,pprice:pprice,scharge:scharge},
         success : function(data){
          alert(data)
         }
      })      
    })
   $("body").delegate(".bill","click",function(){
           $("#booking").hide();
           $("#service").hide();
           $("#bill").show();
            var sid=$(this).attr('sid');
            var uid=$(this).attr('uid');
      $.ajax({
         url : "../action.php",
         method :"POST",
         data:{bill:1,sid:sid,uid:uid},
         success : function(data){
         
         }
      })      
    })
    $("body").delegate(".back","click",function(){
      $.ajax({
         url : "../action.php",
         method :"POST",
         data:{back:1},
         success : function(data){
         
         }
      })      
    })
    $("body").delegate("#cancle","click",function(){
            var sid=$(this).attr('sid');
            var uid=$(this).attr('uid');
   $.ajax({
         url : "../action.php",
         method :"POST",
         data:{cancle:1,sid:sid,uid:uid},
         success : function(data){
          alert(data)
         }
      })

    })
     $("body").delegate(".pay","click",function(){
            var sid=$(this).attr('sid');
   $.ajax({
         url : "../action.php",
         method :"POST",
         data:{pay:1,sid:sid},
         success : function(data){
          alert(data)
         }
      })

    })
});