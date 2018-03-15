self.addEventListener('message', e => {
    console.log(e.data);
    let days    = ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'];
    let months  = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul' , 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];

    let loop = setInterval(function() {
        let time = new Date();
        self.postMessage({
            day         : time.getDate(),
            dayweek     : days[time.getDay() - 1],
            month       : months[time.getMonth()],
            year        : time.getFullYear(),
            time        : time.toLocaleTimeString().replace(/:\d+ /, ' ')
        })
    }, 500);
});

