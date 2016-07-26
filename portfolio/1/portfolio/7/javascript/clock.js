function startTime() {
  var toDay = new Date();
  var hours = toDay.getHours();
  var minute = toDay.getMinutes();
  var seconds = toDay.getSeconds();

  var dayNames = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
  var monthNames = ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień' ];

  var dayPL = dayNames[toDay.getDay()];
  var monthPL = monthNames[toDay.getMonth()];

  minute = checkTime(minute);
  seconds = checkTime(seconds);
  document.getElementById('clock').innerHTML = '<p>' + hours + ':' + minute + ':' + seconds + '<br>' + dayPL + '<br>' + toDay.getDate() + '<br>' + monthPL + '<br>' + toDay.getFullYear() +'</p>';
  var t = setTimeout(startTime, 500);
}

function checkTime(x) {
    if( x < 10 ) {
      x = '0' + x
    };
    return x;
}

startTime();
