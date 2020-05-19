    <style type="text/css">
        tr {
            border-top: 1px solid;border-bottom: 1px solid;width: 100%;
        }
    </style>

    <div class="container-fluid" style="text-align:center;width:85%">
        <h3 class="text-center text-dark">Hasil Survey</h3>
        <hr class="garisJudul">
    </div>
    <br>
    <div class="container-fluid" style="text-align:left;width:70%">
        <a href="<?php echo base_url('frontend/survey') ?>" class="btn btn-success">Survey</a>
        <a href="<?php echo base_url('frontend/survey/hasil') ?>" class="btn btn-danger">Hasil Survey</a>
        <a href="#" class="btn btn-default">Jumlah Survey : <?php echo $jumlah; ?></a>
         <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <br>
                    <?php $nomor=0;$x=0; foreach($soal as $key){ ?>
                        <div class="card">
                            <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#a<?php echo $x; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $key['pertanyaan'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="a<?php echo $x; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                <table>
                                    <tbody>
                                        <center>
                                        <div id="piechart<?php echo $nomor; ?>"></div>
                                        </center>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    <br> 
                    <?php $nomor++;$x++; } ?>   
                </div>
            </div>
            <div class="col">
                <div class="accordion" id="accordionExample2">
                    <br>
                    <?php $y=0; foreach($soal2 as $key){ ?>
                        <div class="card">
                            <div class="card-header" style="background-color:#108f32;color:white;" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn text-left" style="color:white;width:100%;" type="button" data-toggle="collapse" data-target="#b<?php echo $y; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $key['pertanyaan'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="b<?php echo $y; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                                <div class="card-body">
                                <table>
                                    <tbody>
                                        <center>
                                        <div id="piechart<?php echo $nomor; ?>"></div>
                                        </center>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    <br> 
                    <?php $nomor++;$y++; } ?>   
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script type="text/javascript" src="<?php echo base_url('asset/control/chart.js');?>"></script>
    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values

    function drawChart() {
    <?php $no=0; foreach($semua as $key){
    $kriteria=$this->db->query('SELECT nilai, count(soal_nilai) as jumlah from tb_nilai where soal_nilai="'.$key['id'].'" group by nilai')->result_array();
    $nilai5=0;$nilai4=0;$nilai3=0;$nilai2=0;$nilai1=0;
    foreach($kriteria as $dt){
        if($dt['nilai']==1){
            $nilai1=$dt['jumlah'];
        }elseif($dt['nilai']==2){
            $nilai2=$dt['jumlah'];
        }elseif($dt['nilai']==3){
            $nilai3=$dt['jumlah'];
        }elseif($dt['nilai']==4){
            $nilai4=$dt['jumlah'];
        }elseif($dt['nilai']==5){
            $nilai5=$dt['jumlah'];
        }
    }
     ?>
      var data= google.visualization.arrayToDataTable([
      ['Kriteria','Survey'],
      ['Sangat Puas', <?php echo $nilai4; ?>],
      ['Puas', <?php echo $nilai3; ?>],
      ['Biasa', <?php echo $nilai2; ?>],
      ['Kurang Puas', <?php echo $nilai1; ?>],
    ]);
      // Optional; add a title and set the width and height of the chart
      var options = {'title':'Survey', 'width':'30%', 'height':400};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart<?php echo $no; ?>'));
      chart.draw(data, options);
      <?php $no++; } ?>
    }

    </script>

