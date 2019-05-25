soal no.5 ganti_kata<br>

result in console
<br><br>
<form >
   <input type="button" value="generate" onClick="ganti_kata('purwakerta','a','o');">&nbsp;
   <p name="p"></p>
   </form>
<script>

function ganti_kata (katakata,depan,belakang) {
   var kata =katakata.split("",katakata.length);
   var result ="" ;
   for (var i = 0; i < kata.length; i++) {
       
       if (depan == kata[i] || depan == kata[i]) {
         kata[i] =belakang ;
}
result += kata[i];
}
console.log(result)
alert(result)
}

</script>

