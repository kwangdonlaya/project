var settingsmenu = document.querySelector(".settings-menu"); 
(function() {
	pageLoad();
	const darkBtn = document.getElementById("dark-btn");
  // var divTag = document.getElementById("username");
  // divTag.innerHTML = getCookie("username");
  const names = document.getElementsByClassName("username");
  var myName = getCookie("username");
  for (var i = 0; i < names.length; i++) {

    names[i].innerHTML = myName;
  }

  // divTag.appendChild(document.createElement("div").innerHTML=getCookie("username"));

	darkBtn.onclick = function () {
		darkBtn.classList.toggle("dark-btn-on");
		document.body.classList.toggle("dark-theme");
	  
		if (localStorage.getItem("theme") == "light") {
		  localStorage.setItem("theme", "dark");
		} else {
		  localStorage.setItem("theme", "light");
		}
		return;
	  };
 })();


function settingMenuToggle() {
  settingsmenu.classList.toggle("settings-menu-height");
}

function checkCookie() {
  var username = "";
  if (getCookie("username") == false) {
    window.location = "login.html";
  }
}

function getCookie(name) {
  var value = "";
  try {
    value = document.cookie
      .split("; ")
      .find((row) => row.startsWith(name))
      .split("=")[1];
    return value;
  } catch (err) {
    return false;
  }
}

async function pageLoad() {
  await readPost();
  document.getElementById("postbutton").onclick = getData;

//   document.getElementById("displayPic").onclick = fileUpload;
//   document.getElementById("fileField").onchange = fileSubmit;

  var username = getCookie("username");

  document.getElementById("username").innerHTML = username;
  console.log(document.getElementById("username").innerHTML)
  // console.log(getCookie("img"));
  showImg("img/" + getCookie("img"));
}

function getData() {
  let username1 = document.getElementById("username").innerHTML;
  var msg = document.getElementById("textmsg").value;
  document.getElementById("textmsg").value = "";
  writePost(msg,username1);

  
}

function fileUpload() {
  document.getElementById("fileField").click();
}

function fileSubmit() {
  document.getElementById("formId").submit();
}

// แสดงรูปในพื้นที่ที่กำหนด
function showImg(filename) {
  if (filename !== "") {
    // var showpic = document.getElementById("displayPic");
    // showpic.innerHTML = "";
    var temp = document.createElement("img");
    temp.src = filename;
    // showpic.appendChild(temp);
  }
}

let tablename = "userInfo";
let tablename_msg = "msginfo";

// complete it
async function readPost() {
  let response = await fetch("/readPost");
  let content = await response.json();
  let post = await showPost(JSON.parse(content));

}

// complete it
async function writePost(msg,username1) {
  let response = await fetch("/writePost", {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      user: username1,
      message: msg,
    }),
  });

  readPost();
}

// แสดง post ที่อ่านมาได้ ลงในพื้นที่ที่กำหนด
function showPost(data){
	var keys = Object.keys(data);
	var divTag = document.getElementById("feed-container");
	divTag.innerHTML = "";
	for (var i = keys.length-1; i >=0 ; i--) {

		var temp = document.createElement("div");
		temp.className = "newsfeed";
		divTag.appendChild(temp);
		var temp1 = document.createElement("div");
		temp1.className = "postmsg";
		temp1.innerHTML = data[keys[i]]["message"];
		temp.appendChild(temp1);
    
		var temp1 = document.createElement("div");
		temp1.className = "postuser";
		temp1.innerHTML = "Posted by: "+data[keys[i]]["user"];
		temp.appendChild(temp1);
    


		
	}
  
}
    // divTag.appendChild(temp1);
    // var temp1 = document.createElement("div");
    // temp1.className = "postmsg";
    // temp1.innerHTML = data[keys[i]]["message"];
    // temp.appendChild(temp1);
    // var temp1 = document.createElement("div");
    // temp1.className = "postuser";

    // temp1.innerHTML = "Posted by: " + data[keys[i]]["user"];
    divTag.appendChild(temp);
  