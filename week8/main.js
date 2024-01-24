let currentDivId = 'chat1'; 
let clickId = 'click-to-continue'; 

function showNext() { 
    const currentDiv = document.getElementById(currentDivId); 
    const currentDivNum = parseInt(currentDivId.slice(-1)); 
    const nextDivNum = currentDivNum + 1; 
    const nextDivId = `chat${nextDivNum}`; 

    if (currentDiv && nextDivNum <= 4) {
        const nextDiv = document.getElementById(nextDivId); 
        if (nextDiv) {
            setTimeout(() => { 
                nextDiv.classList.remove('hidden'); 
                currentDivId = nextDivId; 
            }, 250) 
        }
    } else {
        const clickElement = document.getElementById(clickId); 
        if (clickElement) {
        clickElement.classList.add('hidden');
        }
    }
}
