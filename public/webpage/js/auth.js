//Selecting required elements
var getdots = document.getElementsByClassName('dot'),
getpages = document.getElementsByClassName('page'),
getform = document.getElementById('form'),
getprevbtn = document.getElementById('prevbtn'),
getnextbtn = document.getElementById('nextbtn'),
getresultcontainer = document.getElementById('result-container');

//Page Keys
var pagekeys = [
["email","password","newsletter","newsletter"], //Page 1: 
["firstname","lastname","profile"],             //Page 2: 
["dob","rollno","dpm"],                         //Page 3: 
["phone","address","documents","documents"]     //Page 4: 
];

var datas = [];

let curridx = 0;//0 1 2 3

showpage(curridx);

//function to show correct page
function showpage(num){

  const pages = document.querySelectorAll('.page');
  pages.forEach((page,index)=>{
    page.style.display = index === num ? "block" : "none";
  });

  num === 0 ? getprevbtn.style.display = "none" : getprevbtn.style.display="inline-block";
//   num === 0 ? getprevbtn.style.display = "none" : getprevbtn.style.display="inline-block";

  num === (getpages.length-1) ? getnextbtn.textContent = "Submit" : getnextbtn.textContent = "Next";

  dotindicator(num);
}
//function to show the progress
function dotindicator(num){
  for(var x = 0 ; x < getdots.length ; x++){
    getdots[x].classList.remove('active');
  }
  getdots[num].className += " active";//current dots
}

function gonow(num){
//   if(num == 1 && !formvalidation()){
//     return false;
//   };//false if the form is not validated
//   getpages[curridx].style.display = "none";
//   curridx = curridx + num;

//   if(curridx >= getpages.length){
//     getform.style.display = "none";//hide form
//     getresultcontainer.style.display = "block";//show detail information
//     result(datas);//show all input datas
//     return false;
//   }

//   showpage(curridx);

  if( num == 1 && !formvalidation()) return false;
    getpages[curridx].style.display = "none";
    curridx = curridx+num;//next or previous

    if(curridx >= getpages.length){
        // getform.submit();

        getform.style.display= "none";//hide form
        getresultcontainer.style.display = "block";//show detail information

        result(datas);//show all input datas
        return false;
      }
      showpage(curridx);
  
}


//function to make sure the form is valid or not
function formvalidation(){
  var valid = true;
  var getcurrentinput = getpages[curridx].getElementsByTagName('input');

  if(!datas[curridx]){
    datas[curridx] = {};//create an object fot the page if it's not exist
  }

  let currpagekeys = pagekeys[curridx];

  for(var x = 0 ; x < getcurrentinput.length;x++){
        //console.log(x) = 0 to 3
        // console.log(getcurrentinput[x].value);

        let input = getcurrentinput[x];
        let key = currpagekeys[x];
        if(input.type === "radio"){
        if(input.checked){
            datas[curridx][key] = input.value;
            
        }
        }else if(input.type === "checkbox"){

        if(!datas[curridx][key]){
            datas[curridx][key] = [];
        }
        if(input.checked){
            datas[curridx][key].push(input.value);
        }


        }else if((input.value).trim()=== ''){
        input.classList.add('error');
        valid = false;
    }else{
        input.classList.remove('error');
        datas[curridx][key] = input.value;
    }

  }

  console.log(datas);

  if(valid){
    getdots[curridx].className += " done";
  }
  
  // console.log(valid);
  return valid;

}

function result(data){
    const documentlist = data[3].documents.length > 0 ? data[3].documents.join(',') : "No Data";
    getresultcontainer.innerHTML = `
    <h1>Your Information</h1>
   <ul>
    <li>Name :  ${data[1].firstname} ${data[1].lastname}</li>
    <li>Agree To Newsletter : ${data[0].newsletter == '1' ? 'Yes' : 'No'} </li>
    <li>Email :  ${data[0].email}</li>
    <li>Profile :  ${data[1].profile}</li>
    <li>Date Of Birth :  ${data[2].dob}</li>
    <li>Roll Number :  ${data[2].rollno}</li>
    <li>Department :  ${data[2].dpm}</li>
    <li>Phone Number :  ${data[3].phone}</li>
    <li>Address :  ${data[3].address}</li>
    <li>Student Type :  ${documentlist}</li>
  </ul>
  
  <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Now</button>
  
    `;
}

function submitbtn(){
    getform.submit();
  }