self.addEventListener('message', e => {
    console.log(e.data);
    let loop = setInterval(function() {
        self.postMessage({
            refresh_time : true
        })
    }, 1000);
});

