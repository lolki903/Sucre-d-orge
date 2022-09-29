<!doctype html>
<html>
<head>
    <meta>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../assets/css/chat.css">
</head>
<body class="bg-danger">
    <div id="app" class="container-fluid">
        <!--navbar-->
        <nav class="navbar navbar-light bg-danger">
            <form class="form-inline">
              <button class="btn btn-outline-light" type="button">Administrateurs</button>
            </form>
            <div class="logo">
                <img src="src/images/logo.gif" alt="this slowpoke moves"  width="100" />
            </div>
          </nav>
        <!--navbar-->
        <!--content-->
        <div class="row">
        <!--contacts-->
            <div class="col-3">
                <div class="row mt-2">
                    <div class="col-4">
                        <img width="100%" id="avatarSucre" class= "" src="src/images/candy.png" class="img-fluid" alt="hero">
                    </div>
                    <div class="col-7 pt-5">
                        <h5 id="botSpider">Sucre d'orge</h5>
                    </div>
               </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <img width="100%" id="avatarUser" class= "rounded-circle" src="src/images/santa.png" class="img-fluid" alt="hero">
                    </div>
                    <div class="col-7 pt-5">
                        <h5 id="botBatman">Moi</h5>
                    </div>
                </div>
            </div>
        <!--messages + send message-->
            <div class="col-9">
        <!--messages-->
        <div id="barSendMessages" class="row">
        </div>
            <!-- typing message-->
            <form autocomplete = "off" id="myForm" class="fixed-bottom">
                <div class="typing-message row">
                    <div class="col-9">
                        <div class="input-group mb-3 center justify-content-left">
                            <input type="text" id="input" placeholder="Votre message" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button type="submit" class="btn btn-light">Envoyer</button>
                        </div>
                    </div>
                    <ul class="list"></ul>
                </div>
            </form>
    </div>
<script>

//autocomplet names
let names = ["Julie", "Sarah", "Julien", "Nicolas"];
let sortedNames = names.sort();

let input = document.getElementById("input");

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


showMessageBot("Sucre d'Orge", "Bonjour, a qui souhaites-tu envoyer ton sucre d'orge ? (donne son nom et son prenom)");
let myForm = document.getElementById("myForm");
let messages = document.getElementById("messages");

let chatState = 1;


function askMessage(userSay) {
    if(userSay.toLowerCase().includes("")) {
        showMessageBot("Sucre d'Orge", "Super! le destinaire sera super content!");
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
    let avatarURL = "src/images/santa.png";
    let dateMessage = getFormatedDate();

    let messageUser = document.createElement("div");
    messageUser.innerHTML = '<div class="messagesRecus col-6"><div class="card"><h5 class="card-header bg-light text-black"><img id="avatarBot" class="col-1 row mt-1 col-1 rounded-circle" src='+avatarURL+' class="img-fluid"><span class="headerText">Moi</span><span class="headerDateHour"> - '+dateMessage+'</span></h5><div class="card-body"><h5 class="card-title"></h5><div id="messages">'+message+'</div></div></div>';
    barSendMessages.appendChild(messageUser);
    window.scrollTo(0,document.body.scrollHeight);
}

function showMessageBot(botName, message) {
    let barSendMessages = document.getElementById("barSendMessages");
    let avatarURL = choixAvatar(botName);
    let dateMessage = getFormatedDate();

    let messageBot = document.createElement("div");
    messageBot.innerHTML = '<div class="col-6"><div class="card"><h5 class="card-header bg-light" id="headerText"><img id="avatarBot" class="col-1 row mt-1 col-1" src='+avatarURL+' class="img-fluid" alt="hero"><span class="headerText">'+botName+' - </span><span class="headerDateHour">  '+dateMessage+'</span></h5></div><div class="card-body"><p>'+message+'</p></div></div>';
    barSendMessages.appendChild(messageBot);
    window.scrollTo(0,document.body.scrollHeight);
}

function choixAvatar(botName) {
    let avatarURL;
    let avatarSucreOrgeURL = "src/images/candy.png";

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
    let searchBar= document.getElementById("input");
    let userSay = searchBar.value;
    document.getElementById("input").value = "";

    if(userSay.length!==0) {
        showMessageUser(userSay);

        if(userSay.toLowerCase().includes("aide")) {
        aide();
        } else {
            switch(chatState) {
                case 1:
                    askMessage(userSay);
                    chatState = 2;
                    break;
                case 2:
                    messageUser(userSay);
                    chatState = 3;
                    break;
                case 3:
                    stopMessage(userSay);
                    break;
                }
        }
    }
});

</script>
</body>
</html>