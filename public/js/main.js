class Irest{
    constructor () {
        this.task_clock = null;
    }

    time () {
        try {
            this.task_clock = new Worker('js/workers/worker_time.js');
            this.task_clock.addEventListener('message', function(e) {
                //console.log(e.data);
            });
            this.task_clock.postMessage({

            });
        } catch (e) {
            console.log(e); /**<- Experimentando*/
        }

    }
}

export { Irest }
