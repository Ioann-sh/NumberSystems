window.onload = function (){
    async function sendRequest(params={}){
        const query = Object.keys(params)
            .map(key => `${key}=${params[key]}`).join('&');
        const response = await fetch(`api/?${query}`);
        return await response.json();
    }

    async function send(){
        const number = document.getElementById('number').value;
        const convertFrom = document.getElementById('convertFrom').value;
        const convertTo = document.getElementById('convertTo').value;
        const answer = await sendRequest({number, convertFrom, convertTo})
        console.log(answer);
        if (answer.result === 'ok'){
            document.getElementById('result').innerHTML = `Result: ${answer.data}`
        } else {
            document.getElementById('result').innerHTML = 'Error. Perhaps you did not enter a number, or the programmer is clumsy.'
        }
    }

    document.getElementById('send').addEventListener('click', send);

}