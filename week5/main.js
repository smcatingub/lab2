let currentDivId = 'chat1'; //Lesson 17. Objects
let clickId = 'click-to-continue'; //Lesson 17. Objects

function showNext() { //Lesson 18. Functions
    const currentDiv = document.getElementById(currentDivId); //Lesson 17. Objects
    const currentDivNum = parseInt(currentDivId.slice(-1)); //Lesson 17. Objects
    const nextDivNum = currentDivNum + 1; //Lesson 17. Objects
    const nextDivId = `chat${nextDivNum}`; //Lesson 17. Objects

    if (currentDiv && nextDivNum <= 4) {
        const nextDiv = document.getElementById(nextDivId); //Lesson 17. Objects
        if (nextDiv) {
            setTimeout(() => {
                nextDiv.classList.remove('hidden');
                currentDivId = nextDivId;
            }, 250)
        }
    } else {
        const clickElement = document.getElementById(clickId); //Lesson 17. Objects
        if (clickElement) {
        clickElement.classList.add('hidden');
        }
    }
}
