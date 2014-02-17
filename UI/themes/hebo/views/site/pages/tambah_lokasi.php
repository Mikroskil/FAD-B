<?php require_once('second_nav.php')?>   
    	<div id="content">
            <div id="slider">
                <canvas id="myCanvas"></canvas>
            </div>
            <article id="aside-article">
                <article id="isi" style="float:left; width:99.6%; height:auto; border-right:2px solid #333; border-top-right-radius:10px;">
                    <h3 style="text-align:center; margin-left:15px; font-size:1.5em;">Selamat Datang di Medanisasi.com</h3>
                    
                <p style="font-size:1em; text-indent:25px;">Jika Anda ingin menambahkan tempat atau lokasi yang Anda ketahui pada situs kami, silahkan isi formulir di bawah ini terlebih dahulu. Kelengkapan data yang Anda isikan pada formulir di bawah ini, akan sangat membantu kami dalam melakukan verifikasi terhadap tempat atau lokasi yang Anda rekomendasikan.</p>
                    
                <form id="tambah_lokasi" style="border:none" method="post">
                    <fieldset class="input">
                        <label for="username" style="margin-left:93px">Username : </label>
                        <input type="text" name="username" placeholder="Username Anda" required/>
                    </fieldset>
                    
                    <fieldset class="input">
                        <label for="realname" style="margin-left:121px">Nama : </label>
                        <input type="text" name="realname" placeholder="Nama lengkap Anda" required/>
                    </fieldset>
                    
                    <fieldset class="input">
                        <label for="email" style="margin-left:123px">Email : </label> 
                        <input type="email" name="email" placeholder="Email Anda" required />
                    </fieldset>
                    
                    <fieldset class="input">
                        <label for="nama_tempat">Nama Tempat : </label> 
                        <input type="text" name="nama_tempat" placeholder="Nama tempat Anda" required />
                    </fieldset>
                    
                    <fieldset class="input">
                        <label for="keterangan" style="margin-left:88px">Keterangan : </label> 
                        <textarea style="margin-left:5px" name="keterangan" placeholder="Ketikkan informasi yang berkaitan dengan tempat Anda" required></textarea>
                    </fieldset>
                    
                    <fieldset class="input">
                        <label for="lokasi" style="margin-left:122px">Lokasi : </label> 
                        <textarea style="margin-left:4px" name="lokasi" placeholder="Ketikkan alamat dari tempat yang Anda rekomendasikan" required></textarea>
                    </fieldset>
                    
                    <fieldset class="input">
                    	<div id="button">
                            <input type="submit" name="kirim" value="Kirim">
                            <input type="reset" name="batal" value="Batal">
                        </div>
                    </fieldset>
                </form>
                    
                </article>

            </article>
                
            <footer id="taq">
                <p style="padding-top:0.4%">All right reserved, &copy; 2013. Medanisasi.com.<br>Develeopment by <strong>FAD-B Team</strong></p>
            </footer>
        </div>
