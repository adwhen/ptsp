<div class="container" style="width:95%;">
    <h3 class="text-center text-dark">STRUKTURAL</h3>
    <hr class="garisJudul">
    <br>
</div>
<div class="container" style="width:95%;float:center;">
    <table width="100%" style="border-collapse: collapse; table-layout: fixed;">
    <tr> 
        <td colspan="8">
            <table class="table table-bordered" style="border-radius: 5px;width: 30%;margin: 0px auto;float: none">
                <tbody>
                    <tr>
                        
                        <td style="width:50%">
                        <?php if(!empty($kajati)){?>
                            <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $kajati[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($kajati[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $kajati[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr  style="height:100px;">
        <td colspan="4" style="border-right:10px solid green;"><center></center></td>
        <td colspan="4" style="border-left: 10px solid green;"><center></center></td>
    </tr>
    <tr>
        <td colspan="8">
            <table class="table table-bordered" style="border-radius: 5px;width: 30%;margin: 0px auto;float: none">
                <tbody>
                    <tr>
                        <td style="width:50%">
                        <?php if(!empty($wakajati)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $wakajati[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($wakajati[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $wakajati[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
                
        </td>
    </tr>
    <tr style="height:100px;">
        <td  colspan="2" style=""><center></center></td>
        <td  colspan="2" style="border-right: 10px solid green;border-bottom: 10px dashed green;  "><center></center></td>
        <td  colspan="2" style="border-left:10px solid green;"><center></center></td>
        <td  colspan="2" style=""><center></center></td>
    </tr>

    <tr style="height:50px;">
        <td  style=""><center></center></td>
        <td  style="border-bottom: 10px dashed green;"><center></center></td>
        <td  style="border-left:10px dashed green;border-bottom: 10px dashed green; "><center></center></td>
        <td  style=""><center></center></td>
        <td  style="border-left:10px solid green;border-bottom: 10px solid green;"><center></center></td>
        <td  style="border-bottom: 10px solid green;"><center></center></td>
        <td  style=""><center></center></td>
        <td  style=""><center></center></td>
    </tr>
    <tr style="">
        <td  style=""><center></center></td>
        <td  style=""><center></center></td>
        <td  style=""><center></center></td>
        <td  style="border-right: 10px solid green;"><center></center></td>
        <td  style=""><center></center></td>
        <td  style=""><center></center></td>
        <td  style=""><center></center></td>
        <td  style=""><center></center></td>
    </tr>
    <tr style="height:300px;vertical-align: top;">
        <td colspan="4"  style=""><center>
            <div class="card cardJaksa text-center" style="width: 100%;margin: 0px auto;float: none;height:100%;">
                        Koordinator<br>
                        <div class="row">
                            <?php foreach ($koor as $koor) { ?>
                            <div class="col-sm col-lg-4" style="">
                                <div id="beritaFoto" style="background-image:url(<?php echo $koor['url_file']?>);height: 180px;"></div>
                                <?php echo $koor['nama_struktural'];?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
        </center></td>
        <td  style="border-left: 10px green solid;"><center></center></td>
        <td colspan="2"  style="content">
            <?php if(!empty($tu)){?>
                    <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                        <div id="beritaFoto" style="background-image:url(<?php echo $tu[0]['url_file']?>);height: 180px;"></div>
                    </div>
                    <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($tu[0]['jabatan_struktural'])?></h4>
                    <h5 class="card-text text-center" style="font-size:13px;"><?php echo $tu[0]['nama_struktural']?></h5>
                <?php } ?>
        </td>    
        <td  style=""><center></center></td>
    </tr>
    <tr style="height:300px;">
        <td colspan="8" style="border-top: 10px solid green" >
            <table>
                 <tbody>
                    <tr>
                        <td style="width:16.7%;">
                        <?php if(!empty($pembinaan)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $pembinaan[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pembinaan[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $pembinaan[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                        <td style="width:16.7%">
                        <?php if(!empty($intel)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $intel[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($intel[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $intel[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                        <td style="width:16.7%">
                        <?php if(!empty($pidum)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $pidum[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pidum[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $pidum[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                        <td style="width:16.7%">
                        <?php if(!empty($pidsus)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $pidsus[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pidsus[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $pidsus[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                        <td style="width:16.7%">
                        <?php if(!empty($ptun)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $ptun[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($ptun[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $ptun[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                        <td style="width:16.7%">
                        <?php if(!empty($pengawas)){?>
                           <div class="card cardJaksa" style="width: 8rem;margin: 0px auto;float: noneborder-radius: 5px;">
                                <div id="beritaFoto" style="background-image:url(<?php echo $pengawas[0]['url_file']?>);height: 180px;"></div>
                            </div>
                            <h4 class="card-text text-center" style="margin-top:10px;font-size:16px;"><?php echo ucwords($pengawas[0]['jabatan_struktural'])?></h4>
                            <h5 class="card-text text-center" style="font-size:13px;"><?php echo $pengawas[0]['nama_struktural']?></h5>
                        <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
</div>
<br>
<br>
<br>