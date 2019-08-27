//ARRAY PLAYER OBJECTS
const coders = [
    {
         id: 1,
         name:"ALEXANDRO",
         dead: false
     },
     {
         id: 2,
         name:"ARNAU",
         dead: false
     },
     {
         id: 3,
         name:"CAMILO",
         dead: false
     },
     {
         id: 4,
         name:"CARLOS",
         dead: false
     },
     
 ];
  
//General state aplication
const state = {
    //RANDOM NUMBER REFERS IN ARRAY INEX
    randomNumber: null,
    //RANDOM ID STRING REFERS IN PLAYER DOOM
    radomPlayerId: '',

    //THE LAST RANDOM NUMBER AND ID
    lastPlayerId: null,
    lastRandomPlayerId: '',

    //RUN APLICATION STATE
    run: false,
    time: 130,
    timer: null
   
};

var players = [];
//IMPORT ALL CODERS

allCoders();


//IMPORT ALL CODERS IN THE PLAYERS ARRAY;
function allCoders() {
    
    players = coders
    //CALL RENDER IN DOM WHEEL FUNCTION
    printWheel();
}

//RENDER PLAYERS ARRAY IN DOM
// function printWheel() {

//     //SELECT A WHEEL DIV
//     let wheel = document.getElementById("wheel");
//     //DECLARE VARIABLES
//     let liveClass = ''
//     let html = ``;

//     //PLAYER ARRAY ITERATE
//     for (let i = 0; i < players.length; i++) {

//         //DECIDE THE CLASS WILL ADD
//         if (players[i].dead === false) {
//             liveClass = 'alive';
//         }
//         if (players[i].dead === true) {
//             liveClass = 'dead';
//         }
//         //ADD HTML IN VARIABLE ITERATION
//         html += `
//             <li class="player ${liveClass}" id='player${players[i].id}'>
//                 ${players[i].name}
//             </li>`;
        
//     }
//     //ON ITERATION FINISH INJECT HTML
//     wheel.innerHTML = html;
// }

//THE RUN PLAY FUNCTION
function play() {

    if (state.run) {
        return
    }

    //CHANGE STATE TO RUN
    state.run = true;

    //CALL FUNCTIONS
    randomNumber();
    changeButtons();
}

//Change selected player randomly in state
function randomNumber() {
        
        //EXECUTE IN INTERVAL
        
        state.timer = setInterval(
            function () {
            
            //SAVE THA LAST RANDOM NUMBER GENERATED
            state.lastRandomNumber=state.randomNumber;
            state.lastRandomPlayerId=`player${state.lastRandomNumber+1}`;

            //GENERATE ROUNDED RANDOM NUMBER BETWEEN 0 AND ALL THE PLAYERS
            let number = Math.floor(Math.random() * players.length);
            
            //IF THE PLAYER ARE DEAD DONT USE THE RANDOM NUMBER
            if (!players[number].dead && state.run) {
                state.randomNumber = number;
                state.radomPlayerId = `player${number+1}`
                

                //CALL CHANGE STYLE PLAYER FUNCTION
                changeStylePlayer()
            }
        }
        , state.time);
    
        
        
}

//CHANGE PLAYERS IN DOM STYLE WHEN RUN 
function changeStylePlayer() {
    
    //REMOVE THE CLASS IN LAST RANDOM PLAYER
    let lastPlayerDOM = document.getElementById(state.lastRandomPlayerId);
    lastPlayerDOM.classList.remove("player-selected")
    
    //TOOGLE THE CLASS OF THE NEW RANDOM PLAYER
    let playerDOM = document.getElementById(state.radomPlayerId);
    playerDOM.classList.toggle("player-selected")
    
}
//Reset all in players array
function reset() {
    if (state.run){
        return
    }

    //ASSIGN IN ALL THE PLAYERS THE DEAD IN FALSE  
    for (let i = 0; i < players.length; i++) {
        players[i].dead = false;
    }
    //RENDER PLAYERS ARRAY
    printWheel();  
    
}

//KILL
function kill() {
    if (!state.run){
        return
    }
    //CHANGE STATE
    state.run = false;
    
    clearInterval(state.timer);
    //CHANGE IN THE PLAYER ARRAY THE DEAD VARIABLE
    players[state.randomNumber].dead=true;
    //CALL TO CHANGE BUTTONS CSS
    changeButtons();
    //RENDER THE ARRAY
    printWheel();
}


//CHANGE BUTTONS CSS

function changeButtons (){
    //SELECT THE BUTTONS IN DOM
    let botonKill = document.getElementById("kill");
    let botonRun = document.getElementById("go");
    let botonReset = document.getElementById ("reset");

    //TOGGLE THE CLASS
    botonKill.classList.toggle("KillButtonInactive")
    botonReset.classList.toggle("ResetButtonInactive")
    botonRun.classList.toggle("PlayButtonInactive")        
    
}

//DELETE ALL THE PLAYERS
function deletePlayers() {
    if (state.run) {
        return
    }
    //DELETE THE PLAYERS ARRAY
    players = [];
    //RENDER ARRAY
    printWheel();

}

//ADD PLAYER
function addPlayer(){
    if (state.run) {
        return
    }
    //SELECT THE NEW PLAYER INPUT
    let newPlayer = document.getElementById('newPlayer')
    
    //RETURN IF NO INPUT VALUE
    if (!newPlayer.value){
        return
    }

    //ADD PLAYER OBJECT IN ARRAY PLAYERS
    players.push(
        {
            id: players.length+1,
            name: newPlayer.value,
            dead: false
        }
    )
    //RENDER THE WHEELL
    printWheel();
}



