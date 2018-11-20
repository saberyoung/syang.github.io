<?php include 'layout.html' ?>
<?php include 'arrfunc.php' ?>

<?php error_reporting(E_ALL ^ E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Welcome; ?></title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <style> 
  .text{  
position: absolute;
left: 20px;
top: 50px;
width:100%;  
height:auto;  
margin:0px 0px 0px 0px;}  
.sky{  
position: absolute;
left: 0px;
top: 750px;
width:50%;  
margin:-400px 0px 0px 0px;}  
.p1{  
position: relative;
left: 420px;
top: 20px;
width:50%;  
margin:0px 0px 0px 0px;}  
.footer{  
position: relative;
left: 300px;
top: 50px;
width:30%;  
height:auto;  
margin:0px 0px 0px 0px;
border: 3px dashed #333333;
background: #FFFFFF;
}  
</style> 
</head>
<body>

<div class="text"> 
   <font size="5">
  <li><a href="background.php">Background</a></li>
  <li><a href="https://www.grawita.inaf.it/">GRAWITA main page</a></li>
  <li><a href="http://graspa.oapd.inaf.it/">Padova SN group</a></li>
  <li><a href="http://www.ligo.org/">LIGO</a></li>
  <li><a href="http://www.virgo-gw.eu/">VIRGO</a></li> 
  <li><a href="mailto:sheng.yang@oapd.inaf.it?Subject=gwpadova%20webpage">Send mail</a></li>
 <li><a href="zoom.php">Log</a></li>
  </font>
  </div>


  <div class="p1"> 
  <font size="3">
  <li> GRAWITA Group</li></font>
  <font size="1">
  GRAWITA (GRAvitational Wave Inaf TeAm) is carrying out follow-up observational campaigns in the optical/NIR bands of the GW trigger observable with the VST, VLT, LBT, TNG, REM ground-based facilities.<br>The Memorandum of Understanding (MOU) were signed in May 2014 between LIGO, Virgo and INAF. During LIGO O1 run, GRAWITA did follow-up survey for GW150914(G184098) and GW151226(G211117) and spectroscopic follow-up for one SNIc, iPTF15dld. In the LVC(LIGO VIRGO Collaboration) O2 run, GRAWITA has searched for GW170814.<br>On August 17th 2017 the first electromagnetic counterpart of a GW event originated by the coalescence of a double neutron star system (GW 170817, Abbott et al. 2017 PRL) was finally observed. A world-wide extensive observing campaign was carried out to follow-up and study this source, with the forefront participation of our team. In particular, our unique VLT dataset provided the first compelling observational evidence for the existence of “kilonovae”(sss17a, DLT17ck, AT17fgo), transient sources powered by radioactive decay of heavy elements resulting from the r–process nucleosynthesis of ejected neutron star matter.
  </font>
  <?php echo "<img widht=300 height=300 src='pic/grawita.png'>"; ?> 
<br><br>
 <font size="3">
  <li> Padova team </li></font>
  <font size="1">
  We developed our transient identification pipeline('SUDARE') based on image difference method. By using several astronomical tools, e.g. Hotpants, Sextractor, astropy, pyraf, Mysql, etc, the candidate list can be extracted from the subtracted images while a ranking algorithm was needed by astronomers to skip the bogus and remain the very real candidates for manual check. The most common used approach now(also employed by our current pipeline) is to compute photometric and geometric features of the candidate from the sub-images. However, due to high and variable image noise levels and image processing artifacts, this approach would remain lots of false alarms that humans must manually reject. The machine learning algorithm would be the complementary and even better choice for the real-time survey while a machine learning approach for transients classification was in progress.
  </font>
  <?php echo "<img height=200 src='pic/diff.png'>"; ?> 
<br><br>
<font size="3">
  <li> Design for this webpage </li></font>
  <font size="1">
  xx
  </font>
  <br>
  <a href="#top">Go to top</a>
  </div>
   
    <div class="footer">
    <p>&copy; 2018 <a href="http://www.dfa.unipd.it/index.php?id=dott1131490">SY</a> on behalf of GRAWITA <a href="mailto:sheng.yang@oapd.inaf.it">
	Contact</a>.</p>
  </div>

  <div class="sky">     
    <div style="padding:0px; width:400px; font-family:sans-serif,Arial,Helvetica; font-size:10pt; text-align:center">
    <div><img src="http://ws.astroviewer.net/skymap?type=png&amp;size=500&amp;colorset=0&amp;lang=en&amp;lon=11.87&amp;lat=45.41&amp;city=Padova&amp;timezone=CET&amp;deco=16399&amp;id=4d6174" width="350" height="350" alt="current night sky over Padova" title="current night sky over Padova" style="border:none" />
    </div>
    </div>

  </body>
  </html>
