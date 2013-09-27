<?php require_once('conect.php');
$qs="SELECT * FROM consejo WHERE activo = '1'";
$sql_exec=mysql_query($qs);


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Kromi Market   -  El hipermercado de la Ciudad</title>
<script src="Templates/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<div align="center">
  <table width="760" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="760" valign="top"><table width="760" border="0" cellspacing="0" cellpadding="0">

        <tr>
          <td width="30" rowspan="2" background="img/shadow_left.jpg" bgcolor="#FFFFFF">&nbsp;</td>
          <td width="720"><table width="720" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','720','height','220','src','../botonera','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','botonera' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="720" height="220">
                <param name="movie" value="Templates/botonera.swf" />
                <param name="quality" value="high" />
                <embed src="Templates/botonera.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="720" height="220"></embed>
              </object></noscript>
             </td>
            </tr>
            <tr>
              <td valign="top" bgcolor="#FFFFFF"><!-- InstanceBeginEditable name="Editable" -->
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="32%" valign="top"><div align="justify">
                      <div align="justify"><br />
                          <img src="img/titulo_consejos.gif" alt="IMG consejos" width="220" height="68" /> <br />
                          <br />
                          <span class="general">Nuestros servicios son base fundamental de nuestro &eacute;xito, porque queremos brindarle la mejor atenci&oacute;n y ofrecerle la mayor cantidad de complementos para que su visita a Kromi Market sea una experiencia agradable. </span></div>
                      <br />
                    </div></td>
                    <td width="4%">&nbsp;</td>
                    <td width="64%" valign="top"><?php while($articulo=mysql_fetch_assoc($sql_exec)) {?>
                        <br />
                        <br />
                        <table width="430" border="0" align="center">
                        <tr>
                          <td height="30" colspan="2" class="general" style="font-weight: bold"><div align="left" style="font-weight: bold">
                            <?=$articulo['titulo']?>
                            </div></td>
                            </tr>
                        <tr>
                          <td width="300" valign="top" class="general">
                            
                            <div align="left">
                              <?=$articulo['contenido']?>
                              </div></td>
                            <td width="120"><div align="center"><img src="<?=$articulo['foto']?>" border="1" /></div></td>
                          </tr>
                        </table>
                      <?php }?></td></tr>
                </table>
                <p>&nbsp;</p>
                <!-- InstanceEndEditable --></td>
            </tr>
          </table></td>
          <td width="30" rowspan="2" background="img/shadow_right.jpg" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#322B88" class="style4"><div align="right">
            <table width="37%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="sobreoscuropeq">KROMI MARKET C.A., RIF J-00056486-8 </td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </div></td>
          </tr>
        <tr>
          <td background="shadow_left.jpg" bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#685FCC" class="style4"><div align="right" class="style5">
            <table width="37%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="sobreoscuropeq">Desarrollado por <a href="http://www.indexa.com.ve" target="_blank" class="sobreoscuro">Indexa  </a></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </div></td>
          <td background="shadow_right.jpg" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
<!-- InstanceEnd --></html>

