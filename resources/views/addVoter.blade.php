@extends('layout.admin')

@section('content')
    <div class="card mb-3">
        <div class="card-header"><i class="far fa-address-card"></i> Register a Voter</div>
        <div class="card-body">
         <form action="" method="POST" class="form-horizontal form-label-left">
  
         <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="name" class="form-control" id="inputfname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Imran" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
       <input type="name" class="form-control" id="inputlname" pattern="^[A-Z]{1}[a-z]{2,}$" maxlength="10" placeholder="Khan" onkeypress="return onlyAlphabets(event)" onkeyup="btnDisable()" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputFatherName">Father Name</label>
        <input type="name" class="form-control" id="inputfaname" pattern="^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}$" maxlength="22" placeholder="Muhammad Jinnah" onkeypress="return alphaOnlyWithSpace(event)" onkeyup="btnDisable()" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" pattern="^[A-Z]{1}-[0-9+]{2,},\s[A-Za-z]{2,}\s[A-Za-z]{2,}$" placeholder="B-413, Bisma Residency" onkeyup="btnDisable()" required>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" pattern="^[A-Za-z]{5}#[0-9+]{2},\s[A-Za-z]{2,},\s[A-Za-z]{2,}$" placeholder="Block#13, Johar, Karachi" onkeyup="btnDisable()" required>
    </div>
    
    <!--Date of birth + Age + Gender-->
    <div class="form-row">
      <div class="well"> 
        <div class="form-group">
        <label for="DOB">Date of Birth</label>
        <input type="date" class="form-control" id="inputDOB" placeholder="Date of Birth" onkeyup="btnDisable()" required>
      </div>
    </div>
    <div class="well"> 
    </div>
    <div class="well"> 
    
      <div class="form-group col-md-6">
          <label for="inputAge">Age</label>
          <input type="number"  id="inputAge" placeholder="18+" min="18" max="150" onkeyup="btnDisable()" required>
      </div>
    </div>
  
    <div class="form-group col-md-2">
      <label for="inputGender">Gender</label>
      <select id="inputGender" class="form-control" onkeyup="btnDisable()" required>
        <option ></option>
        <option>Male</option>
        <option>Female</option>
      </select>
   
    </div>
  
    </div>
  <!--!!!!END Date of birth + Age + Gender!!!!!-->
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputNationality">Nationality</label>
               <input type="name" class="form-control" id="inputNationality" onkeypress="return onlyAlphabets(event)" pattern="[A-Z]{1}[a-z]{2,}" placeholder="Pakistan" maxlength="12" onkeyup="btnDisable()" required>
          </div>
          <div class="form-group col-md-6">
              <label for="inputCNIC">CNIC</label>
              <input type="text" maxlength="13" onkeypress="return isCNIC(event)" pattern="^[0-9+]{5}[0-9+]{7}[0-9]{1}$" name="cnic" class="form-control" name="cnic" id="inputCNIC"  placeholder="XXXXXXXXXXXXX" aria-describedby="basic-addon1" onkeyup="btnDisable()" required>  
          </div>
      </div>
  
  <!-- NA & PS CONSTITUENCY-->
  <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputNA">NA-CONSTITUENCY</label>
              <input type="text" class="form-control" id="inputNA" placeholder="NA-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" onkeyup="btnDisable()" required>
          </div>
          <div class="form-group col-md-6">
              <label for="inputPS">PS-CONSTITUENCY</label>
              <input type="name" class="form-control" id="inputPS" placeholder="PS-XXX" pattern="^[A-Z]{2}-[0-9+]{1,}$" onkeyup="btnDisable()" required>
          </div>
      </div>
  <!--!!!!!END NA & PS CONSTITUENCY!!!!!-->
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
         <input type="text" class="form-control" onkeypress="return onlyAlphabets(event)" pattern="(?:[A-Z][a-z.-]+[ ]?)+" placeholder="Karachi" id="inputCity" onkeyup="btnDisable()" required>
      </div>
       <div class="form-group col-md-2">
      <label for="inputGender">Province/State</label>
       <select id="inputGender" class="form-control" onkeyup="btnDisable()" required>
        <option ></option>
        <option>Sindh</option>
        <option>Punjab</option>
        <option>Balochistan</option>
        <option>Kpk</option>
        <option>Gilgit Baltistan</option>
      </select>
  </div>
    </div>

    <div>
    <button type="button" class="btn btn-warning">Scan Finger Print</button>   
    <button type="submit"  class="btn btn-primary btn-lg" id='btnRegister'>Register</button>
  </div>  
  </form>
        </div>
      </div>
  
  
  
  </div>
  <!-- /.container-fluid -->

<script>
  
  function isCNIC(evt)
      {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
        return true;
      } 

  function onlyAlphabets(e, t) {
        try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

function alphaOnlyWithSpace(evt) {
    var charCode = (evt.which) ? evt.which : window.event.keyCode;

    if (charCode <= 13) {
        return true;
    }
    else {
        var keyChar = String.fromCharCode(charCode);
        var re = /^[a-zA-Z ]+$/
        return re.test(keyChar);
    }
}

document.getElementById('btnRegister').disabled = true;
  function btnDisable(){  
    inputfname = document.getElementById('inputfname').value;
    inputlname = document.getElementById('inputlname').value;
    inputfaname = document.getElementById('inputfaname').value;
    inputAddress = document.getElementById('inputAddress').value;
    inputAddress2 = document.getElementById('inputAddress2').value;
    inputDOB = document.getElementById('inputDOB').value;
    inputAge = document.getElementById('inputAge').value;
    inputGender = document.getElementById('inputGender').value;
    inputNationality = document.getElementById('inputNationality').value;
    inputNA = document.getElementById('inputNA').value;
    inputPS = document.getElementById('inputPS').value;
    inputCNIC = document.getElementById('inputCNIC').value;
    inputCity = document.getElementById('inputCity').value;


     if(inputfname && inputlname && inputfaname && inputAddress && inputAddress2 && inputDOB && inputAge && inputGender && inputNationality && inputCNIC && inputNA && inputPS && inputCity){
      document.getElementById('btnRegister').disabled = false;
     }
     else{
      document.getElementById('btnRegister').disabled = true;
     }
  }
</script>

@endsection