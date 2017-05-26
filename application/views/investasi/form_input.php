                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Keripik Wisuda <small>Input Data Investasi</small>
                        </h2>
                    </div>
                </div> 
<p>
Sebuah UKM makanan ringan ( Camilan ) aneka keripik dengan nama "Keripik Wisuda", berencana akan melebarkan bisnisnya dengan menginvestasikan keuntungan dan sisa tabungan yang dimiliki.
Beberapa alternatif investasi telah diidentifikasi, pemilihan alternatif terbaik ditunjukan selain untuk keperluan investasi juga dalam melebarkan usaha untuk meningkatkan dan kemajuan usaha "Keripik Wisuda".<br>
Ada empat alternatif yang diberikan, yaitu:
<ul>
<li>A1 = Membeli mobil box/pick up untuk pengambilan barang di supplier</li> 
<li>A2 = Membeli gerobak untuk membantu proses penjualan</li>
<li>A3 = Pembuatan dan penerapan sarana teknologi informasi</li>
<li>A4 = Pengembangan/Inovasi produk baru</li>
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
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('investasi/post'); ?>
                                 <div class="panel-body">
                                    <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover">

                                                    <tr>
                                                        <th rowspan="2"><center/>Alternantif</th>
                                                        <th colspan="5"><center/>Kriteria</th>
                                                    </tr>
                                                    <tr>
                                                        <th><center/>C1 (Bobot Harga/Biaya)</th>
                                                        <th><center/>C2 (Bobot Nilai Investasi)</th>
                                                        <th><center/>C3 (Bobot Daya Dukung Produktivitas)</th>
                                                        <th><center/>C4 (Bobot Bobot Prioritas)</th>
                                                        <th><center/>C5 (Bobot Ketersediaan)</th>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">A1 (Membeli mobil box/pick up untuk pengambilan barang di supplier)</td>
                                                        <td><select name="a1c1" class="form-control" required>
                                                        <option value="">Pilih Harga</option>
                                                        <option value="1">Rp 1.000.000,00</option>
                                                        <option value="2">Rp 2.000.000,00</option>
                                                        <option value="3">Rp 3.000.000,00</option>
                                                        <option value="4">Rp 4.000.000,00</option>
                                                        <option value="5">Rp 5.000.000,00</option>
                                                        <option value="6"> Lebih Dari Rp 5.000.000,00</option>
                                                        
                                                        </select>
                                                        </td>
                                                        <td><select name="a1c2" class="form-control" required>
                                                        <option value="">Pilih Nilai Investasi</option>
                                                        <option value="10">10 %</option>
                                                        <option value="20">20 %</option>
                                                        <option value="30">30 %</option>
                                                        <option value="40">40 %</option>
                                                        <option value="50">50 %</option>
                                                        <option value="60">60 %</option>
                                                        <option value="70">70 %</option>
                                                        <option value="80">80 %</option>
                                                        <option value="90">90 %</option>
                                                        <option value="100">100 %</option>
                                                        <option value="110">110 %</option>
                                                        <option value="120">120 %</option>
                                                        <option value="130">130 %</option>
                                                        <option value="140">140 %</option>
                                                        <option value="150">150 %</option>
                                                        <option value="160">160 %</option>
                                                        <option value="170">170 %</option>
                                                        <option value="180">180 %</option>
                                                        <option value="190">190 %</option>
                                                        <option value="200">200 %</option>
                                                        
                                                        </select>
                                                        </td>
                                                        <td><select name="a1c3" class="form-control" required>
                                                        <option value="">Pilih Daya Dukung Produktivitas</option>
                                                        <option value="1">Kurang Mendukung</option>
                                                        <option value="2">Cukup Mendukung</option>
                                                        <option value="3">Sangat Mendukung</option>
                                                        </select>
                                                        </td>
                                                       <td><select name="a1c4" class="form-control" required>
                                                        <option value="">Pilih Prioritas Kebutuhan</option>
                                                        <option value="1">Sangat Berprioritas</option>
                                                        <option value="2">Berprioritas</option>
                                                        <option value="3">Cukup Berprioritas</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a1c5" class="form-control" required>
                                                        <option value="">Pilih Ketersediaan Barang</option>
                                                        <option value="1">Sulit Diperoleh</option>
                                                        <option value="2">Cukup Mudah Diperoleh</option>
                                                        <option value="3">Sangat Mudah Diperoleh</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">A2 (Membeli gerobak untuk membantu proses penjualan)</td>
                                                        <td><select name="a2c1" class="form-control" required>
                                                        <option value="">Pilih Harga</option>
                                                        <option value="1">Rp 1.000.000,00</option>
                                                        <option value="2">Rp 2.000.000,00</option>
                                                        <option value="3">Rp 3.000.000,00</option>
                                                        <option value="4">Rp 4.000.000,00</option>
                                                        <option value="5">Rp 5.000.000,00</option>
                                                        <option value="6"> Lebih Dari Rp 5.000.000,00</option>
                                                        
                                                        </select>
                                                        </td>
                                                        <td><select name="a2c2" class="form-control" required>
                                                        <option value="">Pilih Nilai Investasi</option>
                                                        <option value="10">10 %</option>
                                                        <option value="20">20 %</option>
                                                        <option value="30">30 %</option>
                                                        <option value="40">40 %</option>
                                                        <option value="50">50 %</option>
                                                        <option value="60">60 %</option>
                                                        <option value="70">70 %</option>
                                                        <option value="80">80 %</option>
                                                        <option value="90">90 %</option>
                                                        <option value="100">100 %</option>
                                                        <option value="110">110 %</option>
                                                        <option value="120">120 %</option>
                                                        <option value="130">130 %</option>
                                                        <option value="140">140 %</option>
                                                        <option value="150">150 %</option>
                                                        <option value="160">160 %</option>
                                                        <option value="170">170 %</option>
                                                        <option value="180">180 %</option>
                                                        <option value="190">190 %</option>
                                                        <option value="200">200 %</option>
                                                        
                                                        </select>
                                                        </td>
                                                        <td><select name="a2c3" class="form-control" required>
                                                        <option value="">Pilih Daya Dukung Produktivitas</option>
                                                        <option value="1">Kurang Mendukung</option>
                                                        <option value="2">Cukup Mendukung</option>
                                                        <option value="3">Sangat Mendukung</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a2c4" class="form-control" required>
                                                        <option value="">Pilih Prioritas Kebutuhan</option>
                                                        <option value="1">Sangat Berprioritas</option>
                                                        <option value="2">Berprioritas</option>
                                                        <option value="3">Cukup Berprioritas</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a2c5" class="form-control" required>
                                                        <option value="">Pilih Ketersediaan Barang</option>
                                                        <option value="1">Sulit Diperoleh</option>
                                                        <option value="2">Cukup Mudah Diperoleh</option>
                                                        <option value="3">Sangat Mudah Diperoleh</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">A3 (Pembuatan dan penerapan sarana teknologi informasi)</td>
                                                        <td><select name="a3c1" class="form-control" required>
                                                        <option value="">Pilih Harga</option>
                                                        <option value="1">Rp 1.000.000,00</option>
                                                        <option value="2">Rp 2.000.000,00</option>
                                                        <option value="3">Rp 3.000.000,00</option>
                                                        <option value="4">Rp 4.000.000,00</option>
                                                        <option value="5">Rp 5.000.000,00</option>
                                                        <option value="6"> Lebih Dari Rp 5.000.000,00</option>
                                                        
                                                        </select>
                                                        </td>
                                                         <td><select name="a3c2" class="form-control" required>
                                                        <option value="">Pilih Nilai Investasi</option>
                                                        <option value="10">10 %</option>
                                                        <option value="20">20 %</option>
                                                        <option value="30">30 %</option>
                                                        <option value="40">40 %</option>
                                                        <option value="50">50 %</option>
                                                        <option value="60">60 %</option>
                                                        <option value="70">70 %</option>
                                                        <option value="80">80 %</option>
                                                        <option value="90">90 %</option>
                                                        <option value="100">100 %</option>
                                                        <option value="110">110 %</option>
                                                        <option value="120">120 %</option>
                                                        <option value="130">130 %</option>
                                                        <option value="140">140 %</option>
                                                        <option value="150">150 %</option>
                                                        <option value="160">160 %</option>
                                                        <option value="170">170 %</option>
                                                        <option value="180">180 %</option>
                                                        <option value="190">190 %</option>
                                                        <option value="200">200 %</option>
                                                        
                                                        </select>
                                                        </td>
                                                        <td><select name="a3c3" class="form-control" required>
                                                        <option value="">Pilih Daya Dukung Produktivitas</option>
                                                        <option value="1">Kurang Mendukung</option>
                                                        <option value="2">Cukup Mendukung</option>
                                                        <option value="3">Sangat Mendukung</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a3c4" class="form-control" required>
                                                        <option value="">Pilih Prioritas Kebutuhan</option>
                                                        <option value="1">Sangat Berprioritas</option>
                                                        <option value="2">Berprioritas</option>
                                                        <option value="3">Cukup Berprioritas</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a3c5" class="form-control" required>
                                                        <option value="">Pilih Ketersediaan Barang</option>
                                                        <option value="1">Sulit Diperoleh</option>
                                                        <option value="2">Cukup Mudah Diperoleh</option>
                                                        <option value="3">Sangat Mudah Diperoleh</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">A4 (Pengembangan/Inovasi produk baru)</td>
                                                        <td><select name="a4c1" class="form-control" required>
                                                        <option value="">Pilih Harga</option>
                                                        <option value="1">Rp 1.000.000,00</option>
                                                        <option value="2">Rp 2.000.000,00</option>
                                                        <option value="3">Rp 3.000.000,00</option>
                                                        <option value="4">Rp 4.000.000,00</option>
                                                        <option value="5">Rp 5.000.000,00</option>
                                                        <option value="6"> Lebih Dari Rp 5.000.000,00</option>
                                                        
                                                        </select>
                                                        </td>
                                                         <td><select name="a4c2" class="form-control" required>
                                                        <option value="">Pilih Nilai Investasi</option>
                                                        <option value="10">10 %</option>
                                                        <option value="20">20 %</option>
                                                        <option value="30">30 %</option>
                                                        <option value="40">40 %</option>
                                                        <option value="50">50 %</option>
                                                        <option value="60">60 %</option>
                                                        <option value="70">70 %</option>
                                                        <option value="80">80 %</option>
                                                        <option value="90">90 %</option>
                                                        <option value="100">100 %</option>
                                                        <option value="110">110 %</option>
                                                        <option value="120">120 %</option>
                                                        <option value="130">130 %</option>
                                                        <option value="140">140 %</option>
                                                        <option value="150">150 %</option>
                                                        <option value="160">160 %</option>
                                                        <option value="170">170 %</option>
                                                        <option value="180">180 %</option>
                                                        <option value="190">190 %</option>
                                                        <option value="200">200 %</option>
                                                        
                                                        </select>
                                                        </td>
                                                        <td><select name="a4c3" class="form-control" required>
                                                        <option value="">Pilih Daya Dukung Produktivitas</option>
                                                        <option value="1">Kurang Mendukung</option>
                                                        <option value="2">Cukup Mendukung</option>
                                                        <option value="3">Sangat Mendukung</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a4c4" class="form-control" required>
                                                        <option value="">Pilih Prioritas Kebutuhan</option>
                                                        <option value="1">Sangat Berprioritas</option>
                                                        <option value="2">Berprioritas</option>
                                                        <option value="3">Cukup Berprioritas</option>
                                                        </select>
                                                        </td>
                                                        <td><select name="a4c5" class="form-control" required>
                                                        <option value="">Pilih Ketersediaan Barang</option>
                                                        <option value="1">Sulit Diperoleh</option>
                                                        <option value="2">Cukup Mudah Diperoleh</option>
                                                        <option value="3">Sangat Mudah Diperoleh</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <div class="radio">
                                                        <td align="center">Type</td>
                                                        <td>
                                                            <input type="radio" name="typec1" value="benefit"/> Benefit<br/>
                                                            <input type="radio" name="typec1" value="cost"/> Cost
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="typec2" value="benefit"/> Benefit<br/>
                                                            <input type="radio" name="typec2" value="cost"/> Cost
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="typec3" value="benefit"/> Benefit<br/>
                                                            <input type="radio" name="typec3" value="cost"/> Cost
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="typec4" value="benefit"/> Benefit<br/>
                                                            <input type="radio" name="typec4" value="cost"/> Cost
                                                        </td>
                                                        <td>
                                                            <input type="radio" name="typec5" value="benefit"/> Benefit<br/>
                                                            <input type="radio" name="typec5" value="cost"/> Cost
                                                        </td>
                                                        </div>
                                                    </tr>
                                                    </table><br/>
                                                    </div>
    <div class="form-group">
      <label class="col-sm-12">Bobot</label>
      <div class="col-sm-2"> <td><select name="w1" class="form-control" required>
                                        <option value="">Pilih Nilai Bobot</option>
                                        <option value="0.05">5 %</option>
                                        <option value="0.10">10 %</option>
                                        <option value="0.15">15 %</option>
                                        <option value="0.20">20 %</option>
                                        <option value="0.25">25 %</option>
                                        <option value="0.30">30 %</option>
                                        <option value="0.35">35 %</option>
                                        <option value="0.40">40 %</option>
                                        <option value="0.45">45 %</option>
                                        <option value="0.50">50 %</option>
                                        <option value="0.55">55 %</option>
                                        <option value="0.60">60 %</option>
                                        <option value="0.65">65 %</option>
                                        <option value="0.70">70 %</option>
                                        <option value="0.75">75 %</option>
                                        <option value="0.80">80 %</option>
                                        <option value="0.85">85 %</option>
                                        <option value="0.90">90 %</option>
                                        <option value="0.95">95 %</option>
                                        <option value="1.00">100 %</option>
                                </select>
                             </td>

         <div class="help">
          <center>W1</center>
        </div>
    </div>
     <div class="col-sm-2"> <td><select name="w2" class="form-control" required>
                                        <option value="">Pilih Nilai Bobot</option>
                                        <option value="0.05">5 %</option>
                                        <option value="0.10">10 %</option>
                                        <option value="0.15">15 %</option>
                                        <option value="0.20">20 %</option>
                                        <option value="0.25">25 %</option>
                                        <option value="0.30">30 %</option>
                                        <option value="0.35">35 %</option>
                                        <option value="0.40">40 %</option>
                                        <option value="0.45">45 %</option>
                                        <option value="0.50">50 %</option>
                                        <option value="0.55">55 %</option>
                                        <option value="0.60">60 %</option>
                                        <option value="0.65">65 %</option>
                                        <option value="0.70">70 %</option>
                                        <option value="0.75">75 %</option>
                                        <option value="0.80">80 %</option>
                                        <option value="0.85">85 %</option>
                                        <option value="0.90">90 %</option>
                                        <option value="0.95">95 %</option>
                                        <option value="1.00">100 %</option>
                                </select>
                             </td>

         <div class="help">
         <center>W2</center>
        </div>
    </div>
      <div class="col-sm-2"> <td><select name="w3" class="form-control" required>
                                        <option value="">Pilih Nilai Bobot</option>
                                        <option value="0.05">5 %</option>
                                        <option value="0.10">10 %</option>
                                        <option value="0.15">15 %</option>
                                        <option value="0.20">20 %</option>
                                        <option value="0.25">25 %</option>
                                        <option value="0.30">30 %</option>
                                        <option value="0.35">35 %</option>
                                        <option value="0.40">40 %</option>
                                        <option value="0.45">45 %</option>
                                        <option value="0.50">50 %</option>
                                        <option value="0.55">55 %</option>
                                        <option value="0.60">60 %</option>
                                        <option value="0.65">65 %</option>
                                        <option value="0.70">70 %</option>
                                        <option value="0.75">75 %</option>
                                        <option value="0.80">80 %</option>
                                        <option value="0.85">85 %</option>
                                        <option value="0.90">90 %</option>
                                        <option value="0.95">95 %</option>
                                        <option value="1.00">100 %</option>
                                </select>
                             </td>

         <div class="help">
          <center>W3</center>
        </div>
    </div>
      <div class="col-sm-2"> <td><select name="w4" class="form-control" required>
                                        <option value="">Pilih Nilai Bobot</option>
                                        <option value="0.05">5 %</option>
                                        <option value="0.10">10 %</option>
                                        <option value="0.15">15 %</option>
                                        <option value="0.20">20 %</option>
                                        <option value="0.25">25 %</option>
                                        <option value="0.30">30 %</option>
                                        <option value="0.35">35 %</option>
                                        <option value="0.40">40 %</option>
                                        <option value="0.45">45 %</option>
                                        <option value="0.50">50 %</option>
                                        <option value="0.55">55 %</option>
                                        <option value="0.60">60 %</option>
                                        <option value="0.65">65 %</option>
                                        <option value="0.70">70 %</option>
                                        <option value="0.75">75 %</option>
                                        <option value="0.80">80 %</option>
                                        <option value="0.85">85 %</option>
                                        <option value="0.90">90 %</option>
                                        <option value="0.95">95 %</option>
                                        <option value="1.00">100 %</option>
                                </select>
                             </td>

         <div class="help">
          <center>W4</center>
        </div>
    </div>
      <div class="col-sm-2"> <td><select name="w5" class="form-control" required>
                                        <option value="">Pilih Nilai Bobot</option>
                                        <option value="0.05">5 %</option>
                                        <option value="0.10">10 %</option>
                                        <option value="0.15">15 %</option>
                                        <option value="0.20">20 %</option>
                                        <option value="0.25">25 %</option>
                                        <option value="0.30">30 %</option>
                                        <option value="0.35">35 %</option>
                                        <option value="0.40">40 %</option>
                                        <option value="0.45">45 %</option>
                                        <option value="0.50">50 %</option>
                                        <option value="0.55">55 %</option>
                                        <option value="0.60">60 %</option>
                                        <option value="0.65">65 %</option>
                                        <option value="0.70">70 %</option>
                                        <option value="0.75">75 %</option>
                                        <option value="0.80">80 %</option>
                                        <option value="0.85">85 %</option>
                                        <option value="0.90">90 %</option>
                                        <option value="0.95">95 %</option>
                                        <option value="1.00">100 %</option>
                                </select>
                             </td>

         <div class="help">
          <center>W5</center>
        </div>
    </div>
</div>
        
    
        
        
        <center><br><br><br><br><br><br>
        <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> &nbsp;&nbsp; 
        <?php echo anchor('investasi','Kembali',array('class'=>'btn btn-default btn-sm'))?>
        </center>
        </form>


                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->