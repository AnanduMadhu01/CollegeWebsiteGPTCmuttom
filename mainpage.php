<?php
session_start();
if(isset($_SESSION['department']))
{
  include_once "staffheader.php"; 
}
else{
include_once "header.php";
}
?>
<div class="wrapper row3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <ol>
      <li> 
        <h2><span>MAIN BLOCK</span></h2>
        <div><img height=100% width=100% src="images/slide/gpcImage1.jpg" alt="gptc muttom" /></div>
      </li>
      <li>
        <h2><span>APJ ABDULKALAM BLOCK</span></h2>
        <div><img height=100% width=100% src="images/slide/apjblock.jpg" alt="apj block" /></div>
      </li>
      <li>
        <h2><span>MAIN ENTRANCE</span></h2>
        <div><img height=100% width=100% src="images/slide/gpcimage2.jpeg" alt="gptc muttom" /></div>
      </li>
      <li>
        <h2><span>GPTC MUTTOM</span></h2>
        <div><img height=100% width=100% src="images/slide/gpcimage3.jpeg" alt="gptc muttom" /></div>
      </li>
      <li>
        <h2><span>GPTC MUTTOM</span></h2>
        <div><img height=100% width=100% src="images/slide/gpcimage4.jpg" alt="gptc muttom" /></div>
      </li>
    </ol>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<a id="about"></a>
<?php
include_once "contactmain.php";
?>


<?php
include_once "footer.php";
?>
