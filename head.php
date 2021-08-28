<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title; ?></title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/dashboard/"
    />

    <!-- estilos propios -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Bootstrap core CSS -->
    <link href="framework/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- bootstrap iconos -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="framework/icons/bootstrap-icons.css">

    <style>

      /* iconos */
      

      
      .bi-trash-fill:hover{
        color:red;
      }
      .bi-pencil-square:hover{
        color:white;
      }
      


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .verticalLine {
    border-left: thick solid #ff0000;
}
     
    </style>

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet" />





    <!-- reloj digital -->
<script language="JavaScript" type="text/javascript">
// Reloj digital para web javascript
// Copyright 2015 bloguero-ec.
// Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return
 
 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()
 
var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
 
 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock="<b>Hora actual:   "+hours+":"+minutes+":"
 +seconds+" "+dn+"</b>"
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",1000)
 }
 
 
window.onload=show5
  
 </script>




<!-- script de ajax -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">




    <script type="text/javascript">
$(function() {
            $("#nombre").autocomplete({
                source: "ajax//autocomplete.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
					$('#nombre').val(ui.item.nombre);
					$('#apellidos').val(ui.item.apellidos);
          $('#cedula').val(ui.item.cedula);
          $('#correo').val(ui.item.correo);
          $('#telefono').val(ui.item.telefono)
					$('#id_clientes').val(ui.item.id_clientes);
			     }
            });
		});
</script>

</head>