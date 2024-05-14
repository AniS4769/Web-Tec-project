const financeForm = document.getElementById('f_Form');
const bankName = document.getElementById("bankName");
const accNo = document.getElementById("accNo");

      function submitData(financeForm){
            preventDefault();
            const method = financeForm.method;
            const url = "../control/financeAction.php";
            const bank = bankName.value;
            const accountNo = accNo.value;
            let xhttp = new XMLHttpRequest();
            
            xhttp.onreadystatechange = function() {
                  if(this.readyState == 4 && this.status == 200){
                        let response = null;    

                        try {
                            response = JSON.parse(xhttp.responseText);   
                        } catch (error) {
                            console.error("Could Not Parse JSON!");
                        }
                    
                        if(response){
                            // location.href = "../view/finance.php";
                            document.getElementById("success").innerHTML = "Account Updated successfully.";
                        }
                         
                        console.log(response);
                        
                  }
            }
            const reqData = `bankName=${bank}&accNo=${accountNo}`;
            xhttp.open(method, url);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send(reqData);
            
            //  return false;
      }

      