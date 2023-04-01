window.onload = pageLoad;

function pageLoad(){
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);
	if (urlParams.get("error")==1){
		if (window.location.href.split('/').pop()== "register.html"){
			document.getElementById('errordisplay').innerHTML = "Registration Error!"
		}else{
			document.getElementById('errordisplay').innerHTML = "Username or password does not match.";
		}
		
	}	
}


// const con = require("./database");

function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");
  

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        //e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });

    document.querySelector(".linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

    loginForm.addEventListener("submit", e => {
        e.preventDefault();

        // Perform your AJAX/Fetch login

        setFormMessage(loginForm, "error", "Invalid username/password combination");
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id === "signupUsername" && e.target.value.length > 0 && e.target.value.length < 10) {
                setInputError(inputElement, "Username must be at least 10 characters in length");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
});


//code noey
const express = require("express")
const cors = require("cors")
const con = require("./database")
const { commit } = require("./database")
const path = require("path")
const { createConnection } = require("mysql")
const { request } = require("http")
const app = express()

app.use(cors())
app.use(express.json());

//เข้าสู่ระบบ
app.post("/signin", (req, res) => {
  const { email, password } = req.body;
  const sql = "Select * from user where email=? and password=?"
  const data = [email, password]
  const values = Object.values(data)
  con.query(sql, values, (err, result) => {
    if (err) throw err;
    if (result.length > 0) {
      console.log(result);
      res.send({ status: true, msg: "Login success", userID: result[0].user_id });
    } else {
      res.send({ status: false, msg: "Username or password is not define" });
    }
  });


});

//ลงทะเบียน
app.post("/signup", (req, res) => {
  const { firstname, lastname, email, password, phone, idcard } = req.body;
  const sql = "insert into user (firstname,lastname,email,password,phone,idcard) values (?,?,?,?,?,?)";
  const data = [firstname, lastname, email, password, phone, idcard]
  const values = Object.values(data)
  con.query(sql, values, (err, result) => {
    if (err) throw err;
    if (result.length > 0) {
      console.log(result);
      res.send({ status: true, msg: "Signup success", userID: result[0].id });
    } else {

      res.send({ status: false, msg: "error" });
    }
  });


});

const port = 3306;

app.listen(port, () => console.log(`Server is running on ${port}`));