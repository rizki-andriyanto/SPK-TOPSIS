<style type="text/css">
  hr{
  border-top: 2px solid black;
}
</style>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Keripik Wisuda <small>Perhitungan</small>
                        </h2>
                    </div>
                </div> 
 <p>
Sebuah UKM makanan ringan ( Camilan ) aneka keripik dengan nama "Keripik Wisuda", berencana akan melebarkan bisnisnya dengan menginvestasikan keuntungan dan sisa tabungan yang dimiliki.
Beberapa alternatif investasi telah diidentifikasi, pemilihan alternatif terbaik ditunjukan selain untuk keperluan investasi juga dalam melebarkan usaha untuk meningkatkan dan kemajuan usaha "Keripik Wisuda".<br>
Ada empat alternatif yang diberikan, yaitu:
<ul>
<li>A1 = Membeli mobil box(pick up) untuk pengambilan barang di supplier</li> 
<li>A2 = Membeli gerobak untuk membantu proses penjualan</li>
<li>A3 = Pembuatan dan penerapan sarana teknologi informasi</li>
<li>A4 = Pengembangan (Inovasi) produk baru</li>
</ul>

Ada 5 kriteria yang dijadikan acuan dalam 
pengambilan keputusan, yaitu: 
<br><br>
<ul>
<li>C1 = Harga, yaitu seberapa besar harga barang tersebut.</li>
<li>C2 = Nilai investasi 5 tahun ke depan, yaitu seberapa besar nilai investasi barang dalam jangka waktu 5 tahun ke depan.</li>
<li>C3 = Daya dukung terhadap produktivitas UKM, yaitu seberapa besar peranan barang dalam mendukung naiknya tingkat produktivitas UKM.
</li><br> 
Daya dukung diberi nilai : <br>
 1 = kurang mendukung
 <br>2 = cukup mendukung 
 <br>3 = sangat mendukung 
 <br><br>
<li>C4 = Prioritas kebutuhan, merupakan tingkat kepentingan (ke-mendesak-an) barang untuk dimiliki UKM. 
<br><br> Prioritas diberi nilai</li>
1 = sangat berprioritas
<br>2 = berprioritas
<br>3 = cukup berprioritas
<br><br>
<li>C5 = Ketersediaan atau kemudahan, merupakan ketersediaan barang di pasaran.</li>
<br>Ketersediaan diberi nilai : 
<br>1 = sulit diperoleh
<br>2 = cukup mudah diperoleh
<br>3 = sangat mudah diperoleh
</ul>
<p>Dari pertama dan keempat kriteria tersebut, kriteria pertama dan keempat merupakan kriteria biaya (cost), sedangkan kriteria kedua, ketiga, dan kelima merupakan kriteria keuntungan.
Pengambil keputusan memberikan bobot untuk setiap kriteria sebagai berikut:
<br><br>
C1 = 25% 
<br>C2 = 15% 
<br>C3 = 30%
<br>C4 = 25
<br>C5 = 5%
</p>

			<h3>Hasil</h3>
            <h4>Nilai setiap alternatif di setiap kriteria</h4>
     
     <div class="table-responsive">
     <table class="table">
        <tr>
            <th class="danger" rowspan="2"><center>Alternantif</center></th>
            <th class="danger" colspan="5"><center/>Kriteria</th>
        </tr>
        <tr class="danger">
            <th><center/>C1</th>
            <th><center/>C2</th>
            <th><center/>C3</th>
            <th><center/>C4</th>
            <th><center/>C5</th>
        </tr>
        <tr>
            <td class="danger" align="center">A1</td>
            <td align="center"> <?php echo $record['a1c1']?> </td>
            <td align="center"> <?php echo $record['a1c2']?> </td>
            <td align="center"> <?php echo $record['a1c3']?> </td>
            <td align="center"> <?php echo $record['a1c4']?> </td>
            <td align="center"> <?php echo $record['a1c5']?> </td>
        </tr>
        <tr>
            <td class="danger" align="center">A2</td>
            <td align="center"> <?php echo $record['a2c1']?> </td>
            <td align="center"> <?php echo $record['a2c2']?> </td>
            <td align="center"> <?php echo $record['a2c3']?> </td>
            <td align="center"> <?php echo $record['a2c4']?> </td>
            <td align="center"> <?php echo $record['a2c5']?> </td>
        </tr>
        <tr>
            <td class="danger" align="center">A3</td>
            <td align="center"> <?php echo $record['a3c1']?> </td>
            <td align="center"> <?php echo $record['a3c2']?> </td>
            <td align="center"> <?php echo $record['a3c3']?> </td>
            <td align="center"> <?php echo $record['a3c4']?> </td>
            <td align="center"> <?php echo $record['a3c5']?> </td>
        </tr>
        <tr>
            <td class="danger" align="center">A4</td>
            <td align="center"> <?php echo $record['a4c1']?> </td>
            <td align="center"> <?php echo $record['a4c2']?> </td>
            <td align="center"> <?php echo $record['a4c3']?> </td>
            <td align="center"> <?php echo $record['a4c4']?> </td>
            <td align="center"> <?php echo $record['a4c5']?> </td>
        </tr>
    </table>
    </div>
    <br/>

    <!-- end table -->
    W1 = <?php echo $record['w1']?><br> 
    W2 = <?php echo $record['w2']?><br> 
    W3 = <?php echo $record['w3']?><br> 
    W4 = <?php echo $record['w4']?><br> 
    W5 = <?php echo $record['w5']?> 

    <br/><br/>
    Tipe Kriteria C1 = <?php echo $record['typec1'] ?> <br/>
    Tipe Kriteria C2 = <?php echo $record['typec2'] ?> <br/>
    Tipe Kriteria C3 = <?php echo $record['typec3'] ?> <br/>
    Tipe Kriteria C4 = <?php echo $record['typec4'] ?> <br/>
    Tipe Kriteria C5 = <?php echo $record['typec5'] ?> <br/>
<?php 
// Matriks Ternormalisasi, R
$a1c1=$record['a1c1'] / $jumlahPangkatC1;
$a1c1=round($a1c1,2);
$a1c2=$record['a1c2'] / $jumlahPangkatC2;
$a1c2=round($a1c2,2);
$a1c3=$record['a1c3'] / $jumlahPangkatC3;
$a1c3=round($a1c3,2);
$a1c4=$record['a1c4'] / $jumlahPangkatC4;
$a1c4=round($a1c4,2);
$a1c5=$record['a1c5'] / $jumlahPangkatC5;
$a1c5=round($a1c5,2);

$a2c1=$record['a2c1'] / $jumlahPangkatC1;
$a2c1=round($a2c1,2);
$a2c2=$record['a2c2'] / $jumlahPangkatC2;
$a2c2=round($a2c2,2);
$a2c3=$record['a2c3'] / $jumlahPangkatC3;
$a2c3=round($a2c3,2);
$a2c4=$record['a2c4'] / $jumlahPangkatC4;
$a2c4=round($a2c4,2);
$a2c5=$record['a2c5'] / $jumlahPangkatC5;
$a2c5=round($a2c5,2);

$a3c1=$record['a3c1'] / $jumlahPangkatC1;
$a3c1=round($a3c1,2);
$a3c2=$record['a3c2'] / $jumlahPangkatC2;
$a3c2=round($a3c2,2);
$a3c3=$record['a3c3'] / $jumlahPangkatC3;
$a3c3=round($a3c3,2);
$a3c4=$record['a3c4'] / $jumlahPangkatC4;
$a3c4=round($a3c4,2);
$a3c5=$record['a3c5'] / $jumlahPangkatC5;
$a3c5=round($a3c5,2);

$a4c1=$record['a4c1'] / $jumlahPangkatC1;
$a4c1=round($a4c1,2);
$a4c2=$record['a4c2'] / $jumlahPangkatC2;
$a4c2=round($a4c2,2);
$a4c3=$record['a4c3'] / $jumlahPangkatC3;
$a4c3=round($a4c3,2);
$a4c4=$record['a4c4'] / $jumlahPangkatC4;
$a4c4=round($a4c4,2);
$a4c5=$record['a4c5'] / $jumlahPangkatC5;
$a4c5=round($a4c5,2);




echo '
    <h4>Matriks Ternormalisasi, R</h4>
   <table class="tableMatrix">
    <tr>
      <td rowspan="4">R = </td>
      <td rowspan="4">&nbsp;<img style="height:100px" src="'.base_url().'/assets/img/kurungbuka.gif"/></td>
      <td style="padding-right:30px">' . $a1c1 . '</td>
      <td style="padding-right:30px">' . $a1c2 . '</td>
      <td style="padding-right:30px">' . $a1c3 . '</td>
      <td style="padding-right:30px">' . $a1c4 . '</td>
      <td>' . $a1c5 . '</td>
      <td rowspan="4"><img style="height:100px" src="'.base_url().'/assets/img/kurungtutup.gif"/></td>
    </tr>
     <tr>
      <td style="padding-right:30px">' . $a2c1 . '</td>
      <td style="padding-right:30px">' . $a2c2 . '</td>
      <td style="padding-right:30px">' . $a2c3 . '</td>
      <td style="padding-right:30px">' . $a2c4 . '</td>
      <td>' . $a2c5 . '</td>
    </tr>
    <tr>
      <td style="padding-right:30px">' . $a3c1 . '</td>
      <td style="padding-right:30px">' . $a3c2 . '</td>
      <td style="padding-right:30px">' . $a3c3 . '</td>
      <td style="padding-right:30px">' . $a3c4 . '</td>
      <td>' . $a3c5 . '</td>
    </tr>
    <tr>
      <td style="padding-right:30px">' . $a4c1 . '</td>
      <td style="padding-right:30px">' . $a4c2 . '</td>
      <td style="padding-right:30px">' . $a4c3 . '</td>
      <td style="padding-right:30px">' . $a4c4 . '</td>
      <td>' . $a4c5 . '</td>
    </tr>
   </table>';?>

   <?php 
// Matriks Ternormalisasi Terbobot, Y
$a1c1=$record['a1c1'] / $jumlahPangkatC1 * $record['w1'];
$a1c1=round($a1c1,2);
$a1c2=$record['a1c2'] / $jumlahPangkatC2 * $record['w2'];
$a1c2=round($a1c2,2);
$a1c3=$record['a1c3'] / $jumlahPangkatC3 * $record['w3'];
$a1c3=round($a1c3,2);
$a1c4=$record['a1c4'] / $jumlahPangkatC4 * $record['w4'];
$a1c4=round($a1c4,2);
$a1c5=$record['a1c5'] / $jumlahPangkatC5 * $record['w5'];
$a1c5=round($a1c5,2);

$a2c1=$record['a2c1'] / $jumlahPangkatC1 * $record['w1'];
$a2c1=round($a2c1,2);
$a2c2=$record['a2c2'] / $jumlahPangkatC2 * $record['w2'];
$a2c2=round($a2c2,2);
$a2c3=$record['a2c3'] / $jumlahPangkatC3 * $record['w3'];
$a2c3=round($a2c3,2);
$a2c4=$record['a2c4'] / $jumlahPangkatC4 * $record['w4'];
$a2c4=round($a2c4,2);
$a2c5=$record['a2c5'] / $jumlahPangkatC5 * $record['w5'];
$a2c5=round($a2c5,2);

$a3c1=$record['a3c1'] / $jumlahPangkatC1 * $record['w1'];
$a3c1=round($a3c1,2);
$a3c2=$record['a3c2'] / $jumlahPangkatC2 * $record['w2'];
$a3c2=round($a3c2,2);
$a3c3=$record['a3c3'] / $jumlahPangkatC3 * $record['w3'];
$a3c3=round($a3c3,2);
$a3c4=$record['a3c4'] / $jumlahPangkatC4 * $record['w4'];
$a3c4=round($a3c4,2);
$a3c5=$record['a3c5'] / $jumlahPangkatC5 * $record['w5'];
$a3c5=round($a3c5,2);

$a4c1=$record['a4c1'] / $jumlahPangkatC1 * $record['w1'];
$a4c1=round($a4c1,2);
$a4c2=$record['a4c2'] / $jumlahPangkatC2 * $record['w2'];
$a4c2=round($a4c2,2);
$a4c3=$record['a4c3'] / $jumlahPangkatC3 * $record['w3'];
$a4c3=round($a4c3,2);
$a4c4=$record['a4c4'] / $jumlahPangkatC4 * $record['w4'];
$a4c4=round($a4c4,2);
$a4c5=$record['a4c5'] / $jumlahPangkatC5 * $record['w5'];
$a4c5=round($a4c5,2);

   echo '
   <h4>Matriks Ternormalisasi Terbobot, Y</h4>
   <table class="tableMatrix">
    <tr>
      <td rowspan="4">Y = </td>
      <td rowspan="4">&nbsp;<img style="height:100px" src="'.base_url().'/assets/img/kurungbuka.gif"/></td>
      <td style="padding-right:30px">' . $a1c1 . '</td>
      <td style="padding-right:30px">' . $a1c2 . '</td>
      <td style="padding-right:30px">' . $a1c3 . '</td>
      <td style="padding-right:30px">' . $a1c4 . '</td>
      <td>' . $a1c5 . '</td>
      <td rowspan="4"><img style="height:100px" src="'.base_url().'/assets/img/kurungtutup.gif"/></td>
    </tr>
     <tr>
      <td style="padding-right:30px">' . $a2c1 . '</td>
      <td style="padding-right:30px">' . $a2c2 . '</td>
      <td style="padding-right:30px">' . $a2c3 . '</td>
      <td style="padding-right:30px">' . $a2c4 . '</td>
      <td>' . $a2c5 . '</td>
    </tr>
    <tr>
      <td style="padding-right:30px">' . $a3c1 . '</td>
      <td style="padding-right:30px">' . $a3c2 . '</td>
      <td style="padding-right:30px">' . $a3c3 . '</td>
      <td style="padding-right:30px">' . $a3c4 . '</td>
      <td>' . $a3c5 . '</td>
    </tr>
    <tr>
      <td style="padding-right:30px">' . $a4c1 . '</td>
      <td style="padding-right:30px">' . $a4c2 . '</td>
      <td style="padding-right:30px">' . $a4c3 . '</td>
      <td style="padding-right:30px">' . $a4c4 . '</td>
      <td>' . $a4c5 . '</td>
    </tr>
   </table>
   <h4>Solusi Ideal Positif (A<sup>+</sup>):</h4>
   y<sub>1</sub><sup>+</sup> = '.$statusy1.' { ' . round($y1a,2) . '<b> ; </b>' . round($y1b,2) . '<b> ; </b>' . round($y1c,2) . '<b> ; </b>' . round($y1d,2) . ' } = <b>' . round($y1,2). '</b><br/>
   y<sub>2</sub><sup>+</sup> = '.$statusy2.' { ' . round($y2a,2) . '<b> ; </b>' . round($y2b,2) . '<b> ; </b>' . round($y2c,2) . '<b> ; </b>' . round($y2d,2) . ' } = <b>' . round($y2,2). '</b><br/>
   y<sub>3</sub><sup>+</sup> = '.$statusy3.' { ' . round($y3a,2) . '<b> ; </b>' . round($y3b,2) . '<b> ; </b>' . round($y3c,2) . '<b> ; </b>' . round($y3d,2) . ' } = <b>' . round($y3,2). '</b><br/>
   y<sub>4</sub><sup>+</sup> = '.$statusy4.' { ' . round($y4a,2) . '<b> ; </b>' . round($y4b,2) . '<b> ; </b>' . round($y4c,2) . '<b> ; </b>' . round($y4d,2) . ' } = <b>' . round($y4,2). '</b><br/>
   y<sub>5</sub><sup>+</sup> = '.$statusy5.' { ' . round($y5a,2) . '<b> ; </b>' . round($y5b,2) . '<b> ; </b>' . round($y5c,2) . '<b> ; </b>' . round($y5d,2) . ' } = <b>' . round($y5,2). '</b><br/><br/>
   A<sup>+</sup> = { ' . round($y1,2). '<b> ; </b>' . round($y2,2). '<b> ; </b>' . round($y3,2). '<b> ; </b>' . round($y4,2). '<b> ; </b>' . round($y5,2). ' }<br/>
   <h4>Solusi Ideal Negatif (A<sup>-</sup>):</h4>
   y<sub>1</sub><sup>-</sup> = '.$status2y1.' { ' . round($y1a,2) . '<b> ; </b>' . round($y1b,2) . '<b> ; </b>' . round($y1c,2) . '<b> ; </b>' . round($y1d,2) . ' } = <b>' . round($y1m,2) . '</b><br/>
   y<sub>2</sub><sup>-</sup> = '.$status2y2.' { ' . round($y2a,2) . '<b> ; </b>' . round($y2b,2) . '<b> ; </b>' . round($y2c,2) . '<b> ; </b>' . round($y2d,2) . ' } = <b>' . round($y2m,2) . '</b><br/>
   y<sub>3</sub><sup>-</sup> = '.$status2y3.' { ' . round($y3a,2) . '<b> ; </b>' . round($y3b,2) . '<b> ; </b>' . round($y3c,2) . '<b> ; </b>' . round($y3d,2) . ' } = <b>' . round($y3m,2) . '</b><br/>
   y<sub>4</sub><sup>-</sup> = '.$status2y4.' { ' . round($y4a,2) . '<b> ; </b>' . round($y4b,2) . '<b> ; </b>' . round($y4c,2) . '<b> ; </b>' . round($y4d,2) . ' } = <b>' . round($y4m,2) . '</b><br/>
   y<sub>5</sub><sup>-</sup> = '.$status2y5.' { ' . round($y5a,2) . '<b> ; </b>' . round($y5b,2) . '<b> ; </b>' . round($y5c,2) . '<b> ; </b>' . round($y5d,2) . ' } = <b>' . round($y5m,2) . '</b><br/><br/>
   A<sup>-</sup> = { ' . round($y1m,2) . '<b> ; </b>' . round($y2m,2) . '<b> ; </b>' . round($y3m,2) . '<b> ; </b>' . round($y4m,2) . '<b> ; </b>' . round($y5m,2) . ' }<br/>
          
   <h4>Jarak antara nilai Terbobot setiap alternatif terhadap solusi ideal positif, S<sub>i<sup>+</sup></sub></h4>
   D<sub>1<sup>+</sup></sub> = ' . round($d1,2) . '<br/>
   D<sub>2<sup>+</sup></sub> = ' . round($d2,2) . '<br/>
   D<sub>3<sup>+</sup></sub> = ' . round($d3,2) . '<br/>
   D<sub>4<sup>+</sup></sub> = ' . round($d4,2) . '<br/>
   
   <h4>Jarak antara nilai Terbobot setiap alternatif terhadap solusi ideal negatif, S<sub>i<sup>-</sup></sub></h4>
   D<sub>1<sup>-</sup></sub> = ' . round($d1m,2) . '<br/>
   D<sub>2<sup>-</sup></sub> = ' . round($d2m,2) . '<br/>
   D<sub>3<sup>-</sup></sub> = ' . round($d3m,2) . '<br/>
   D<sub>4<sup>-</sup></sub> = ' . round($d4m,2) . '<br/>
   '?>
   <?php 
   // v1,v2,v3,v4
    $v1 = $d1m / ($d1 + $d1m);
    $v1 = round($v1,2);
    $v2 = $d2m / ($d2 + $d2m);
    $v2 = round($v2,2);
    $v3 = $d3m / ($d3 + $d3m);
    $v3 = round($v3,2);
    $v4 = $d4m / ($d4 + $d4m);
    $v4 = round($v4,2);


   echo '
   <h4>Kedekatan setiap alternatif terhadap solusi ideal dihitung sebagai berikut :</h4>

   <table>
    <tr>
      <td rowspan="4">V<sub>1</sub></td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center">' . round($d1m,2) . '</td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center" rowspan="4"><b/>' . $v1 . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr /></td>
    </tr>
    <tr>
      <td align="center">' . round($d1,2) . ' + ' . round($d1m,2) . '</td>
    </tr>
   </table>
   <br/><br/>
   <table>
    <tr>
      <td rowspan="4">V<sub>2</sub></td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center">' . round($d2m,2) . '</td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center" rowspan="4"><b/>' . $v2 . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr/></td>
    </tr>
    <tr>
      <td align="center">' . round($d2,2) . ' + ' . round($d2m,2) . '</td>
    </tr>
   </table>
   <br/><br/>
   <table>
    <tr>
      <td rowspan="4">V<sub>3</sub></td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center">' . round($d3m,2) . '</td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center" rowspan="4"><b/>' . $v3 . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr/></td>
    </tr>
    <tr>
      <td align="center">' . round($d3,2) . ' + ' . round($d3m,2) . '</td>
    </tr>
   </table>
   <br/>
   <table>
    <tr>
      <td rowspan="4">V<sub>4</sub></td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center">' . round($d4m,2) . '</td>
      <td rowspan="4">&nbsp;=&nbsp;</td>
      <td align="center" rowspan="4"><b/>' . $v4 . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr/></td>
    </tr>
    <tr>

      <td align="center">' . $v4 = round($d4,2) . ' + ' . round($d4m,2) . '</td>
    </tr>
   </table>
   <br/>
   
   <h3 style="color:green">Alternatif yang dipilih adalah Alternatif yang <i><b>' . $alternatif . '</b></i> karena memiliki nilai Terbesar yaitu <b>' . round($hasil,2) . '</h3>
   ' ?>
