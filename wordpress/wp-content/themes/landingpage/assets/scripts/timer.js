function giveawayTimer() {
    //get elements from DOM
    const timerCountdownContainer = document.getElementById('giveaway-ends-timer-countdown');
    const giveawayEndTime = document.getElementById('giveaway-ends-data').innerText;
    
    //transform date to time in seconds
    const giveawayEndTimeObj = new Date(giveawayEndTime);
    const giveawayEndTimeInMilliseconds = giveawayEndTimeObj.getTime();
    const currentTimeInMilliseconds = Date.now();
    let time = Math.floor((giveawayEndTimeInMilliseconds - currentTimeInMilliseconds) / 1000);
    //set time variables
    let days = 0;
    let hours = 0;
    let minutes = 0;
    let seconds = 0;

    //set timer after load page
    updateCountdownTimer();
    //update timer every second
    const idSetIntervalCountdownTimer = setInterval(updateCountdownTimer, 1000);

    function updateCountdownTimer() {
        if(time > 0){
            //convert time to days, hours, minutes and seconds
            days = Math.floor(time / (3600*24));
            hours = Math.floor(time % (3600*24) / 3600);
            minutes = Math.floor(time % 3600 / 60);
            seconds = Math.floor(time % 60);

            //adding "0" before number below 10
            days = addingZeroToNumber(days);
            hours = addingZeroToNumber(hours);
            minutes = addingZeroToNumber(minutes);
            seconds = addingZeroToNumber(seconds);

            //update counter content on page
            timerCountdownContainer.innerText = days + ' : ' + hours + ' : ' + minutes + ' : ' + seconds;
            //decrease time by 1 second
            time --;
        } else {
            clearInterval(idSetIntervalCountdownTimer);
        }

        function addingZeroToNumber(unit) {
            return unit < 10 ? '0' + unit : unit;
        }
    }
}
giveawayTimer();