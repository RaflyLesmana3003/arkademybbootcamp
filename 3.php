soal no.3 jml huruf hidup<br>
<br><br>


<form >
   <input type="button" value="generate" onClick="generate('raflylesmana');">&nbsp;
   <p name="p"></p>
   </form>
<script>

function generate (katakata) {
   var kata =katakata.split("",katakata.length);
   var jml = 0 ;
   for(var i = 0 ; i<kata.length;i++){
      if ("a" == kata[i] || "A" == kata[i]) {
         jml += 1 ;
      }else if("i" == kata[i] || "I" == kata[i]){
jml += 1 ;
      }else if("u" == kata[i] || "U" == kata[i]){
jml += 1 ;
      }else if("e" == kata[i] || "E" == kata[i]){
jml += 1 ;
      }else if("o" == kata[i] || "O" == kata[i]){
jml += 1 ;
      }
   }
   alert(jml);
   console.log(jml)
}

</script>

