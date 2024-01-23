class ChatManager { //Lesson 20. Classes
    constructor() { //Lesson 20. Classes
        this.currentDivId = 'chat1'; //Lesson 20. Classes
        this.clickId = 'click-to-continue'; //Lesson 20. Classes
    }
    showNext() { //Lesson 18. Functions
        const currentDiv = document.getElementById(currentDivId); //Lesson 17. Objects & Lesson 22. HTML DOM
        const currentDivNum = parseInt(currentDivId.slice(-1)); //Lesson 17. Objects
        const nextDivNum = currentDivNum + 1; //Lesson 17. Objects
        const nextDivId = `chat${nextDivNum}`; //Lesson 17. Objects

        if (currentDiv && nextDivNum <= 4) {
            const nextDiv = document.getElementById(nextDivId); //Lesson 17. Objects & Lesson 22. HTML DOM
            if (nextDiv) {
                setTimeout(() => { //Lesson 21. Async
                    nextDiv.classList.remove('hidden'); //Lesson 21. Async
                    currentDivId = nextDivId; //Lesson 21. Async
                }, 250) //Lesson 21. Async
            }
        } else {
            const clickElement = document.getElementById(clickId); //Lesson 17. Objects & Lesson 22. HTML DOM
            if (clickElement) {
            clickElement.classList.add('hidden');
            }
        }
    }
}
