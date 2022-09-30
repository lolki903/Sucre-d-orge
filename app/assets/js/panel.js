function callSearch(str){
			if(str.length ==0){
				document.getElementById('result').innerHTML="Rajouter du text pour rechercher";
                document.getElementById('result').style.display = "block";

			}
			else{
				 var xmlhttp=new XMLHttpRequest();
					xmlhttp.onreadystatechange=function() {
					if (this.readyState==4 && this.status==200) {
						document.getElementById('result').innerHTML=this.responseText;
						console.log(this.responseText);
					}
				}
			xmlhttp.open("GET","controller/GetUsers.php?name="+str,true);
			xmlhttp.send();
			
				
			}
}

function searchlink(content,li){;
    let input = document.getElementById("inputName")
    input.value = content;
    let ul = document.getElementById("result");
    ul.style.display = "none";
}

let names = [];
let sortedNames = names.sort();

let input = document.getElementById("inputName");

input.addEventListener("keyup", (e) => {
removeElements();

for(let i of sortedNames) {
    if(i.toLowerCase().startsWith(input.value.toLocaleLowerCase()) && input.value != "") {
        let listItem = document.createElement("li");
        listItem.classList.add("list-items");
        listItem.style.cursor = "pointer";
        listItem.setAttribute("onclick", "displayNames('"+ i + "')");

        let word = "<b>" + i.substr(0, input.value.length) + "</b>";
        word += i.substr(input.value.length);
        listItem.innerHTML = word; 
        document.querySelector(".list").appendChild(listItem);
    }
}
});
function displayNames(value) {
    input.value = value; 
    removeElements();
}

function removeElements() {
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
        item.remove();
    });
}


showMessageBot("Sucre d'Orge", "Bonjour "+ Nom +", a qui souhaites-tu envoyer ton sucre d'orge ? (donne son nom et son prenom)");
let myForm = document.getElementById("myForm");
let messages = document.getElementById("messages");

let chatState = 1;


function askMessage(userSay) {
    if(userSay.toLowerCase().includes("")) {
        showMessageBot("Sucre d'Orge", " Super! "+ userSay.split('.',1) + " sera super content!");
    }
    showMessageBot("Sucre d'Orge", "Quel message souhaites-tu lui envoyer ?");
}

function getFormatedDate() {
    let currentDate = new Date();

    let dateMessage = currentDate.toLocaleString('fr-FR', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric'});

    return dateMessage;
}


function showMessageUser(message) {
    let barSendMessages = document.getElementById("barSendMessages");
    let avatarURL = "assets/images/santa.png";
    let dateMessage = getFormatedDate();

    let messageUser = document.createElement("div");
    messageUser.innerHTML = '<div class="messagesRecus col-6"><div class="card"><h5 class="card-header bg-light text-black"><img id="avatarBot" class="col-1 row mt-1 col-1 rounded-circle" src='+avatarURL+' class="img-fluid"><span class="headerText">Moi</span><span class="headerDateHour"> - '+dateMessage+'</span></h5><div class="card-body"><h5 class="card-title"></h5><div id="messages">'+message.toLowerCase()+'</div></div></div>';
    barSendMessages.appendChild(messageUser);
    window.scrollTo(0,document.body.scrollHeight);
}

function showMessageBot(botName, message) {
    let barSendMessages = document.getElementById("barSendMessages");
    let avatarURL = choixAvatar(botName);
    let dateMessage = getFormatedDate();

    let messageBot = document.createElement("div");
    messageBot.innerHTML = '<div style="margin-bottom:15px" class="col-6"><div class="card"><h5 class="card-header bg-light" id="headerText"><img id="avatarBot" class="col-1 row mt-1 col-1" src='+avatarURL+' class="img-fluid" alt="hero"><span class="headerText">'+botName+' - </span><span class="headerDateHour">  '+dateMessage+'</span></h5><div class="card-body"><p>'+message.toLowerCase()+'</p></div></div></div>';
    barSendMessages.appendChild(messageBot);
    window.scrollTo(0,document.body.scrollHeight);
}

function choixAvatar(botName) {
    let avatarURL;
    let avatarSucreOrgeURL = "assets/images/candy.png";

    if(botName=="Sucre d'Orge") {
        avatarURL=avatarSucreOrgeURL;
    }
    return avatarURL;
}

function messageUser(userSay) {

    if(userSay.toLowerCase().includes("")) {
        showMessageBot("Sucre d'Orge", "C'est bien noté! Ton ami(e) recevra bientôt son sucre d'orge.");
        chatState=2;
    }
}

function stopMessage(userSay) {

if(userSay.toLowerCase().includes("")) {
    showMessageBot("Sucre d'Orge", "Vous ne pouvez plus envoyer de sucre d'orge!");
    chatState=3;
}
}

function aide(userSay) {
    showMessageBot("Sucre d'Orge", "Donne le nom et le prenom de la personne à qui tu veux envoyer ton sucre d'orge, ou écris ton message. Tu peux envoyer 1 seul sucre d'orge ");
}


myForm.addEventListener("submit", function(e) {
    e.preventDefault()
    let searchBar= document.getElementById("inputName");
    let userSay = searchBar.value;

    if(userSay.length!==0) {
        showMessageUser(userSay);

        if(userSay.toLowerCase().includes("aide")) {
        aide();
        } else {
            let btnName = document.getElementById('btnsubmitName');
                    let btnMsg = document.getElementById('btnsubmitMessage');
                    let inputMsg = document.getElementById('inputMessage');
                    let inputName = document.getElementById('inputName');

            switch(chatState) {
                case 1:
                    askMessage(userSay);
                    chatState = 2;
                
                    inputName.style.display = "none";
                    inputMsg.style.display ="block";
                    btnName.style.display = "none";
                    btnMsg.style.display = "block";
                    myForm.method="POST";
                    myForm.action="controller/message.php";

                    input.onkeyup = "";
                    break;
                case 2:
                    messageUser(userSay);
                    chatState = 3;

                    inputMsg.attr.placeholder  ="Votre message";
                    //console.log(input.value);
                    btn.remove();
                    break;
                case 3:
                    stopMessage(userSay);
                    break;
                }
        }
    }
})


