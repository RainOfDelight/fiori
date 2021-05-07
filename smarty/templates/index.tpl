<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel = "stylesheet" type = "text/css"  href = "../css/stile.css"/>
  <link rel ="stylesheet" type="text/css" href="../css/slick.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/slick.js"></script>

  <script src="../js/script.js"></script>
</head>
<body>
{include file="header.tpl"}
<div class="logo">
  <h1>Piante e fiori Tinari</h1>
</div>
<div class="animazione">
  <div><img src="images/fiore1.jpg"></div>
  <div><img src="images/fiore2.jpg"></div>
  <div><img src="images/pianta1.jpg"></div>
  <div><img src="images/pianta2.jpg"></div>
</div>


{foreach $piante as $pianta}
{strip}
  {$pianta.name|capitalize} costa {$pianta.prezzo} <br>
{/strip}
{/foreach}

<label>nomi</label>
<select>
  {foreach $nome as $n}

    <option>{$n}</option>
  {/foreach}

</select>
{include file="footer.tpl"}
</body>
</html>


