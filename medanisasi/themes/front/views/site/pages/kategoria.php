<nav id="second-nav">
	<div id="judulsampinghome2"><h3>Pilih Kategori</h3></div>
    <ul class="menu">
                
<?php
						include "koneksi.php";


//$q = mysql_query("SELECT kategori, subkategori FROM subkategori2 order by kategori asc");
$q = mysql_query("SELECT * FROM subkategori2 order by kategori asc");
// prepare data 
$groups = Array();
while($w = mysql_fetch_assoc($q)) {
  if(!isset($groups[$w['kategori']])) $groups[$w['kategori']] = Array();
  $groups[$w['kategori']][] = $w;
}

// display data
foreach($groups as $group_name => $sections) {
  echo '<li class="item1"><a href=\"#\">'.$group_name.'</a><ul>';
  foreach($sections as $section) {
    echo '<li class="subitemp1"><a href="#">'.$section['subkategori'].'</a></li>';
  }
echo '</ul></li>';
}  
						
						?>


  
  
  
    </ul>
</nav>


    
    