const vhForm = document.getElementById('vh_form');
const keyElement = document.getElementById("pID");

      function search(vhForm){
            const method = vhForm.method;
            const key = keyElement.value;
            const url = "../control/viewHistoryAction.php" + "?pID=" + key;

            let xhttp = new XMLHttpRequest();
            
            xhttp.onreadystatechange = function() {
                  if(this.readyState == 4 && this.status == 200){
                        let response = JSON.parse(this.responseText);
                        console.log(response);
                        
                        document.getElementById("patientDetails").innerHTML = `
                        <table>
                              <thead>
                                    <tr>
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>Age</th>
                                          <th>Disease</th>
                                          <th>Last Diagnosed</th>
                                          <th>History</th>
                                          <th>Action</th>
                                    </tr>
                              </thead>
                              <tbody>
                              </tbody>
                                    <tr>
                                          <td> ${response[0].firstName} </td>
                                          <td> ${response[0].lastName} </td>
                                          <td> ${response[0].age} </td>
                                          <td> ${response[0].disease} </td>
                                          <td> ${response[0].lastDiagonosed} </td>
                                          <td> ${response[0].history} </td>
                                          <td><button style='padding-left:15px;padding-right:15px;padding-top:7px;padding-bottom:7px;border:none;border-radius:10px;background-color:tomato;'><a style='text-decoration:none;color:white;' href='../view/addPrescription.php'>Prescribe</a></button></td>
                                    </tr>
                              </table>
                        `;
                  }
            }
            xhttp.open(method, url, true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send();
            
            //  return false;
      }

      