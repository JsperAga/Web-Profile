/*
Name: Jasper Aga Camana
Student Number: 171139215
Email: jcamana@myseneca.ca
Section: ZBB
*/

// /* ==================== Captcha ==================== */

// function generateCaptcha() {
//     var code = "";
//     var characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
//     for (var i = 0; i < 6; i++) {
//         code += characters.charAt(Math.floor(Math.random() * characters.length));
//     }
//     document.getElementById("captcha-img").src = "captcha.php?code=" + code;
//     document.getElementById("captcha-input").value = "";
//     document.getElementById("captcha-code").value = code;
// }

// function checkCaptcha() {
//     var input = document.getElementById("captcha-input").value;
//     var code = document.getElementById("captcha-code").value;
//     if (input == code) {
//         alert("Captcha is correct!");
//         generateCaptcha();
//     } else {
//         alert("Captcha is incorrect. Please try again.");
//     }
// }

// ==================== Code for responsive navbar ====================
let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.nav-links');

// Making the navbar responsive using a menu icon
menu.addEventListener('click', function() {
    navbar.classList.toggle('open-menu');
    menu.classList.toggle('move');
});

// The navbar should collapse on small screens when scrolled
window.onscroll = () => {
    navbar.classList.remove('open-menu');
    menu.classList.remove('move');
}

// ==================== Code for getting the pay rate input field when hiring option is chosen ====================
const sizes = ['question', 'comment', 'hiring'];

const group = document.querySelector("#group");
group.innerHTML = "<label for='purpose'>What is the purpose of this message?</label><br><br>";
group.innerHTML = group.innerHTML + sizes.map((size) => `<div>
<input type="radio" name="purpose" value="${size}" id="${size}">
 <label for="${size}">${size}</label>
</div>`).join(' ');

const radioButtons = document.querySelectorAll('input[name="purpose"]');
        for(const radioButton of radioButtons){
            radioButton.addEventListener('change', showSelected);
        }   

        function showSelected(e) {
            //console.log(e);
            if (this.checked) {
                document.getElementById("radiosel").value = this.value;
            }
        }

let hiringRadioButton = document.getElementById('hiring');
let questionRadioButton = document.getElementById('question');
let commentRadioButton = document.getElementById('comment');

// Variable to make sure that the form is only printed once no matter how many times the hiring button is clicked
var clicked = 0;

// Adding event listeners
hiringRadioButton.addEventListener('click', function() {
    if (clicked == 0) {
        generatePayRateInput();
        clicked++;
    }
});

questionRadioButton.addEventListener('click', function() {
    if (clicked > 0) {
        deletePayRateInput();
        clicked = 0;
    }
});

commentRadioButton.addEventListener('click', function() {
    if (clicked > 0) {
        deletePayRateInput();
        clicked = 0;
    }
});

// Function to generate the rate input field
function generatePayRateInput() {
    let break1 = document.createElement('br');
    break1.id = 'b1';
    let break2 = document.createElement('br');
    break2.id = 'b2';
    let break3 = document.createElement('br');
    break3.id = 'b3';

    // Creating a label
    const node1 = document.createElement("label");
    const textNode = document.createTextNode("Expected Hourly Rate: ");
    node1.appendChild(textNode);
    node1.id = 'rate-label';
    node1.name = 'rate-label';
    

    // Creating the input Field
    const node2 = document.createElement("input");
    node2.id = 'rate-input';
    node2.name = 'rate-input';
    node2.type = 'number';
    node2.step = '0.1';
    node2.placeholder = 'Hourly Pay';
    node2.classList.add('format')

    document.querySelector(".radio-btns").appendChild(break1);
    document.querySelector(".radio-btns").appendChild(break2);
    document.querySelector(".radio-btns").appendChild(node1);
    document.querySelector(".radio-btns").appendChild(break3);
    document.querySelector(".radio-btns").appendChild(node2);
}

// Function to delete the pay rate input field
function deletePayRateInput() {
    let label = document.getElementById('rate-label');
    let input = document.getElementById('rate-input');
    let div = document.querySelector(".radio-btns");
    let b1 = document.getElementById('b1');
    let b2 = document.getElementById('b2');
    let b3 = document.getElementById('b3');

    div.removeChild(b1);
    div.removeChild(b2);
    div.removeChild(b3);
    div.removeChild(input);
    div.removeChild(label);
}

// ==================== Form Validation Code ====================
let messages = [];
const form = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
function validateForm() {
    const email = document.getElementById('email');
    let postalCode = document.getElementById('pCode');
    let alertmessage = "";
    let x = document.forms["contact-form"]["name"].value;
    if (x == "") {
        alertmessage += "Name is Required \n";
        document.getElementById("name").style.border="3px solid red";
    } else {
        document.getElementById("name").style.border="";
    }

    let d = document.forms["contact-form"]["address"].value;
    if (d ==""){
        alertmessage += "Address is Required \n";
        document.getElementById("address").style.border="3px solid red";
    } else {
        document.getElementById("address").style.border="";
    }


    let y = document.forms["contact-form"]["email"].value;
    if (y == "") {
        alertmessage += "Email Address is Required \n";
        document.getElementById("email").style.border="3px solid red";
  
    } else {
        let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (!(email.value.match(validRegex))) {
            alertmessage += "Invalid Email Address Format\n";
            document.getElementById("email").style.border="3px solid red";           
        } else {
            document.getElementById("email").style.border="";   
        }
    } 

    let z = document.forms["contact-form"]["city"].value;
    if (z == "") {
       alertmessage += "City is Required\n";
       document.getElementById("city").style.border="3px solid red";       
    } else {
        document.getElementById("city").style.border="";       
    }

    let q = document.forms["contact-form"]["pCode"].value;
    if (q == "") {        
        alertmessage += "Postal Code is Required\n";    
        document.getElementById("pCode").style.border="3px solid red";   
    } else {
        let validRegex = /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;
        if (!(postalCode.value.match(validRegex))) {
            alertmessage += "Invalid Postal Code Format\n";
            document.getElementById("pCode").style.border="3px solid red";
       
        } else {
            document.getElementById("pCode").style.border="";
        }
    }
    
    let r = document.forms["contact-form"]["radiosel"].value;    
    if (r==""){       
        alertmessage += "Purpose is Required\n";       

    } else {
        if (r=="hiring"){
            let h = document.forms["contact-form"]["rate-input"].value;
            if (h == ""){                
                alertmessage += "Hourly Pay is Required\n";
                document.getElementById("rate-input").style.border="3px solid red";
                
            } else {
                document.getElementById("rate-input").style.border="";
            }
        }
    }

  
    

    let m = document.forms["contact-form"]["message"].value;
    if (m ==""){
        
        alertmessage += "Message is Required\n";
        document.getElementById("message").style.border="3px solid red";
                
    } else {
        document.getElementById("message").style.border="";
    }

    let f = document.forms["contact-form"]["field"].value;
    if (f==""){
        alertmessage += "Industry type is Required\n";   
        document.getElementById("field").style.border="3px solid red";
    } else {
        document.getElementById("field").style.border="";
    }

    let ci = document.forms["contact-form"]["captcha-input"].value;
    let cc = document.forms["contact-form"]["captcha-code"].value;
    if (ci==""){
        alertmessage += "Captcha is Required\n";   
        document.getElementById("captcha-input").style.border="3px solid red";
    } else if (ci != cc){
        alertmessage += "Captcha does not match, please enter again\n";   
        document.getElementById("captcha-input").style.border="3px solid red";
    } else {
        document.getElementById("field").style.border="";
    }

   
    if (alertmessage != ""){        
        document.querySelector("#errormessage").innerText = "Error Message: \n" + alertmessage;
        return false;
    } else {
        return true;
    }
}

form.addEventListener('reset', (e) => {
    messages = [];
    errormessage.innerHTML = '';
})


