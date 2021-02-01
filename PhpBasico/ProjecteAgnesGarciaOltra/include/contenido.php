<?php
function contenido(){
   print "<main>\n";
   print "<article>\n";
   print " \n";
   print "<form method=\"post\" action=\"./include/procesa.php\" autocomplete=\"on\">";
   print "<fieldset>\n";
   print "<label >Nom i Cognoms:</label> <input id=text type=\"text\" value='' name=\"Nombre\" size=\"20\"><br>\n";
   print "<br> <label >Quin gènere t'agrada més? </label>\n";
   print "<select name=\"question\">\n";
   print " <option value=\"\" selected>... </option>\n";
   print "<option value=\"fantasia\">Fantasia</option>\n";
   print "<option value=\"cienciaficcio\">Ciència-Ficció</option>\n";
   print "<option value=\"historic\">Ficció històrica</option>\n";
   print "<option value=\"drama\">Drama</option>\n";
   print "<option value=\"romanç\">Romanç</option>\n";
   print "<option value=\"animacio\">Animació</option>\n";
   print "<option value=\"terror\">Horror/Terror</option>\n";
   print "</select><br>\n";
   print "<br><label> On les sols veure?</label><br>\n";
   print "<br><input class=\"check\" type=\"checkbox\" name='tv'>A la TV<br>\n";
   print "<input class=\"check\" type=\"checkbox\" name='online'>Online<br>\n";
   print " <br><label> Quan n'he sols veure?</label><br>";
   print " <br><input class=\"check\" type=\"radio\" name='finde'>Els caps de setmana<br>\n";
   print " <br><input class=\"check\" type=\"radio\" name='mig'>Al migdia<br>\n";
   print "<br><input class=\"check\" type=\"radio\" name='nit'>A la nit<br>\n";
   print "<br><input class=\"check\" type=\"radio\" name='vesprada'>De vesprada<br>\n";
   print "  <br><label>Quantes series veus actualment?</label><input  type=\"number\" name='serieN' value='serieN' min=\"0\" max=\"100\"><br>\n";
   print "<br> <label >Donan's alguna recomanació: </label><br>\n";
   print "<textarea name=\"mensaje\" rows=\"10\" cols=\"50\"></textarea><br>\n";
   print "<br><label >Puntuan's:</label><input type=\"number\" name='punt'  value='punt' min=\"0\" max=\"5\"><br>\n";
   print "</fieldset>\n";
   print "<br><button type=\"submit\" value=\"Submit\">Enviar!</button>\n";
   print "<button id=\"borrar\" type=\"reset\" value=\"borrar\">Borrar todos los datos</button>\n";
   print " </form>\n";
   print "</article>\n";
   print "</main>\n";
}
contenido();
?>
