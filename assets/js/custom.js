$(document).ready(function(){
   $("#btn_support").click(function(){
     $("#donate input").trigger("click");  
   });
    
   function update_visitors(){
       $.ajax({
           cache:false,
           type:"POST",
           data:{update_visitor:1},
           url:"assets/php/admin.php",
           success:function(val){
               console.log(val);
           }
       });
   }
    
   function show_visitors(){
       $.ajax({
           cache:false,
           type:"POST",
           data:{show_visitor:1},
           url:"assets/php/admin.php",
           success:function(val){
               $("#show_visitors").text(val.trim());
               console.log(val);
               
           }
       });
   }
   
   function show_downloads(){
       $.ajax({
           cache:false,
           type:"POST",
           data:{show_download:1},
           url:"assets/php/admin.php",
           success:function(val){
               $("#show_downloads").text(val.trim());
               console.log(val);
               
           }
       });
   }
    
   function show_gallery(){
       $.ajax({
           cache:false,
           type:"POST",
           data:{show_gallery:1},
           url:"assets/php/admin.php",
           success:function(val){
               $("#show_gallery").text(val.trim());
               console.log(val);
               
           }
       });
   }
    
   function show_developers(){
       $.ajax({
           cache:false,
           type:"POST",
           data:{show_developers:1},
           url:"assets/php/admin.php",
           success:function(val){
               $("#show_developers").text(val.trim());
               console.log(val);
               
           }
       });
   }
    
    
   show_gallery();
   show_developers();
   show_visitors();
   show_downloads();
   update_visitors();
});