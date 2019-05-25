soal no.2 ambil tanggal<br>

result in console
<br><br>

<script>

// Returns an array of dates between the two dates
var getDates = function(startDate, endDate) {
	var startDate = new Date(startDate);
	var endDate = new Date(endDate);
  var dates = [],
      currentDate = startDate,
      addDays = function(days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        
        return date;
      };
  while (currentDate <= endDate) {
  		var hari = currentDate.getDate();
        var bulan = currentDate.getMonth("M")+1;
        var tahun = currentDate.getFullYear();
        currentDate = tahun+'-'+bulan+'-'+hari;
    dates.push(currentDate);
    currentDate = addDays.call(currentDate, 1);
  }
 return dates;
};

// Usage
var dates = getDates('2019-1-01','2019-1-05');                                                                                                           
dates.forEach(function(date) {
  console.log(date);
});
</script>

