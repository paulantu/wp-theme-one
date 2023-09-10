
function nextMonthCountDown(date, month){
    date.setMonth(date.getMonth() + month)
    return date;
}

var countDownUntil = nextMonthCountDown(new Date(), 1)


var intervalTime = setInterval(function(){
    var currentDateTime = new Date().getTime();


    var distance = countDownUntil - currentDateTime;
    

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    document.getElementById("days").innerHTML = days;

    var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    document.getElementById("hours").innerHTML = hours;

    var minuts = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    document.getElementById("minutes").innerHTML = minuts;

    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("seconds").innerHTML = seconds;
})