$(document).ready(function(){
  //galeri
          var input = $('#button_tambah');
          var form = $('#tambahData');
          $(input).click(function(){
          		$(form).submit();         
              
            });
            $("#file2").change(function(){

		          var file = this.files[0];
		          var imagefile = file.type;
		          var match= ["image/jpeg","image/png","image/jpg"];
		          if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
		          {
		            //wrong image format
		            alert('Format gambar salah.');
		            $("#file2").val("");
		          }else{
		            alert('bisa di upload');
		          }           
              
            });
            $("#file").change(function(){

		          var file = this.files[0];
		          var imagefile = file.type;
		          var match= ["image/jpeg","image/png","image/jpg"];
		          if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
		          {
		            //wrong image format
		            alert('Format gambar salah.');
		            $("#file").val("");
		          }else{
		            alert('bisa di upload');
		          }           
              
            });
            // event listener untuk form saat di submit
       $(form).submit(function(event) {
                // mencegah browser mensubmit form.
          event.preventDefault();
          // tampilkan pesan sedang upload
          $('.loading').html('Uploading..');
          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,             
            processData:false,
            success : function(data){

              //div preview kita kosongkan lagi
              var hasil=JSON.parse(data);
              $(form).trigger('reset');
              $("#showdata").html('');
              $("#showdata").html(hasil.baris);
              //mulai memproses respon dari upload.php
              if(data.error){
                  $('.loading').html(data.error)
              }else{
                  $('.loading').html(hasil.message)
              }     
            },error : function(data){
              alert('Something wrong..');
            } 
          });

        });

       $('#button_edit').click(function(){
          		$("#ubahData").submit();                    
       });
       $("#ubahData").submit(function(event) {
                // mencegah browser mensubmit form.
          event.preventDefault();
          // tampilkan pesan sedang upload
          $('.loading').html('Uploading..');
          $.ajax({
            type: 'POST',
            url: $("#ubahData").attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,             
            processData:false,
            success : function(data){

              //div preview kita kosongkan lagi
              var hasil=JSON.parse(data);
              $("#ubahData").trigger('reset');
              galeri=hasil.galeri;
              $("#showdata").html("");

           
              $("#showdata").html(hasil.baris);
              

              //mulai memproses respon dari upload.php
              if(data.error){
                  $('.loading').html(hasil.error)
              }else{
                  $('.loading').html(hasil.message)
              }     
            },error : function(error){
              alert("Something wrong..");
            } 
          });

        });
        $('#button_hapus').click(function(){
          		$("#hapusData").submit();                    
       });
       $("#hapusData").submit(function(event) {
                // mencegah browser mensubmit form.
          event.preventDefault();
          // tampilkan pesan sedang upload
          $('.loading').html('Uploading..');
          $.ajax({
            type: 'POST',
            url: $("#hapusData").attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,             
            processData:false,
            success : function(data){

              //div preview kita kosongkan lagi
              var hasil=JSON.parse(data);
              $("#hapusData").trigger('reset');
              galeri=hasil.galeri;

              $("#showdata").html("");

             
              $("#showdata").html(hasil.baris);
              

              //mulai memproses respon dari upload.php
              if(data.error){
                  $('.loading').html(hasil.error)
              }else{
                  $('.loading').html(hasil.message)
              }     
            },error : function(error){
              alert("Something wrong..");
            } 
          });

        });


       


});
function btn_p(){
  alert(1);
}
