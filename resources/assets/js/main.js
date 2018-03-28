import {DateTime} from "./libraries/luxon/js/luxon";
import WorkerTime from "worker-loader!./workers/worker_time";

class Irest{
    constructor (timezone) {
        this._timezone   = timezone;
        this._task_clock = null;

        //init clock
        this.time();
    }

    get timezone() {
        return this._timezone;
    }

    time () {
        try {
            let tz = this.timezone;

            this._task_clock = new WorkerTime();

            this._task_clock.addEventListener('message', function(e) {
                let dt = DateTime.local().setZone(tz); //#<- Es una instancia
                //let d  = new DateTime();

                console.log('Estático');
                //console.log(DateTime);

                console.log('Objeto de datatime');
                //console.log(d);

                let o = {
                    ye  : dt.c.year,
                    mt  : dt.c.month,
                    da  : dt.c.day,
                    ds  : '',
                    ho  : dt.c.hour,
                    mi  : dt.c.minute,
                    ss  : dt.c.second
                };
                console.log(o);
            });
            this._task_clock.postMessage({

            });
        } catch (e) {
            console.log(e); /**<- Experimentando*/
        }

    }
}

export { Irest }

let i = new Irest();


console.log(DateTime.local());